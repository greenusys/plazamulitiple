<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
    public $my_id;
    public $my_ip;
    public $my_role_id;
    public $my_designation_id;
    public $timeZone;
    public $checkin_status=0; // 1: Attendance Marked, 0: Not Marked
    function __construct(){
        parent::__construct();
        $this->load->model('global_model');
        $this->load->model('LoginModel','Login');
        $this->load->model('AttendanceModel','ATND');
        // $auto_loaded_vars = array(
        //     'unread_notifications' => count($this->db->where(array('to_user_id' => $this->session->userdata('user_id'), 'read' => 0))->get('tbl_notifications')->result()),
        //     'd_currency' => $this->db->where('code', config_item('default_currency'))->get('tbl_currencies')->row()->symbol,
        // );
        if(!$this->session->userdata('logged_user')){
            $this->session->set_flashdata('msg','Invalid Username Or Password');
            redirect('Login');
        }
        $this->getTimeZone();   
        date_default_timezone_set($this->timeZone);
        $session=$this->session->userdata('logged_user');
        $my_Id=$session[0]->user_id;
        $auto_loaded_vars = array(
            'unread_notifications' => count($this->db->where(array('to_user_id' => $my_Id, 'read' => 0))->get('tbl_notifications')->result())
        );
        $this->load->vars($auto_loaded_vars);
        $session=$this->session->userdata('logged_user');
        $this->my_id=$session[0]->user_id;
        $this->setRoleId($session);
        $this->checkForMarkedAttendance();
    
    }
    public function setRoleId($data){
        $this->my_role_id=$data[0]->role_id;
    }
    public function checkFunction(){
        echo 'working Fine';
    }
    public function setIpAddress(){
        $this->my_ip=$this->input->ip_address();
    }
    public function getTimeZone(){
        $res=$this->db->get('installer')->result_array();
        $this->timeZone=$res[0]['timezone'];
        // print_r($res);
    }
    public function checkForMarkedAttendance(){
        $condition=array("user_id"=>$this->my_id,"date_in"=>date('Y-m-d'));
        $da=$this->ATND->getAttendanceId($condition);
        // print_r($da);
        if(count($da)>0){
            if($da[0]->date_out!=""){
                $attendance_id=$da[0]->attendance_id;
                $clk_resp=$this->checkForClockInStatus($attendance_id);
                // print_r($clk_resp);
                // if(count($clk_resp)>0){
                //     if($clk_resp[0]->clockout_time==""){
                //         $this->checkin_status=1;  
                //     }
                // }
                
                // echo ' Value of Check In Status: '.$this->checkin_status;
            }else{
                // echo 'Error Two.';
            }
        }else{
            // echo 'Error One.';
        }
    }
    public function checkForClockInStatus($st){
        return $this->ATND->getClock($st);
    }
    public function ipAddressAddPermission(){
        if($this->session->logged_user[0]->role_id!=3){
            return true;
        }else{
            return false;
        }

    }
    public function addIp($data){
        switch($this->global_model->addIP($data)){
            case 0:return 0; break;
            case 1:return 1; break;
            case 2: return 2; break;
            default: return 3; break;
        }
    }
    public function checkForAllowedIp(){
        return $this->global_model->getAllowedIP();
    }

}


?>