<?php
	/**
	 * 
	 */
	class Rahul extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('zip');
			$this->load->model('Rahul_Model','Demo');
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
		public function createBackUp(){
			$path = './application/';
			$this->zip->read_dir($path);
			$path = './assets/';
			$this->zip->read_dir($path);
			$path = './uploads/';
			$this->zip->read_dir($path);
			$path = './dB/';
			$this->zip->read_dir($path);
			// Download the file to your desktop. Name it "my_backup.zip"
			$this->zip->download('my_project_backup.zip');
		}
		public function getTime(){
			date_default_timezone_set('Asia/Kolkata');
    		echo $timestamp = date('H:i:s');
		}
		public function getUserChats(){
			$resultOne=$this->db->query("select * from ");
			$this->db->where('tbl_users.user_id',$this->input->post('user_id'));
			$this->db->join('tbl_account_details','tbl_account_details.user_id=tbl_users.user_id');
			die(json_encode($this->db->get('tbl_users')->result()));
		}
		
	}
?>