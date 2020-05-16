<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backupdatabase extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_Model');
		$this->load->model('User_model');
	}

	public function index()
	{
		$session=$this->session->userdata('logged_user');
		$designation_id=$session[0]->designations_id;
		$user_id=$session[0]->user_id;
		$data['backup']=$this->Global_Model->fetch_backup();
		$data['Assign_permission']=$this->User_model->CheckPermission($designation_id);
		$data['UsersPermission']=$this->User_model->CheckUserPermission($user_id);
		$this->load->view('layout/header');
		$this->load->view("pages/database_backup",$data);
		$this->load->view("layout/footer");
	}

	public function delete_db(){
		$db=$_POST['back_id'];
		$path=$_POST['path'];
		$main_path="uploads/backup/".$path;
		if(unlink($main_path)){
			$result=$this->Global_Model->delete_db($db);
			if ($result) {
				echo "1";
			}
			else{
				echo "0";
			}
		}
		else{
			echo "0";
		}
	}

	public function backup(){
		$this->load->dbutil();

		$prefs = array(     
		    'format'      => 'zip',             
		    'filename'    => 'my_db_backup.sql'
		    );


		$backup =& $this->dbutil->backup($prefs); 

		$db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
		$save = 'uploads/backup/'.$db_name;

		$this->load->helper('file');
		write_file($save, $backup); 

		$result=$this->Global_Model->add_backup($db_name);
		if ($result) {
			redirect('Backupdatabase');
		}
		else{
			echo "0";
		}
	}

	public function backup_download(){
		$this->load->helper('download');
		$name=$this->uri->segment(3);
		$pth    =   file_get_contents(base_url()."uploads/backup/".$name);
		$nme    =   $name;
		force_download($nme, $pth);     
	}
	// public function backupDatabase()
	// {
	// 	$this->load->view('layout/header');
	// 	$this->load->view("pages/backup_database");
	// 	$this->load->view("layout/footer");
	// }
}
?>