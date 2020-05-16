<?php
date_default_timezone_set('Asia/Kolkata');
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Tasks_Model');
		$this->load->model('Notification_model');
		$this->load->model('User_model');
		$this->load->model('Rahul_Model','Demo');
		$this->load->model('Global_Model');
		$this->load->model('Bugs_model');
		$this->load->model('Projects_Model');
	}

	public function index()
	{
		// echo date('H:i:s').' ***  '.date_default_timezone_get();
		$session=$this->session->userdata('logged_user');
		$user_id=$session[0]->user_id;
		$data['admin_employee']=$this->User_model->fetch_all_employees_admin();
		$data['to_do']=$this->Tasks_Model->fetch_todo($user_id);
		$data['in_progress_project']=$this->Demo->get_in_progress_project();
		$data['in_progress_task']=$this->Demo->get_in_progress_task();
		$data['over_due_project']=$this->Demo->get_over_due_project();
		$data['over_due_task']=$this->Demo->get_over_due_task();
		$data['fetch_holiday']=$this->Global_Model->fetch_holidays();
		$data['get_All_announcement']=$this->db->get('tbl_announcements')->result();
		$tasks=$this->Demo->get_over_due_task();
		$projects=$this->Demo->get_over_due_project();
		$data['in_progress_bug']=$this->Demo->get_in_progress_bug();
		$project_data=array();
		$task_data=array();
		if(count($projects)>0){
			foreach ($projects as $pr) {
				$perm=$pr['permission'];
				$user=array();
				if($perm=="all"){
					$user[]="Everyone";
				}
				else{
				$new=json_decode($perm);
				foreach($new as $key => $value){
					$user[]=$this->User_model->fetch_user_by_id($key);
				 }
				}
				$project_data[]=array_merge($pr,array("assigned_to"=>$user));

			}
		}
		if(count($tasks)>0){
			foreach ($tasks as $pr) {
				$perm=$pr['permission'];
				$user=array();
				if($perm=="all"){
					$user[]="Everyone";
				}
				else{
				$new=json_decode($perm);
				foreach($new as $key => $value){
					$user[]=$this->User_model->fetch_user_by_id($key);
				 }
				}
				$task_data[]=array_merge($pr,array("assigned_to"=>$user));
			}
		}
		
        $data['Overproject']=$project_data;
        $data['users']=$this->User_model->fetch_user();
		$data['Overtask']=$task_data;
		$this->load->view('layout/header');
		$this->load->view('pages/index',$data);
		$this->load->view('layout/footer');
	}
	public function getInProgressProject(){
		die(json_encode($this->Demo->get_in_progress_project()));
	}
	public function getOverDueProject(){
		die(json_encode($this->Demo->get_over_due_project()));
	}
	public function getInProgressTask(){
		die(json_encode($this->Demo->get_in_progress_task()));
	}
	public function getOverDueTask(){
		die(json_encode($this->Demo->get_over_due_task()));
	}
	public function fetchOnlineUser(){
		
		die(json_encode($this->Demo->get_online_user()));
	}
	public function projectInprogress(){
		$project_data=array();
		// $task_data=array();
		$session=$this->session->userdata('logged_user');
        $id=$session[0]->user_id;
        $designation_id=$session[0]->designations_id;
        $data['Assign_permission']=$this->Projects_Model->CheckPermission($designation_id);
		// $data['clients']=$this->Client_Model->getClients();
		// $data['users']=$this->User_model->fetch_user();
		// $data['settings']=$this->Projects_Model->fetch_settings();
		$projects=$this->Demo->get_in_progress_project();

		foreach ($projects as $pr) {
			$perm=$pr['permission'];
            $project_id=$pr['project_id'];
           // print_r($project_id.'<br>');

            $taskprogress['taskprogress']=$this->counttaskprogress($project_id);
           // print_r($taskprogress);
           // die;
           
			$user=array();
			if($perm=="all"){
				$user[]="Everyone";
			}
			else{
			$new=json_decode($perm);
			foreach($new as $key => $value){
				$user[]=$this->User_model->fetch_user_by_id($key);
			 }
			}
			$project_data[]=array_merge($pr,$user,$taskprogress);

		}
       // die;
		$data['project']=$project_data;
      //  $data['taskprogress']=$taskprogress;
		$this->load->view('layout/header');
		$this->load->view("pages/inProgressProject",$data);
		$this->load->view("layout/footer");
	}
	public function counttaskprogress($project_id=NULL)
    {

        $this->db->where(array('tbl_task.project_id' => $project_id,'tbl_task.task_status' => 'completed'));
        $this->db->join('tbl_project','tbl_task.project_id=tbl_project.project_id');
        $task= $this->db->get('tbl_task')->result_array();
        $count1=count($task);

        $this->db->where(array('tbl_task.project_id' => $project_id));
        $this->db->join('tbl_project','tbl_task.project_id=tbl_project.project_id');
        $total= $this->db->get('tbl_task')->result_array();
        $count=count($total);
        if($count!=0)
        {
            $pro=$count-$count1;
            $progress=($count1/$count)*100;
            $progress=number_format($progress,2);
        }   
        else
        {
            $progress=0;
        }
        return $progress;
        // $total=$task;
        // return $total;

    }
    public function inProgressTasks(){
    	$data['all_tasks']=$this->Demo->get_in_progress_task();
    	// print_r($data['all_tasks']);
    	// die;
		$data['users']=$this->User_model->fetch_user();
		$this->load->view('layout/header');
		$this->load->view("pages/inProgressTask",$data);
		$this->load->view("layout/footer");
    }
    public function InProgressBugss(){
    	// $this->db->join('tbl_project','tbl_project.project_id=tbl_bug.project_id');	
    	$data['all_bugs']=$this->Demo->get_in_progress_bug();
    	// print_r($data['all_bugs']);
    	// die;
		$data['users']=$this->User_model->fetch_user();
		$this->load->view('layout/header');
		$this->load->view("pages/inProgressBugs",$data);
		$this->load->view("layout/footer");
    }
    public function inProgressBugs($id=""){
    	 $data['assign_user'] = $this->Bugs_model->allowad_user('58');
        $data['all_bugs_info'] = $this->Bugs_model->get_permission('tbl_bug');
        if ($id) { // retrive data from db by id
            $data['active'] = 2;
            $can_edit = $this->Bugs_model->can_action('tbl_bug', 'edit', array('bug_id' => $id));
            $edited = can_action('58', 'edited');
            if ($id == 'project') {
                $data['project_id'] = $opt_id;
                $project_info = get_row('tbl_project', array('project_id' => $opt_id));
                if ($project_info->permission == 'all') {
                    $data['assign_user'] = $this->Bugs_model->allowad_user('57');
                } else {
                    $data['assign_user'] = $this->Bugs_model->permitted_allowad_user($project_info->permission);
                }
            } elseif ($id == 'opportunities') {
                $data['opportunities_id'] = $opt_id;
                $option_info = get_row('tbl_opportunities', array('opportunities_id' => $opt_id));
                if ($option_info->permission == 'all') {
                    $data['assign_user'] = $this->Bugs_model->allowad_user('56');
                } else {
                    $data['assign_user'] = $this->Bugs_model->permitted_allowad_user($option_info->permission);
                }
            } else {
                if (!empty($can_edit) && !empty($edited)) {
                    if (is_numeric($id)) {
                        // get all bug information
                        $data['bug_info'] = $this->db->where('bug_id', $id)->get('tbl_bug')->row();
                    }
                }
            }
            $data['all_opportunities_info'] = $this->Bugs_model->get_permission('tbl_opportunities');
        } else {
            $data['active'] = 1;
        }
        //$data['editor'] = $this->data;
        //$data['subview'] = $this->load->view('admin/bugs/bugs', $data, TRUE);
        //$this->load->view('admin/_layout_main', $data);

			$data['admin_staff']=$this->User_model->fetch_all_users();
			$data['users']=$this->User_model->fetch_user();
			// print_r($data['users']);
			$this->load->view('layout/header');
			$this->load->view('pages/bugs',$data);
			$this->load->view('layout/footer');
    }
    public function assign_to(){
    	$task_id=$_POST['project_id'];
		$permission=$_POST['permission'];
		$updater=$this->Tasks_Model->update_permission($task_id,$permission);
		if ($updater) {
			echo "1";
		}
		else{
			echo "0";
		}
    }
}
?>