
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('AttendanceModel','ATND');
		$this->load->model('Job_circular_model');
	}
	public function markMyAttendance(){
		// echo $_SESSION['clocked']=0;
		// die;
		$session=$this->session->userdata('logged_user');
		$my_Id=$session[0]->user_id;
		
		$my_time=$this->input->post('d_time');
		$type=$this->input->post('type');
		$ip=$this->input->ip_address();
		$date_=date('Y-m-d');
		
		// `tbl_clock`(``, ``, `clockin_time`, `clockout_time`, `comments`, `clocking_status`, `ip_address`)
		//first time
		if($type==1){
			$data=array(
				"clockin_time"=>$my_time,
				"ip_address"=>$ip,
			);
			$attArray=array(
				"user_id"=>$my_Id,
				"leave_application_id"=>0,
				"date_in"=>$date_,
				"attendance_status"=>1,
				"clocking_status"=>0
			);
		}else{
			$data=array(
				"clockout_time"=>$my_time,
				"ip_address"=>$ip,
			);
			$attArray=array(
				"user_id"=>$my_Id,
				"leave_application_id"=>0,
				"date_out"=>$date_,
				"attendance_status"=>1,
				"clocking_status"=>0
			);
		}

		$st=$this->ATND->markMyAttendance($data,$my_Id,$attArray);
		if($st!=false){
			$condition=array("user_id"=>$my_Id,"date_in"=>date('Y-m-d'));
			$da=$this->ATND->getAttendanceId($condition);
			$attendanceId=$da[0]->attendance_id;
			if($response=$this->checkForExistenceIntblClock($attendanceId)){
				$temp=0;
				$clk_id=0;
				foreach($response as $clk){
					if($clk->clockout_time==""){
						$temp=1;
						$clk_id=$clk->clock_id;
					}
				}
				if($temp==1){
					// echo 'isiko update krana h';
					$this->db->where('clock_id',$clk_id);
					$clock_out=$my_time;
					if($this->db->update('tbl_clock',array("clockout_time"=>$clock_out))){
						$_SESSION['clocked']=0;
						die(json_encode(array("code"=>1,"msg"=>"Attendance Marked.","data"=>$attendanceId,"act"=>"Update ")));
					}else{
						die(json_encode(array("code"=>0,"msg"=>"Failed to Mark Attendance.","data"=>$attendanceId)));
					} 
				}else{
					// echo 'insert krna hai';
					$new=array_merge($data,array("attendance_id"=>$attendanceId));
					if($this->db->insert('tbl_clock',$new)){
						$_SESSION['clocked']=1;
						die(json_encode(array("code"=>1,"msg"=>"Attendance Marked.","data"=>$attendanceId,"act"=>"Insert")));
					}else{
						die(json_encode(array("code"=>0,"msg"=>"Failed to Mark Attendance.","data"=>$attendanceId)));
					} 
				}
			}else{
				//print_r($response);
				// echo 'Insert Krna Hai';
				$new=array_merge($data,array("attendance_id"=>$attendanceId));
				if($this->db->insert('tbl_clock',$new)){
					$_SESSION['clocked']=1;
					die(json_encode(array("code"=>1,"msg"=>"Attendance Marked.","data"=>$attendanceId,"act"=>"Insert ")));
				}else{
					die(json_encode(array("code"=>0,"msg"=>"Failed to Mark Attendance.","data"=>$attendanceId)));
				}
				// if($this->db->update('tbl_clock',$new)){
				// 	die(json_encode(array("code"=>1,"msg"=>"Attendance Marked.","data"=>$st)));
				// }else{
				// 	die(json_encode(array("code"=>1,"msg"=>"Failed to Mark Attendance.","data"=>$st)));
				// }
				//update
			}


			//insert or update tbl_clock
			
		}else{
			die(json_encode(array("code"=>0,"msg"=>"Failed to Mark Attendance.","data"=>$attendanceId)));
		}
	}
	public function checkForExistenceIntblClock($st){
		return $this->ATND->getClock($st);
	}
	public function getLastInsertedId(){
		return $this->ATND->getLastAttendanceId();
	}
	public function timeHistory()
	{
		
		$data['Employee']=$this->ATND->fetchEmployee();
		$this->load->view('layout/header');
		$this->load->view("pages/time_history",$data);
		$this->load->view("layout/footer");
	}
	public function getTimeHistory(){
		$userId=$this->input->post('emp_id');
		$data['active'] = date('Y');
		$attendance_info = $this->ATND->get_attendance(array('user_id' => $userId));
        $data['mytime_info'] = $this->get_mytime_info($attendance_info);
        // print_r($data['mytime_info']);
        $data['Employee']=$this->ATND->fetchEmployee();
		$this->load->view('layout/header');
		$this->load->view("pages/time_history",$data);
		$this->load->view("layout/footer");
	}
	public function timeChaneRequest()
	{
		$data['Employee']=$this->ATND->fetchEmployee();
		$data['EmpAttendanceDetail']=$this->ATND->fetchEmployeeATNDDetails();
		$this->load->view('layout/header');
		$this->load->view("pages/timechange_request",$data);
		$this->load->view("layout/footer");
	}
	public function attendanceReport()
	{
		$data['Employee']=$this->ATND->fetchEmployee();
		$data['all_dept_info'] = $this->db->get('tbl_departments')->result();
	 	// foreach ($data['all_dept_info'] as $v_dept_info) {
        //     $data['all_department_info'][] = $this->Job_circular_model->get_add_department_by_id($v_dept_info->departments_id);
        // }
		$this->load->view('layout/header');
		$this->load->view("pages/attendance_report",$data);
		$this->load->view("layout/footer");
	}


	public function getattendanceReport()
    {
        $departments_id = $this->input->post('departments_id', TRUE);
        $date = $this->input->post('date', TRUE);

        $month = date('n', strtotime($date));
        $year = date('Y', strtotime($date));
        $num = cal_days_in_month(CAL_GREGORIAN, $month, $year);
		$data['employee_info'] = $this->ATND->get_employee_id_by_dept_id($departments_id);
		

        // $holidays = $this->global_model->get_holidays(); //tbl working Days Holiday

        // if ($month >= 1 && $month <= 9) {
        //     $yymm = $year . '-' . '0' . $month;
        // } else {
        //     $yymm = $year . '-' . $month;
        // }

        // $public_holiday = $this->global_model->get_public_holidays($yymm);

        // //tbl a_calendar Days Holiday
        // if (!empty($public_holiday)) {
        //     foreach ($public_holiday as $p_holiday) {
        //         $p_hday = $this->ATND->GetDays($p_holiday->start_date, $p_holiday->end_date);
        //     }
        // }

        // foreach ($data['employee_info'] as $sl => $v_employee) {
        //     $key = 1;
        //     $x = 0;
        //     for ($i = 1; $i <= $num; $i++) {

        //         if ($i >= 1 && $i <= 9) {
        //             $sdate = $yymm . '-' . '0' . $i;
        //         } else {
        //             $sdate = $yymm . '-' . $i;
        //         }
        //         $day_name = date('l', strtotime("+$x days", strtotime($year . '-' . $month . '-' . $key)));

        //         $data['week_info'][date('W', strtotime($sdate))][$sdate] = $sdate;

        //         // get leave info
        //         if (!empty($holidays)) {
        //             foreach ($holidays as $v_holiday) {
        //                 if ($v_holiday->day == $day_name) {
        //                     $flag = 'H';
        //                 }
        //             }
        //         }
        //         if (!empty($p_hday)) {
        //             foreach ($p_hday as $v_hday) {
        //                 if ($v_hday == $sdate) {
        //                     $flag = 'H';
        //                 }
        //             }
        //         }
        //         if (!empty($flag)) {
        //             $data['attendace_info'][date('W', strtotime($sdate))][$sdate][$v_employee->user_id] = $this->attendance_model->attendance_report_by_empid($v_employee->user_id, $sdate, $flag);
        //         } else {
        //             $data['attendace_info'][date('W', strtotime($sdate))][$sdate][$v_employee->user_id] = $this->attendance_model->attendance_report_by_empid($v_employee->user_id, $sdate);
        //         }
        //         $key++;
        //         $flag = '';
        //     }
        // }
        // $data['title'] = lang('attendance_report');
        // $this->attendance_model->_table_name = "tbl_departments"; //table name
        // $this->attendance_model->_order_by = "departments_id";
        // $data['all_department'] = $this->attendance_model->get();
        // $data['departments_id'] = $this->input->post('departments_id', TRUE);
        // $data['date'] = $this->input->post('date', TRUE);
        // $where = array('departments_id' => $departments_id);
        // $data['dept_name'] = $this->attendance_model->check_by($where, 'tbl_departments');

        // $data['month'] = date('F-Y', strtotime($yymm));

        // $data['subview'] = $this->load->view('admin/attendance/attendance_report', $data, TRUE);
        // $this->load->view('admin/_layout_main', $data);
    }














	public function markAttendance()
	{
		$data['Employee']=$this->ATND->fetchEmployee();
		$this->load->view('layout/header');
		$this->load->view("pages/mark_attendance",$data);
		$this->load->view("layout/footer");
	}
	public function get_mytime_info($attendance_info)
    {

        if (!empty($attendance_info)) {

            foreach ($attendance_info as $v_info) {
            	
            	
                if ($v_info->date_in == $v_info->date_out) {
                	// echo ' ****** ';
                    $date = strftime("%m.%d.%Y", strtotime($v_info->date_in));
                    // print_r($date);
                } else {
                    $date = 'Day In'. ' : ' . strftime("%m.%d.%Y", strtotime($v_info->date_in)) . ', ' . 'Day Out'. ': ' . strftime("%m.%d.%Y", strtotime($v_info->date_out));
                }
                // echo $v_info->attendance_id;
                $details_=$this->get_result($v_info->attendance_id);
                // print_r($details_);
                $clock_info[date('Y', strtotime($v_info->date_in))][date('W', strtotime($v_info->date_in))][$date] = $details_;
//                    $this->attendance_model->get_mytime_info($v_info->attendance_id);
            }
            // print_r($clock_info);
            // echo '****************************************************************************************************************';
            return $clock_info;
        }
    }
    public function get_Result($id){
    	return $this->ATND->getAttendanceDetails($id);
    }
	public function markAttendanceManually(){
		// print_r($_POST);
		$employeeID=$this->input->post('empl_id');
		$dayInArr=explode(' ',$this->input->post('date_In'));
		$dayOutArr=explode(' ',$this->input->post('date_Out'));
		$dayIn=date('Y-m-d',strtotime($dayInArr[0]));
		$dayOut=date('Y-m-d',strtotime($dayOutArr[0]));
		$clockIn=date('h:i:s',strtotime($this->input->post('clock_In')));
		$clockOut=date('h:i:s',strtotime($this->input->post('clock_Out')));
		 // `tbl_attendance`(`attendance_id`, ``, ``, ``, ``, ``, ``)
		$forAttendance=array(
				"user_id"=>$employeeID,
				"date_in"=>$dayIn,
				"date_out"=>$dayOut,
				"attendance_status"=>1,
				"clocking_status"=>0
		);

		$ip=$this->input->ip_address();
		$insertStatus=$this->ATND->insATNDData($forAttendance);
		// print_r($insertStatus);
		$attendanceId=$insertStatus[0]->attendance_id;
		// (`clock_id`, ``, ``, ``, `comments`, ``, ``)

		$forClockIn=array(
					"attendance_id"=>$attendanceId,
					"clockin_time"=>$clockIn,
					"clockout_time"=>$clockOut,
					"clocking_status"=>0,
					"ip_address"=>$ip,
		
		);
		$insertClockStatus=$this->ATND->insClockData($forClockIn);
		if($insertClockStatus!=false){
			die(json_encode(array("code"=>1,"msg"=>"Success.")));
		}else{
			die(json_encode(array("code"=>0,"msg"=>"Failed.")));
		}
		// timeChaneRequest:527 
		// 	Array
		// 	(
		// 	    [empl_id] => 8
		// 	    [date_In] => 01/24/2020 10:30 PM
		// 	    [date_Out] => 01/24/2020 10:30 PM
		// 	    [clock_In] => 9:48 AM
		// 	    [clock_Out] => 6:43 PM
		// 	)
	}
	public function markAttendanceParticullary(){
		// print_r($_POST);
		$employeeID=$this->input->post('empl_id');
		
	}
	// public function addAttendanceData($data){
	// 	return $this->ATND->insATNDData($data);
	// }
	
	
}
?>