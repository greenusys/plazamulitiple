<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends MY_Controller {

public function __construct(){
		parent::__construct();
		$this->load->model('Client_Model','Client');
		$this->load->model('Invoice_model');
		$this->load->model('User_model');
		
		}


	public function index()
	{

		$session=$this->session->userdata('logged_user');
		$designation_id=$session[0]->designations_id;
		$user_id=$session[0]->user_id;
		$data['UsersPermission']=$this->User_model->CheckUserPermission($user_id);
		$data['Assign_permission']=$this->Client->CheckPermission($designation_id);
		$data['Clients']= $this->Client->getAllClient();
		$this->load->view('layout/header');
		$this->load->view("pages/client",$data);
		$this->load->view("layout/footer");
	}

    
	public function clientList($type = null)
    {
        if ($this->input->is_ajax_request()) {
            $this->load->model('datatables');
            $this->datatables->table = 'tbl_client';
            $this->datatables->join_table = array('tbl_customer_group');
            $this->datatables->join_where = array('tbl_customer_group.customer_group_id=tbl_client.customer_group_id');
            $this->datatables->column_order = array('name', 'email', 'short_note', 'website', 'tbl_customer_group.customer_group');
            $this->datatables->column_search = array('name', 'email', 'short_note', 'website', 'tbl_customer_group.customer_group');
            $this->datatables->order = array('client_id' => 'desc');
            // get all invoice
            if (!empty($type)) {
                $where = array('tbl_client.customer_group_id' => $type);
            } else {
                $where = null;
            }

            // $fetch_data = make_datatables($where);

            // $data = array();
            // $edited = can_action('4', 'edited');
            // $deleted = can_action('4', 'deleted');
            // foreach ($fetch_data as $_key => $client_details) {
            //     $action = null;
            //     $client_transactions = $this->db->select_sum('amount')->where(array('paid_by' => $client_details->client_id))->get('tbl_transactions')->result();
            //     $customer_group = $this->db->where('customer_group_id', $client_details->customer_group_id)->get('tbl_customer_group')->row();

            //     $client_outstanding = $this->invoice_model->client_outstanding($client_details->client_id);

            //     $sub_array = array();
            //     $name = null;
            //     $name .= '<a class="text-info" href="' . base_url() . 'admin/client/client_details/' . $client_details->client_id . '">' . (!empty($client_details->name) ? $client_details->name : '-') . '</a>';
            //     $sub_array[] = $name;

            //     $contacts = null;
            //     $contacts .= '<span class="label label-success" data-toggle="tooltip" data-palcement="top" title="' . lang('contacts') . '" >' . $this->client_model->count_rows('tbl_account_details', array('company' => $client_details->client_id)) . '</a>';
            //     $sub_array[] = $contacts;
            //     $sub_array[] = fullname($client_details->primary_contact);

            //     $sub_array[] = count($this->db->where('client_id', $client_details->client_id)->get('tbl_project')->result());
            //     if ($client_outstanding > 0) {
            //         $due_amount = display_money($client_outstanding, client_currency($client_details->client_id));
            //     } else {
            //         $due_amount = '0.00';
            //     }
            //     $sub_array[] = $due_amount;
            //     $sub_array[] = display_money($this->client_model->client_paid($client_details->client_id), client_currency($client_details->client_id));
            //     if ($client_transactions[0]->amount > 0) {
            //         $paid_amount = display_money($client_transactions[0]->amount, client_currency($client_details->client_id));
            //     } else {
            //         $paid_amount = '0.00';
            //     }
            //     $sub_array[] = $paid_amount;
            //     $sub_array[] = (!empty($customer_group->customer_group) ? $customer_group->customer_group : '-');

            //     $custom_form_table = custom_form_table(12, $client_details->client_id);
            //     if (!empty($custom_form_table)) {
            //         foreach ($custom_form_table as $c_label => $v_fields) {
            //             $sub_array[] = $v_fields;
            //         }
            //     }

            //     if (!empty($edited)) {
            //         $action .= btn_edit('admin/client/manage_client/' . $client_details->client_id) . ' ';
            //     }
            //     if (!empty($deleted)) {
            //         $action .= '<a data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xs" title="Click to ' . lang("delete") . ' " href="' . base_url() . 'admin/client/delete_client/' . $client_details->client_id . '"><span class="fa fa-trash-o"></span></a>' . ' ';
            //     }
            //     $action .= btn_view('admin/client/client_details/' . $client_details->client_id) . ' ';

            //     $sub_array[] = $action;
            //     $data[] = $sub_array;

            // }
            echo($where);
            // render_table($data, $where);
        } else {
            // redirect('admin/dashboard');
        }
	}
	
	public function client_ajax(){
		$result = $this->Client->create_client($_POST);
		if($result == TRUE){
			die(json_encode(array('status' =>'1','msg'=>'Project Created Successfully')));
		}
		else{
			die(json_encode(array('status' =>'0','msg'=>'Project With Same Name Already Exists')));
		}
   }


	public function create_client(){
		if(isset($_POST['smsNoti']) && $_POST['smsNoti']=="on"){
			$notify=1;
		}else{
			$notify=0;
		}
		$data=array(
					"company_id"=>$this->session->userdata('logged_user')[0]->company_id,
					"primary_contact"=>$this->input->post('compPhone'),
					"name"=>$this->input->post('compName'),
					"email"=>$this->input->post('compEmail'),
					"short_note"=>$this->input->post('short_note'),
					"website"=>$this->input->post('compWebsite'),
					"phone"=>$this->input->post('compPhone'),
					"mobile"=>$this->input->post('compMobile'),
					"fax"=>$this->input->post('compFax'),
					"address"=>$this->input->post('compAddress'),
					"city"=>$this->input->post('compCity'),
					"zipcode"=>$this->input->post('compZipCode'),
					"currency"=>$this->input->post('currency'),
					"skype_id"=>$this->input->post('compSkype'),
					"linkedin"=>$this->input->post('LinkedinUrl'),
					"facebook"=>$this->input->post('faceBookUrL'),
					"twitter"=>$this->input->post('TwitterURL'),
					"language"=>$this->input->post('compLanguage'),
					"country"=>$this->input->post('countryName'),
					"vat"=>$this->input->post('compVat'),
					"hosting_company"=>$this->input->post('hostingCompany'),
					"hostname"=>$this->input->post('hostName'),
					"port"=>$this->input->post('compPort'),
					"password"=>$this->input->post('compPassword'),
					"username"=>$this->input->post('compUsername'),
					"latitude"=>$this->input->post('compLatitude'),
					"longitude"=>$this->input->post('compLongitude'),
					"customer_group_id"=>$this->input->post('customer_group_id'),
					"sms_notification"=>$notify
					);
		 $result = $this->Client->create_client($data);
		 if($result == TRUE){
		 	$this->session->set_flashdata('msg','Client Created Successfully.');
		 }
		 else{
		 	$this->session->set_flashdata('msg','Client With Same Email Already Exists.');
		 }
		 redirect('Client');
	}

	public function fetch_client(){
		$client_id=$_POST['client_id'];
		$result=$this->Client_Model->fetch_client($client_id);
		if($result){
			die(json_encode(array('status' =>'1' ,'data'=>$result )));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'no data ')));
		}
	}

	public function update_client(){
		$result=$this->Client_Model->update_client($_POST);
		if($result){
			die(json_encode(array('status' =>'1' ,'msg'=>'Successfully Updated')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Failed')));
		}
	}

	public function delete_client(){
		$id=$_POST['client_id'];
		$result=$this->Client_Model->delete_client($id);
		if($result == TRUE){
			die(json_encode(array('status' =>'1' ,'msg'=>'Successfully Deleted')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Failed')));
		}
	}

	public function client_details($id){
		$data['client_details']=$this->Client->fetch_client($id);
		// get all client details
        $this->Client->_table_name = "tbl_client"; //table name
        $this->Client->_order_by = "client_id";
        $data['client_details'] = $this->Client->get_by(array('client_id' => $id), TRUE);
        // get all invoice by client id
        $this->Client->_table_name = "tbl_invoices"; //table name
        $this->Client->_order_by = "client_id";
        $data['client_invoices'] = $this->Client->get_by(array('client_id' => $id), FALSE);
        // get all estimates by client id
        $this->Client->_table_name = "tbl_estimates"; //table name
        $this->Client->_order_by = "client_id";
        $data['client_estimates'] = $this->Client->get_by(array('client_id' => $id), FALSE);
        // get client contatc by client id
        $data['client_contacts'] = $this->Client->get_client_contacts($id);
        // get Project  by client id
        $data['clint_project'] = $this->Client->get_client_project($id);
        
         $data['recently_paid'] = $this->db->where('paid_by', $id)->order_by('created_date', 'desc')->get('tbl_payments')->result();
		$this->load->view('layout/header');
		$this->load->view("pages/client_details",$data);
		$this->load->view("layout/footer");
	}

	public function update_client_ajax(){
		$client_id=$_POST['client_id'];
		unset($_POST['client_id']);
		$result = $this->Client->update_client_ajax($client_id,$_POST);
		if ($result) {
			echo "1";
		}
		else{
			echo "0";
		}
	}

	public function edit_client($id){
		$data['client_details']=$this->Client->fetch_client($id);
		// get all client details
        $this->Client->_table_name = "tbl_client"; //table name
        $this->Client->_order_by = "client_id";
        $data['client_details'] = $this->Client->get_by(array('client_id' => $id), TRUE);
        // get all invoice by client id
        $this->Client->_table_name = "tbl_invoices"; //table name
        $this->Client->_order_by = "client_id";
        $data['client_invoices'] = $this->Client->get_by(array('client_id' => $id), FALSE);
        // get all estimates by client id
        $this->Client->_table_name = "tbl_estimates"; //table name
        $this->Client->_order_by = "client_id";
        $data['client_estimates'] = $this->Client->get_by(array('client_id' => $id), FALSE);
        // get client contatc by client id
        $data['client_contacts'] = $this->Client->get_client_contacts($id);
        // get Project  by client id
        $data['clint_project'] = $this->Client->get_client_project($id);
         $data['recently_paid'] = $this->db->where('paid_by', $id)->order_by('created_date', 'desc')->get('tbl_payments')->result();
		$this->load->view('layout/header');
		$this->load->view("pages/edit_client",$data);
		$this->load->view("layout/footer");
	} 
	public function DeleteClient()
	{

		$data=array('client_id'=>$this->input->post('client_id'));
		$results=$this->Client->DeleteClient($data);
		die(json_encode($results));

	}
	// public function client_detaisls($id, $action = null)
 //    {
 //        if ($action == 'add_contacts') {
 //            // get all language
 //            $data['languages'] = $this->db->where('active', 1)->order_by('name', 'ASC')->get('tbl_languages')->result();
 //            // get all location
 //            $this->client_model->_table_name = 'tbl_locales';
 //            $this->client_model->_order_by = 'name';
 //            $data['locales'] = $this->client_model->get();
 //            $data['company'] = $id;
 //            $user_id = $this->uri->segment(6);
 //            if (!empty($user_id)) {
 //                // get all user_info by user id
 //                $data['account_details'] = $this->client_model->check_by(array('user_id' => $user_id), 'tbl_account_details');

 //                $data['user_info'] = $this->client_model->check_by(array('user_id' => $user_id), 'tbl_users');
 //            }

 //        }

 //        $data['title'] = "View Client Details"; //Page title
 //        // get all client details
 //        $this->client_model->_table_name = "tbl_client"; //table name
 //        $this->client_model->_order_by = "client_id";
 //        $data['client_details'] = $this->client_model->get_by(array('client_id' => $id), TRUE);
 //        if (empty($data['client_details'])) {
 //            $type = "error";
 //            $message = "No Record Found";
 //            set_message($type, $message);
 //            redirect('admin/client/manage_client');
 //        }
 //        // get all invoice by client id
 //        $this->client_model->_table_name = "tbl_invoices"; //table name
 //        $this->client_model->_order_by = "client_id";
 //        $data['client_invoices'] = $this->client_model->get_by(array('client_id' => $id), FALSE);

 //        // get all estimates by client id
 //        $this->client_model->_table_name = "tbl_estimates"; //table name
 //        $this->client_model->_order_by = "client_id";
 //        $data['client_estimates'] = $this->client_model->get_by(array('client_id' => $id), FALSE);

 //        // get client contatc by client id
 //        $data['client_contacts'] = $this->client_model->get_client_contacts($id);

 //        $data['subview'] = $this->load->view('admin/client/client_details', $data, TRUE);
 //        $this->load->view('admin/_layout_main', $data); //page load
 //    }

}
?>