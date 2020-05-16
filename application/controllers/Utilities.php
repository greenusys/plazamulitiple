<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilities extends MY_Controller { 

	function __construct(){
		parent::__construct();
		$this->load->model('Global_Model');
        $this->load->model('User_model');
	}
   
	public function holiday(){
        $data['title'] = lang('holiday');

        $this->global_model->_table_name = "tbl_holiday"; //table name
        $this->global_model->_order_by = "holiday_id";
        // get holiday list by id
        if (!empty($id)) {
            $data['holiday_list'] = $this->global_model->get_by(array('holiday_id' => $id,), TRUE);
            if (empty($data['holiday_list'])) {
                $type = "error";
                $message = lang('no_record_found');
                set_message($type, $message);
                redirect('admin/settings/holiday_list');
            }
        }// click add holiday theb show
        if (!empty($flag)) {
            $data['active_add_holiday'] = $flag;
        }
        // active check with current month
        $data['current_month'] = date('m');
        if ($this->input->post('year', TRUE)) { // if input year
            $data['year'] = $this->input->post('year', TRUE);
        } else { // else current year
            $data['year'] = date('Y'); // get current year
        }
        // get all holiday list by year and month
        $data['all_holiday_list'] = $this->get_holiday_list($data['year']);  // get current year
        // retrive all data from db
        // die(json_encode($data));
        // $data['subview'] = $this->load->view('admin/holiday/holiday_list', $data, TRUE);
        // $this->load->view('admin/_layout_main', $data);
        $session=$this->session->userdata('logged_user');
        $designation_id=$session[0]->designations_id;
        $data['Assign_permission']=$this->User_model->CheckPermission($designation_id);
        $user_id=$session[0]->user_id;
        $data['UsersPermission']=$this->User_model->CheckUserPermission($user_id);
		$this->load->view('layout/header');
		$this->load->view("pages/holiday",$data);
		$this->load->view("layout/footer");
	}

    public function get_holiday_list($year)
    {// this function is to create get monthy recap report
        for ($i = 1; $i <= 12; $i++) { // query for months
            if ($i >= 1 && $i <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
                $start_date = $year . "-" . '0' . $i . '-' . '01';
                $end_date = $year . "-" . '0' . $i . '-' . '31';
            } else {
                $start_date = $year . "-" . $i . '-' . '01';
                $end_date = $year . "-" . $i . '-' . '31';
            }
            $get_holiday_list[$i] = $this->Global_Model->get_holiday_list_by_date($start_date, $end_date); // get all report by start date and in date
        }
        return $get_holiday_list; // return the result
    }

	public function gaolTracking(){
		$this->load->view('layout/header');
		$this->load->view("pages/goal_tracking");
		$this->load->view("layout/footer");
	}

	public function add_holiday(){
		$insert=$this->Global_Model->add_holiday($_POST);
		if ($insert) {
			echo "1";
		}
		else{
			echo '0';
		}
	}
    public function DeleteHoliday()
    {

        $data=array('holiday_id'=>$this->input->post('holiday_id'));
        $results=$this->Global_Model->DeleteHolidayData($data);
        die(json_encode($results));

    }
    public function Edit_Holiday($id)
    {
        $data['fetch_Holiday']=$this->Global_Model->FetchHolidayData($id);
        // print_r( $data['fetch_Holiday']);
        // die;
        $this->load->view('layout/header');
        $this->load->view("pages/edit_holiday",$data);
        $this->load->view("layout/footer");
    }
    public function updateHolidaybyid()
    {
        $holiday_id=$this->input->post('holiday_id');
        $eventname=$this->input->post('eventname');
        $description=$this->input->post('description'); 
        $strdate=$this->input->post('strdate'); 
        $enddate=$this->input->post('enddate'); 

        $data = array(
            'event_name'=>$eventname,
            'description'=>$description,
            'start_date'=>$strdate,
            'end_date'=>$enddate);
   
        $result=$this->Global_Model->UpdateHolidaysData($data,$holiday_id);
        if($result==1){
            die(json_encode(array('status' =>'1' ,'msg'=>'Update Successfully')));
        }
        elseif($result==0){
            die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
        }
        else{
            die(json_encode(array('status' =>'2' ,'msg'=>'Try Again')));
        }
    }
}
?>