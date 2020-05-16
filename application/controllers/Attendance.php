
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('AttendanceModel','ATND');
		$this->load->model('Global_Model');
		$this->load->model('User_model');
		

	}
	public function markPresent(){
		$res=$this->db->limit(1)->order_by('attendance_id','desc')->where("date_in='".date('Y-m-d')."' and user_id=".$this->my_id)->get('tbl_attendance')->row();
		// print_r($res);
		if($res->attendance_status==3){
			// echo 'Absent';
			if($this->db->where('attendance_id',$res->attendance_id)->update('tbl_attendance',array('attendance_status'=>1))){
				if($this->updateClockStatus($res->attendance_id)){
					die(json_encode(array("code"=>1,"msg"=>"Updated Successfully.")));	
				}else{
					die(json_encode(array("code"=>2,"msg"=>"Faled To Mark Attendance.")));
				}
	        	
	      	}else{
	        	die(json_encode(array("code"=>0,"msg"=>"Server Error.")));
	      	}
		}
	}
	public function updateClockStatus($attendance_id){
		$data_to_insert=array(
								"attendance_id"=>$attendance_id,
								"clockin_time"=>date('H:i:s'),
								"comments"=>"Late Commer",
								"clocking_status"=>1,
								"ip_address"=>$this->my_ip
							);
		if($this->db->insert('tbl_clock',$data_to_insert)){
			return true;
		}else{
			return false;
		}
	}
	public function updateCheckIn(){
        // $data['ip_address']=$this->db->get('tbl_allowed_ip')->result();
        $data['myAttendanceData']=$this->db->limit(1)->order_by('attendance_id','desc')->where("date_in='".date('Y-m-d')."' and user_id=".$this->my_id)->get('tbl_attendance')->row();
        $data['myCheckInData']=$this->db->where("tbl_attendance.user_id=".$this->my_id." and tbl_attendance.date_in = '".date('Y-m-d')."'")->join('tbl_attendance','tbl_attendance.attendance_id= tbl_clock.attendance_id')->get('tbl_clock')->result();
        $this->load->view('layout/header');
        $this->load->view('pages/updateCheckIn',$data);
        $this->load->view('layout/footer');
	}
	public function updateCheckInData(){
		if($this->db->where('clock_id',$this->input->post('clock_Id'))
					->update('tbl_clock',array('clockin_time'=>$this->input->post('clock_in')))){
        	die(json_encode(array("code"=>1,"msg"=>"Updated Successfully.")));
      	}else{
        	die(json_encode(array("code"=>0,"msg"=>"Server Error.")));
      	}
	}
	public function delete_clock_Status(){
	    if($this->db->where('clock_id',$this->input->post('id'))->delete('tbl_clock')){
	        die(json_encode(array("code"=>1,"msg"=>"Successfully Removed.")));
	    }else{
	      die(json_encode(array("code"=>0,"msg"=>"Server Error.")));
	    }
	   }
	public function markMyAttendance(){
		// print_r($_POST);

		// echo $_SESSION['clocked']=0;
		// die;
		$session=$this->session->userdata('logged_user');
		$my_Id=$session[0]->user_id;
		
		// $my_time=$this->input->post('d_time');
		$my_time=date('H:i:s');
		$type=$this->input->post('type');
		$ip=$this->input->ip_address();
		$date_=date('Y-m-d');
		
		// `tbl_clock`(``, ``, `clockin_time`, `clockout_time`, `comments`, `clocking_status`, `ip_address`)
		//type= 1 for clockin and type 2 for clock out
		//first time
		if($type==1){
			$data=array(
				"clockin_time"=>$my_time,
				"ip_address"=>$ip,
				"clocking_status"=>1,
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
				"clocking_status"=>0,
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
					if($this->db->update('tbl_clock',array("clockout_time"=>$clock_out,"clocking_status"=>0))){
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
			die(json_encode(array("code"=>0,"msg"=>"Failed to Mark Attendance.")));
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
		// print_r($data['Employee']);
		
		$this->load->view('layout/header');
		$this->load->view("pages/time_history",$data);
		$this->load->view("layout/footer");
	}
	public function getTimeHistory(){
		$userId=$this->input->post('emp_id');
		$data['active'] = date('Y');
		$data['EmpDetails']=$this->db->where('tbl_users.user_id',$userId)->join('tbl_account_details','tbl_account_details.user_id=tbl_users.user_id')->get('tbl_users')->row();
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
		$session=$this->session->userdata('logged_user');
		$designation_id=$session[0]->designations_id;
		$user_id=$session[0]->user_id;
		$data['Assign_permission']=$this->ATND->CheckPermission($designation_id);
		$data['UsersPermission']=$this->User_model->CheckUserPermission($user_id);
		$data['Employee']=$this->ATND->fetchEmployee();
		$data['EmpAttendanceDetail']=$this->ATND->fetchEmployeeATNDDetails();
		$this->load->view('layout/header');
		$this->load->view("pages/timechange_request",$data);
		$this->load->view("layout/footer");
	}
	public function attendanceReport()
	{
		$data['Employee']=$this->ATND->fetchEmployee();
		$data['all_department'] = $this->db->get('tbl_departments')->result();
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
    }
	 public function get_report()
	    {
	        $departments_id = $this->input->post('departments_id', TRUE);
	        $date = $this->input->post('date', TRUE);

	        $month = date('n', strtotime($date));
	        $year = date('Y', strtotime($date));
	        $num = cal_days_in_month(CAL_GREGORIAN, $month, $year);
	        $data['employee_info'] = $this->ATND->get_employee_id_by_dept_id($departments_id);

	        $holidays = $this->Global_Model->get_holidays(); //tbl working Days Holiday

	        if ($month >= 1 && $month <= 9) {
	            $yymm = $year . '-' . '0' . $month;
	        } else {
	            $yymm = $year . '-' . $month;
	        }

	        $public_holiday = $this->Global_Model->get_public_holidays($yymm);

	        //tbl a_calendar Days Holiday
	        if (!empty($public_holiday)) {
	            foreach ($public_holiday as $p_holiday) {
	                $p_hday = $this->ATND->GetDays($p_holiday->start_date, $p_holiday->end_date);
	            }
	        }

	        foreach ($data['employee_info'] as $sl => $v_employee) {
	            $key = 1;
	            $x = 0;
	            for ($i = 1; $i <= $num; $i++) {

	                if ($i >= 1 && $i <= 9) {
	                    $sdate = $yymm . '-' . '0' . $i;
	                } else {
	                    $sdate = $yymm . '-' . $i;
	                }
	                $day_name = date('l', strtotime("+$x days", strtotime($year . '-' . $month . '-' . $key)));

	                $data['week_info'][date('W', strtotime($sdate))][$sdate] = $sdate;

	                // get leave info
	                if (!empty($holidays)) {
	                    foreach ($holidays as $v_holiday) {
	                        if ($v_holiday->day == $day_name) {
	                            $flag = 'H';
	                        }
	                    }
	                }
	                if (!empty($p_hday)) {
	                    foreach ($p_hday as $v_hday) {
	                        if ($v_hday == $sdate) {
	                            $flag = 'H';
	                        }
	                    }
	                }
	                if (!empty($flag)) {
	                    $data['attendace_info'][date('W', strtotime($sdate))][$sdate][$v_employee->user_id] = $this->ATND->attendance_report_by_empid($v_employee->user_id, $sdate, $flag);
	                } else {
	                    $data['attendace_info'][date('W', strtotime($sdate))][$sdate][$v_employee->user_id] = $this->ATND->attendance_report_by_empid($v_employee->user_id, $sdate);
	                }
	                $key++;
	                $flag = '';
	            }
	        }
	        $data['title'] = lang('attendance_report');
            $this->db->order_by("departments_id", "desc"); 
	        $data['all_department'] = $this->db->get('tbl_departments')->result();
	        // $data['all_department'] = $this->ATND->get();
	        $data['departments_id'] = $this->input->post('departments_id', TRUE);
	        $data['date'] = $this->input->post('date', TRUE);
	        $where = array('departments_id' => $departments_id);
        	$this->db->where($where);
	        $data['dept_name'] = $this->db->get('tbl_departments')->result();

	        $data['month'] = date('F-Y', strtotime($yymm));

	       	$this->load->view('layout/header');
			$this->load->view("pages/attendance_report",$data);
			$this->load->view("layout/footer");
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
				$date = strftime("%m.%d.%Y", strtotime($v_info->date_in)) . ' : ' . strftime("%m.%d.%Y", strtotime($v_info->date_out));
                $details_=$this->get_result($v_info->attendance_id);
                $clock_info[date('Y', strtotime($v_info->date_in))][date('W', strtotime($v_info->date_in))][$date] = $details_;
            }
            return $clock_info;
        }
    }
    public function get_Result($id){
    	return $this->ATND->getAttendanceDetails($id);
    }
	public function markAttendanceManually(){
		// print_r($_POST);
		// die;
		$ip=$this->input->ip_address();
		// $session=$this->session->userdata('logged_user');
		// $user_id=$session[0]->user_id;
		$employeeID=$this->input->post('empl_id');
		$user_id=$employeeID;
		$dayInArr=explode(' ',$this->input->post('date_In'));
		$dayOutArr=explode(' ',$this->input->post('date_Out'));
		$dayIn=date('Y-m-d',strtotime($dayInArr[0]));
		$dayOut=date('Y-m-d',strtotime($dayOutArr[0]));
		$clockIn=date('H:i:s',strtotime($this->input->post('clock_In')));
		$clockOut=date('H:i:s',strtotime($this->input->post('clock_Out')));
		if(count($dat=$this->checkForExistenceIntblAtten($user_id))>0){
			$date_in=$dat[0]->date_in;
			$date_out=$dat[0]->date_out;
			$attendance_id=$dat[0]->attendance_id;
			if($date_out!=""){
				//Insert Table Clock
				$clk_resp=$this->checkForExistenceIntblClock($attendance_id);
				// print_r($clk_resp);
				if($clk_resp[0]->clockout_time==""){
					
					// print('Update Clock Table');
					$clock_id=$clk_resp[0]->clock_id;
					$toUpdate=array(
						"clockout_time"=>$clockOut,
						"clocking_status"=>0,
					);
					$updateClockStatus=$this->ATND->updateClockDetails($toUpdate,$clock_id);
					if($updateClockStatus!=false){
						die(json_encode(array("code"=>1,"msg"=>"Success.")));
					}else{
						die(json_encode(array("code"=>0,"msg"=>"Failed.")));
					}
				}else{
					// print('Insert Into Clock Table');
					$forClockIn=array(
						"attendance_id"=>$attendance_id,
						"clockin_time"=>$clockIn,
						"clockout_time"=>$clockOut,
						"clocking_status"=>0,
						"ip_address"=>$ip
					);
					$insertClockStatus=$this->ATND->insClockData($forClockIn);
					if($insertClockStatus!=false){
						die(json_encode(array("code"=>1,"msg"=>"Success.")));
					}else{
						die(json_encode(array("code"=>0,"msg"=>"Failed.")));
					}
				}
			}else{
				// print('Update Attendance Table -Date Out');
				if(($res=$this->ATND->updateAttendData($attendance_id,date('Y-m-d')))){
					// print_r($res[0]->clock_id);
					if($res[0]->clockin_time!="" && $res[0]->clockout_time=="" ){
						// print('Update Clock Table');
						$clock_id=$res[0]->clock_id;
						$toUpdate=array(
							"clockout_time"=>$clockOut,
							"clocking_status"=>0,
						);
						$updateClockStatus=$this->ATND->updateClockDetails($toUpdate,$clock_id);
						if($updateClockStatus!=false){
							die(json_encode(array("code"=>1,"msg"=>"Success.")));
						}else{
							die(json_encode(array("code"=>0,"msg"=>"Failed.")));
						}
					}else{
						// print('Insert Into Clock Table');
						$forClockIn=array(
							"attendance_id"=>$res[0]->attendance_id,
							"clockin_time"=>$clockIn,
							"clockout_time"=>$clockOut,
							"clocking_status"=>0,
							"ip_address"=>$ip
						);
						$insertClockStatus=$this->ATND->insClockData($forClockIn);
						if($insertClockStatus!=false){
							die(json_encode(array("code"=>1,"msg"=>"Success.")));
						}else{
							die(json_encode(array("code"=>0,"msg"=>"Failed.")));
						}
					}
				}else{
					die(json_encode(array("code"=>0,"msg"=>"Server Error.")));
				}
			}
		}else{
			// print('Insert in Both Table');
			$inAttData=array(
							"company_id"=>$this->session->userdata('logged_user')[0]->company_id,
							"user_id"=>$user_id,
							"date_in"=>$dayIn,
							"date_out"=>$dayOut,
							"attendance_status"=>1,
							"clocking_status"=>1
						);
			if($d=$this->ATND->insATNDData($inAttData)){
				$forClockIn=array(
							"attendance_id"=>$d[0]->attendance_id,
							"clockin_time"=>$clockIn,
							"clockout_time"=>$clockOut,
							"clocking_status"=>0,
							"ip_address"=>$ip
						);
				$insertClockStatus=$this->ATND->insClockData($forClockIn);
				if($insertClockStatus!=false){
					die(json_encode(array("code"=>1,"msg"=>"Success.")));
				}else{
					die(json_encode(array("code"=>0,"msg"=>"Failed.")));
				}

			}else{
				die(json_encode(array("code"=>0,"msg"=>"Server Error.")));
			}
		}
	}
	public function markAttendanceParticullary(){
		// print_r($_POST);
		$employeeID=$this->input->post('empl_id');
		
	}
	public function checkForExistenceIntblAtten($user_id){
		$condition=array("user_id"=>$user_id,"date_in"=>date('Y-m-d'));
		return $this->db->where($condition)->get('tbl_attendance')->result();
	}

	// public function addAttendanceData($data){
	// 	return $this->ATND->insATNDData($data);
	// }
	public function delete_clock(){
		$id=$_POST['clock_id'];
		$result=$this->ATND->delete_clock($id);
		if($result == TRUE){
			die(json_encode(array('status' =>'1' ,'msg'=>'Successfully Deleted')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Failed')));
		}
	}
	
}
?>