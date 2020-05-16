<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission extends MY_Controller 
{

	function __construct(){
		parent::__construct();
		$this->load->model('AttendanceModel','ATND');
		$this->load->model('Job_circular_model');
		$this->load->model('Tasks_Model');
		$this->load->model('User_model');
		$this->load->model('Performance_model');
		$this->load->model('AnnouncementModel');
	}
	public function index(){
		//$data['Employee']=$this->ATND->fetchEmployee();
		$company_id=$this->session->userdata('logged_user')[0]->company_id;
		$company_id=$company_id?$company_id:'""';
		$WHERE=array('company_id'=>$company_id);
		$this->db->where($WHERE);
		$data['Designation']=$this->db->get('tbl_departments')->result();
		
		$this->load->view('layout/header');
		$this->load->view("pages/set_perm",$data);
		$this->load->view("layout/footer");
	}

	public function add_permission(){
		$permission = $_POST['permission'];
		$designations_id=$_POST['desig_id'];
		$result=$this->AnnouncementModel->update_permissions($permission,$designations_id);
		if($result){
			echo "1";
		}
		else{
			echo "0";
		}
	}

}