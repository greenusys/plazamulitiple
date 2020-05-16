<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruitment extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Job_circular_model');
		$this->load->model('User_model');
	}
	public function index()
	{
		echo 'Working';
	}
	public function jobsPosted()
	{
		$data['users']=$this->User_model->fetch_user();
		$data['all_dept_info'] = $this->db->get('tbl_departments')->result();
	 	foreach ($data['all_dept_info'] as $v_dept_info) {
            $data['all_department_info'][] = $this->Job_circular_model->get_add_department_by_id($v_dept_info->departments_id);
        }
        $session=$this->session->userdata('logged_user');
		$designation_id=$session[0]->designations_id;
		$data['Assign_permission']=$this->Job_circular_model->CheckPermission($designation_id);
		$user_id=$session[0]->user_id;
		$data['UsersPermission']=$this->User_model->CheckUserPermission($user_id);
        $data['fetchjob']=$this->Job_circular_model->fetch_job($data);
		$this->load->view('layout/header');
		$this->load->view("pages/job_posted",$data);
		$this->load->view("layout/footer");
	}
	public function jobsApplications()
	{
		$session=$this->session->userdata('logged_user');
		$designation_id=$session[0]->designations_id;
		$data['Assign_permission']=$this->Job_circular_model->CheckPermission($designation_id);
		$user_id=$session[0]->user_id;
		$data['UsersPermission']=$this->User_model->CheckUserPermission($user_id);
		$this->load->view('layout/header');
		$this->load->view("pages/jobs_applications",$data);
		$this->load->view("layout/footer");
	}
	public function create_job()
	{
		// print_r($_POST);
		$job_title=$this->input->post('job_title');
		$designations_id=$this->input->post('designations_id');
		$employment_type=$this->input->post('employment_type');
		$experience=$this->input->post('experience');
		$age=$this->input->post('age');
		$salary_range=$this->input->post('salary_range');
		$vacancy_no=$this->input->post('vacancy_no');
		$last_date=$this->input->post('last_date');
		$posted_date=$this->input->post('posted_date');
		$job_description=$this->input->post('job_description');
		$status=$this->input->post('status');
		$Permission=$this->input->post('job_permissions');
 		$data = array(
			"job_title"=>$job_title,
			"designations_id"=>$designations_id, 
			"employment_type"=>$employment_type,
			"experience"=>$experience,
			"age"=>$age,
			"salary_range"=>$salary_range,
			"vacancy_no"=>$vacancy_no, 
			"last_date"=>$last_date,
			"posted_date"=>$posted_date,
			"description"=>$job_description,
			"status"=>$status,
			"permission"=>$Permission,
			"company_id"=>$this->session->userdata('logged_user')[0]->company_id
        );
		 // print_r($data);
		$result = $this->Job_circular_model->create_job($data);
		if($result == TRUE)
		{
		 	die(json_encode(array('status' =>'1','msg'=>'Job Posted Successfully')));
		}
		else
		{
		 	die(json_encode(array('status' =>'0','msg'=>'Job With Same Name Already Exists')));
		}
	}
	
}
?>