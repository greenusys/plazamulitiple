<?php

	class Sales extends MY_Controller
	{	
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Client_Model');
		$this->load->model('Sales_Model');
		
	}

	public function index()
	{
		
		$data['users']=$this->User_model->fetch_user();
		$data['clients']=$this->Client_Model->getClients();
		$data['fetch_invoices']=$this->Sales_Model->fetch_invoices();

		$session=$this->session->userdata('logged_user');
		$designation_id=$session[0]->designations_id;
		$user_id=$session[0]->user_id;
		$data['Assign_permission']=$this->Sales_Model->CheckPermission($designation_id);
		$data['UsersPermission']=$this->Sales_Model->CheckUserPermission($user_id);

		$this->load->view('layout/header');
		$this->load->view("pages/invoice",$data);
		$this->load->view("layout/footer");
	}	

	public function fetch_project(){
		$result=$this->Client_Model->fetch_projects_by_client_id($_POST['client_id']);
		if ($result) {
			die(json_encode(array('status'=>'1','data'=>$result)));
		}
		else{
			die(json_encode(array('status'=>'0')));
		}
	}

	public function main_invoice(){
		$invoices_id=$_POST['invoices_id'];
		$itemname=$_POST['item_name'];
		$itemdesc=$_POST['item_desc'];
		$quantity1=$_POST['quantity'];
		$unit1=$_POST['unit'];
		$unitcost=$_POST['unit_cost'];
		$totalcost=$_POST['total_cost'];
		for ($i=0; $i <count($itemname) ; $i++) { 
			$item_name=$itemname[$i];
			$item_desc=$itemdesc[$i];
			$quantity=$quantity1[$i];
			$unit=$unit1[$i];
			$unit_cost=$unitcost[$i];
			$total_cost=$totalcost[$i];
			$data=array('invoices_id'=>$invoices_id,
						'item_name'=>$item_name,
						'item_desc'=>$item_desc,
						'quantity'=>$quantity,
						'unit'=>$unit,
						'unit_cost'=>$unit_cost,
						'total_cost'=>$total_cost
						);
			$result=$this->Sales_Model->main_invoice($data);
			$data=array();
		}
		echo "1";
	}

	public function create_invoice(){
		$invoice_date=$_POST['invoice_date'];
		if (isset($_POST['recur_frequency'])) {
			$_POST['recurring']="1";
			if ($_POST['recur_frequency']=="7D") {
				$_POST['recuring_frequency']="7";
			}
			elseif ($_POST['recur_frequency']=="1M") {
				$_POST['recuring_frequency']="31";
			}
			elseif ($_POST['recur_frequency']=="3M") {
				$_POST['recuring_frequency']="93";
			}
			elseif ($_POST['recur_frequency']=="6M") {
				$_POST['recuring_frequency']="182";
			}
			elseif ($_POST['recur_frequency']=="1Y") {
				$_POST['recuring_frequency']="365";
			}
			elseif ($_POST['recur_frequency']=="2Y") {
				$_POST['recuring_frequency']="730";
			}
			elseif ($_POST['recur_frequency']=="3Y") {
				$_POST['recuring_frequency']="1095";
			}
			else{
				$_POST['recuring_frequency']="31";
			}
			$_POST['recur_next_date']=date("Y-m-d", strtotime("$invoice_date +".$_POST['recuring_frequency']." days"));
		}
		else{
			$_POST['recurring']="2";
		}
		if(isset($_POST['everyone'])){
			unset($_POST['everyone']);
		}
		$exploder=explode("-",$invoice_date);
		$_POST['invoice_month']=$exploder[0]."-".$exploder[1];
		$_POST['invoice_year']=$exploder[0];
		$_POST['currency']="INR";
		$_POST['date_saved']=date('Y-m-d H:i:s');
		$_POST['total_tax']='{"tax_name":null,"total_tax":null}';
		$_POST['company_id']=$this->session->userdata('logged_user')[0]->company_id;
		$result=$this->Sales_Model->create_invoice($_POST);
		if (!$result) {
			die(json_encode(array('status'=>'0','msg'=>'Invoice ID already Exists')));
		}
		else{
			die(json_encode(array('status'=>'1','invoice_id'=>$result)));
		}
	}
	
			public function deleteInvoice()
	{
		$dataa=array('invoices_id'=>$this->input->post('invoice_id'));
		$data=$this->Sales_Model->Deleteinvoice($dataa);
		die(json_encode(array('code'=>1,'data'=>$data)));

	}
}
?>	