<?php
	class Installation extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('AttendanceModel','ATND');
			$this->load->model('Global_model');
		}

		public function index(){
			$check_install=$this->Global_model->check_install();
			if(count($check_install)==0){
				$this->load->view('install');
			}else{
				redirect('login');
			}
			//
		}

		public function add_install(){
	        $config['upload_path'] = './uploads/logo/';
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['encrypt_name'] = TRUE;
	        $config['max_size'] = 2000;
	        $config['max_width'] = 1500;
	        $config['max_height'] = 1500;
	        $this->upload->initialize($config);
	        $this->load->library('upload', $config);

	        if (!$this->upload->do_upload('logo')) {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('item','Something Went Wrong');

	            //$this->load->view('files/upload_form', $error);
	        } else {
	            $data = array('image_metadata' => $this->upload->data());
	            $logo=$data['image_metadata']['file_name'];
				$_POST['logo']=$logo;
				$insert=$this->Global_model->add_install($_POST);
				if(!$insert){
					$this->session->set_flashdata('item','Something Went Wrong');
				}
	            //$this->load->view('files/upload_result', $data);
	        }
	        redirect('Installation');
		}
	}

?>