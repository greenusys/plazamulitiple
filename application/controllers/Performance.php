<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Performance extends MY_Controller 
{

	function __construct(){
		parent::__construct();
		$this->load->model('AttendanceModel','ATND');
		$this->load->model('Job_circular_model');
		$this->load->model('Performance_model');
	}
	public function index()
	{
		echo 'Working';
	}
	public function performanceReport()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/performance_report");
		$this->load->view("layout/footer");
	}
	public function giveAppraisal($id = NULL)
	{
        // get all_employee
        $data['all_employee'] = $this->Performance_model->get_all_employee();

        //get designation id from input
        $data['user_id'] = $this->input->post('user_id',true);
        $data['appraisal_month'] = $this->input->post('appraisal_month');

        if ($data['user_id']) {
            $data['indicator_flag'] = 1;
            $user_info = $this->db->where('user_id', $data['user_id'])->get('tbl_account_details')->row();
            //get all indicator values
            $data['performance_indicator_details'] = $this->db->where('designations_id', $user_info->designations_id)->get('tbl_performance_indicator')->row();

            $where = array('user_id' => $data['user_id'], 'appraisal_month' => $data['appraisal_month']);
            $this->db->where($where);
	        $data['get_appraisal_info'] = $this->db->get('tbl_performance_apprisal')->result();
           
            //to give user notification that already once appraisal is given.
            if (!empty($data['get_appraisal_info'])) 
            {
                $data['appraisal_once_given'] = 1;
            }
        }

        if ($id) {
            //get all indicator values for user          
            $data['get_appraisal_info'] = $this->Performance_model->get_appraisal_value_by_id($id);

            // to block unwanted id pass
            if (!empty($data['get_appraisal_info']->designations_id)) {
                $data['indicator_flag'] = 1;
                //get all indicator values
                $data['performance_indicator_details'] = $this->db->where('designations_id', $data['get_appraisal_info']->designations_id)->get('tbl_performance_indicator')->row();
            }
        }
		$this->load->view('layout/header');
		$this->load->view("pages/giveappraisal",$data);
		$this->load->view("layout/footer");
	}
    public function save_performance_appraisal($id = NULL)
    {	
        $appraisal_data = $this->Performance_model->array_from_post(array(
            'user_id',
            'appraisal_month',
            'customer_experiece_management',
            'marketing',
            'management',
            'administration',
            'presentation_skill',
            'quality_of_work',
            'efficiency',
            'integrity',
            'professionalism',
            'team_work',
            'critical_thinking',
            'conflict_management',
            'attendance',
            'ability_to_meed_deadline',
            'general_remarks',
        ));

        if ($id) {
            $activity = 'activity_appraisal_update';
            $msg = 'appraisal_update';
        } else {

            $activity = 'activity_appraisal_saved';
            $msg = 'appraisal_saved';
        }

        //Save Appraisal Data
        $this->Performance_model->_table_name = "tbl_performance_apprisal"; // table name
        $this->Performance_model->_primary_key = "performance_appraisal_id"; // $id
        $this->Performance_model->save($appraisal_data, $id);

        $employee = $this->db->where('user_id', $appraisal_data['user_id'])->get('tbl_account_details')->row();
        $session=$this->session->userdata('logged_user');
		$user_id=$session[0]->user_id;
        $activity = array(
            'user' => $user_id,
            'module' => 'performance',
            'module_field_id' => $id,
            'activity' => $activity,
            'value1' => $employee->fullname,
            'value2' => 'for'. date('M Y', strtotime($appraisal_data['appraisal_month']))
        );

        $this->Performance_model->_table_name = 'tbl_activities';
        $this->Performance_model->_primary_key = 'activities_id';
        $this->Performance_model->save($activity);
        // messages for user
        // $type = "success";
        // $message = $msg;
        // set_message($type, $message);
	    
	    redirect('Performance/giveAppraisal');
    }
	public function indicator()
	{
		$data['all_dept_info'] = $this->db->get('tbl_departments')->result();
	 	foreach ($data['all_dept_info'] as $v_dept_info) {
            $data['all_department_info'][] = $this->Job_circular_model->get_add_department_by_id($v_dept_info->departments_id);
        }
        $data['fetch_indicator']=$this->Performance_model->fetch_indicator($data);
		$this->load->view('layout/header');
		$this->load->view("pages/indicator",$data);
		$this->load->view("layout/footer");
	}
	public function create_indicator()
	{
		//print_r($_POST);
		$designations_id=$this->input->post('designations_id');
		$customer_experiece_management=$this->input->post('customer_experiece_management');
		$marketing=$this->input->post('marketing');
		$management=$this->input->post('management');
		$administration=$this->input->post('administration');
		$presentation_skill=$this->input->post('presentation_skill');
		$quality_of_work=$this->input->post('quality_of_work');
		$efficiency=$this->input->post('efficiency');
		$integrity=$this->input->post('integrity');
		$professionalism=$this->input->post('professionalism');
		$team_work=$this->input->post('team_work');
		$critical_thinking=$this->input->post('critical_thinking');
		$conflict_management=$this->input->post('conflict_management');
		$attendance=$this->input->post('attendance');
		$ability_to_meed_deadline=$this->input->post('ability_to_meed_deadline');
 		$data = array(
			"designations_id"=>$designations_id,
 			"customer_experiece_management"=>$customer_experiece_management,
 			"marketing"=>$marketing,
 			"management"=>$management,
 			"administration"=>$administration,
 			"presentation_skill"=>$presentation_skill,
 			"quality_of_work"=>$quality_of_work,
 			"efficiency"=>$efficiency,
 			"integrity"=>$integrity,
 			"professionalism"=>$professionalism,
 			"team_work"=>$team_work,
 			"critical_thinking"=>$critical_thinking,
 			"conflict_management"=>$conflict_management,
 			"attendance"=>$attendance,
 			"ability_to_meed_deadline"=>$ability_to_meed_deadline	
        );
		 // print_r($data);
		$result = $this->Performance_model->create_indicator($data);
		if($result == TRUE)
		{
		 	die(json_encode(array('status' =>'1','msg'=>'Indicator inserted Successfully')));
		}
		else
		{
		 	die(json_encode(array('status' =>'0','msg'=>'Indicator With Same Name Already Exists')));
		}
	}
		public function paySlip()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/payslip");
		$this->load->view("layout/footer");
	}
}
?>