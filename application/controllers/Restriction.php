<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restriction extends MY_Controller { 

    function __construct(){
        parent::__construct();
        $this->load->model('Global_Model');
        $this->load->model('User_model');
    }
   public function ip_rest(){
        if($this->ipAddressAddPermission()){
           $data['act']=1;
        }else{
            $data['act']=2;
        }
        $company_id=$this->session->userdata('logged_user')[0]->company_id;
        $company_id=$company_id?$company_id:'""';
        $this->db->where('company_id',$company_id);
        $data['ip_address']=$this->db->get('tbl_allowed_ip')->result();
        $this->load->view('layout/header');
        $this->load->view('pages/ip_restriction',$data);
        $this->load->view('layout/footer');
   }
   public function ip_address_add(){
    if($this->ipAddressAddPermission()){
        switch($this->addIp($this->input->post())){
            case 0:die(json_encode(array("code"=>0,"msg"=>"Failed To Add"))); break;
            case 1:die(json_encode(array("code"=>1,"msg"=>"Permission Allowed to this Ip Address."))); break;
            case 2: die(json_encode(array("code"=>2,"msg"=>"IP Address already Exists."))); break;
            default: die(json_encode(array("code"=>3,"msg"=>"Server Error"))); break;
        }
    }else{
        die(json_encode(array("code"=>4,"msg"=>"Please ask Admin For Permission.")));
    }
   }
   public function ip_action(){
       if(($act=$this->input->post('act'))==1){
           $msg="IP Address Approved";
       }else{
           $msg="IP Address Rejected";
       }
    //   print_r($_POST);
    //   die;
      if($this->db->where('allowed_ip_id',$this->input->post('id'))->update('tbl_allowed_ip',array('status'=>$act))){
          die(json_encode(array("code"=>1,"msg"=>$msg)));
      }else{
          die(json_encode(array("code"=>0,"msg"=>"Server Error.")));
      }
   }
   public function delete_Ip(){
    if($this->db->where('allowed_ip_id',$this->input->post('id'))->delete('tbl_allowed_ip')){
        die(json_encode(array("code"=>1,"msg"=>"Successfully Removed.")));
    }else{
      die(json_encode(array("code"=>0,"msg"=>"Server Error.")));
    }
   }
   
    

}
?>