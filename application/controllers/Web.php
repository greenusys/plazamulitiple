<?php
	/**
	 * 
	 */
	class Web extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

		}
		public function index(){
			$this->load->view('web/header');
			$this->load->view('web/index');
			$this->load->view('web/footer');
		}
		public function registerNewCompany(){
			$data_to_add=array(
									// "username"=>$username,
									"nam"=>$this->input->post('reg_by'),
									"company_name"=>$this->input->post('compnam'),
									"company_email"=>$this->input->post('eml'),
									// "pswd"=>$this->input->post(''),
									
								);
			$this->addNewCompany($data_to_add);
		}
		public function addNewCompany($data){
			$this->db->where('company_email')->get('tbl_companies')->result();
		}
	}
	
?>