<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public $timzone;
	function __construct(){
		parent::__construct();
		$this->load->model('LoginModel','Login');
		$this->load->model('AttendanceModel','ATND');
		$this->getTimeZone();   
        date_default_timezone_set($this->timzone);
	}
	public function getTimeZone(){
        $res=$this->db->get('installer')->result_array();
        $this->timzone=$res[0]['timezone'];
        // print_r($res);
    }
	public function index()
	{
		// if($this->session->userdata('logged_user')){
		// 	redirect('Dashboard');
		// }else{
			$this->load->view('pages/auth-login');
		// }
		
	}
	public function validateLogin(){
		// print_r($_POST);
		$data=array("user_name_"=>$this->input->post('user_name'),"password_"=>$this->input->post('pass_code'));
		if($res=$this->Login->verifyThisUser($data)){
			$this->session->set_userdata('logged_user',$res);
			//update login status
			
			if($this->updateLoginStatus(1)){
					// echo 'Perfect';
				redirect('Dashboard');
			}
			// redirect('Dashboard');
		}else{
			$this->session->set_flashdata('msg','Invalid Username Or Password');
			redirect('Login');
		}
	}
	public function logout(){
		$session=$this->session->userdata('logged_user');
		$my_Id=$session[0]->user_id;
		$condition=array("user_id"=>$my_Id,"date_in"=>date('Y-m-d'));
       
		$da=$this->ATND->getAttendanceId($condition);
		if(count($da)>0){
			$attendanceId=$da[0]->attendance_id;
			if($da[0]->date_out==""){
				echo ' || It is Empty';
				$myAttendanceDetail=$this->updateAttendance($attendanceId);
				if($myAttendanceDetail){
					echo ' || Attendance Updated...';
						if($this->updateTbl_clock($attendanceId)){
							echo ' || Now You Can Log Out';
// 
							if($this->updateLoginStatus(0)){
								// redirect(base_url());
							}else{
								 // redirect(base_url());
							}
						}else{
							echo ' || Some Thing Is Wrong. You Can Not Log out.';
							// redirect(base_url());
						}
					// print_r($myAttendanceDetail);
				}else{
					echo ' || Attnedance Not Found.';
					// redirect(base_url());
				}
				// 
			}else{
				echo ' || Not Empty';
				if($this->updateTbl_clock($attendanceId)){
					echo ' || Now You Can Log Out';

					if($this->updateLoginStatus(0)){
						// redirect(base_url());
					}else{
						// redirect(base_url());
					}
				}else{
					echo ' || Some Thing Is Wrong. You Can Not Log out.';
					// redirect(base_url());
				}
			}	
		}else{
			// echo 'Attendance Not Set';
			if($this->markAttendanceZero($condition)){
				//Perfect
			}else{
				//Failure
			}
			// redirect(base_url());
		}
		
		 redirect(base_url());
		// $sess_array = array();
		
		// $this->session->sess_destroy();
		// redirect('Login');
	}
	public function updateAttendance($attendanceId){
		$this->db->where('attendance_id', $attendanceId);
		if($this->db->update('tbl_attendance',array('date_out'=>date('Y-m-d')))){
			return true;
		}else{
			return false;
		}
		// return $this->db->get('tbl_attendance')->result();
	}
	public function updateLoginStatus($var){


		// echo 'Value of Var : '.$var;
		// die;
		$session=$this->session->userdata('logged_user');
		// print_r($session);
		// die;
		$my_Id=$session[0]->user_id;
		$condition=array('user_id'=>$my_Id);
		if($var==1){
			// echo 'log in';
			 // redirect('Dashboard');
			// 2020-02-05 22:37:01
			$dTime=date('Y-m-d H:i:s');
			$data=array('online_time'=>1,"last_ip"=>$this->input->ip_address(),"last_login"=>$dTime);
			$this->db->where($condition);
			if($this->db->update('tbl_users',$data)){
				return true;
			}else{
				return false;
			}
		}else{
			// echo 'log out';
			$data=array('online_time'=>0);
			$this->db->where($condition);
			if($this->db->update('tbl_users',$data)){
				$this->session->unset_userdata('clocked');
				
				$this->session->sess_destroy();
				$this->session->set_flashdata('msg','Successfully Logout');
			}
			// return true;
			
		}
		
		// $this->db->where($condition);
		// if($this->db->update('users',$data)){
		// 	$this->session->unset_userdata('clocked');
			
		// 	$this->session->sess_destroy();
		// 	$this->session->set_flashdata('msg','Successfully Logout');
		// 	return true;
			
		// }else{
		// 	return false;
		// }
	}
	public function updateTbl_clock($attendanceId){
		$this->db->where('attendance_id', $attendanceId);
		$this->db->limit(1);
		$clockDetails=$this->db->get('tbl_clock')->result();
		if(count($clockDetails)>0){
			$clock_id=$clockDetails[0]->clock_id;
			if($clockDetails[0]->clockin_time!=""){
				if($clockDetails[0]->clockout_time==""){
					$clock_Ot_Time=date('h:i:s');
					$this->db->where('clock_id',$clock_id);
					if($this->db->update('tbl_clock',array('clockout_time'=>$clock_Ot_Time))){
						// echo 'Clock Table Is Updated';
						return true;
					}else{
						// echo 'Failed To Update Clock Table';
						return false;
					}
				}else{
					// echo 'Upto Date';
					return true;
				}
			}else{
				$clock_in_Time=date('h:i:s');
				$clock_Ot_Time=date('h:i:s');
				$this->db->where('clock_id',$clock_id);
				if($this->db->update('tbl_clock',array('clockout_time'=>$clock_Ot_Time,"clockin_time"=>$clock_in_Time))){
					// echo 'Yha to Kbhi ayega hi nhi';
					return true;
				}else{
					// echo 'or yha bhi';
					// return false;
					return true;
				}
			}
		}else{
			// echo '====ERrerer';
			return false;
		}
	}
	public function markAttendanceZero($array){
		$data_for_attendance=array('user_id'=>$array['user_id'],'date_out'=>date('Y-m-d'),'date_in'=>date('Y-m-d'),'attendance_status'=>1);
		$this->db->where($data_for_attendance);
		if($this->db->insert('tbl_attendance',$data_for_attendance)){
			$this->db->where('user_id',$array['user_id']);
			$this->db->order_by('attendance_id','desc');
			$attendanceDetails=$this->db->get('tbl_attendance')->result();
			if($this->markAttendanceTblClockZero($attendanceDetails[0]->attendance_id)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	public function markAttendanceTblClockZero($attendanceId){
		$dat=array(
			'clockout_time'=>date('h:i:s'),
			"clockin_time"=>date('h:i:s'), 
			"attendance_id"=>$attendanceId,
			"clocking_status"=>1,
			"ip_address"=>$this->input->ip_address());
		if($this->db->insert('tbl_clock',$dat)){
			return true;
		}else{
			return false;
		}
	}
}
