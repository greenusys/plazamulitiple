<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of payroll_model
 *
 * @author NaYeM
 */
class Payroll_Model extends MY_Model
{

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function set_template($data){
           $this->db->insert('tbl_salary_template', $data);
           $insert_id = $this->db->insert_id();
           return  $insert_id;
    }

    public function update_template($data,$id){
            $this->db->where('salary_template_id', $id);
            $this->db->update('tbl_salary_template', $data);
            return true;
    }

    public function update_null_payroll($user){
            $query = $this->db->get_where('tbl_employee_payroll', array(//making selection
            'user_id' => $user
            ));

            $count = $query->num_rows();
            if ($count!=0) {
                $data=array(
                    "salary_template_id"=>null,
                    "company_id"=>$this->session->userdata('logged_user')[0]->company_id,
                    "hourly_rate_id"=>null
                );
                $this->db->where('user_id', $user);
                $this->db->update('tbl_employee_payroll', $data);
                return true;
             }
             else{
                $data=array(
                    "salary_template_id"=>null,
                    "company_id"=>$this->session->userdata('logged_user')[0]->company_id,
                    "hourly_rate_id"=>null,
                    "user_id"=>$user);
                $this->db->insert('tbl_employee_payroll', $data);
                return true;
             } 
    }

    public function update_hourly_model($hourly_user,$hourly_index){
            $query = $this->db->get_where('tbl_employee_payroll', array(//making selection
            'user_id' => $hourly_user
            ));
            $count = $query->num_rows();
            if ($count!=0) {
                $count = $query->num_rows();
                $data=array(
                    "hourly_rate_id"=>$hourly_index,
                    "company_id"=>$this->session->userdata('logged_user')[0]->company_id
                );
                $this->db->where('user_id', $hourly_user);
                $this->db->update('tbl_employee_payroll', $data);
                return true;
            }
            else{
                $data=array(
                    "hourly_rate_id"=>$hourly_index,
                    "company_id"=>$this->session->userdata('logged_user')[0]->company_id,
                    "user_id"=>$hourly_user
                );
                $this->db->insert('tbl_employee_payroll', $data);
                return true;
            }
    }

    public function update_monthly_model($monthly_user,$monthly_index){
            $query = $this->db->get_where('tbl_employee_payroll', array(//making selection
            'user_id' => $monthly_user
            ));
            $count = $query->num_rows();
            if ($count!=0) {
                $data=array(
                    "salary_template_id"=>$monthly_index,
                    "company_id"=>$this->session->userdata('logged_user')[0]->company_id
                );
                $this->db->where('user_id', $monthly_user);
                $this->db->update('tbl_employee_payroll', $data);
                return true;
            }
            else{
                $data=array(
                    "salary_template_id"=>$monthly_index,
                    "company_id"=>$this->session->userdata('logged_user')[0]->company_id,
                    "user_id"=>$monthly_user
                );
                $this->db->insert('tbl_employee_payroll', $data);
                return true;
            }
    }

    public function update_hourly($data){
        extract($data);
        $array=array("hourly_grade"=>$hourly_grade,"hourly_rate"=>$hourly_rate);
        $this->db->where('hourly_rate_id', $hourly_rate_id);
        $this->db->update('tbl_hourly_rate', $array);
        return true;
    }

    public function delete_allowances_deductions($id){
        $this->db->delete('tbl_salary_allowance',array('salary_template_id'=>$id)); 
        $this->db->delete('tbl_salary_deduction',array('salary_template_id'=>$id));
        return true;
    }

    public function delete_payroll($id){
        $this->db->delete('tbl_employee_payroll',array('payroll_id'=>$id)); 
        return true;
    }

    public function set_hourly_template($data){
           $this->db->insert('tbl_hourly_rate', $data);
           return true;
    }

    public function set_template_allowance($data){
           $this->db->insert('tbl_salary_allowance', $data);
           return true;
    }

    public function set_template_deduction($data){
           $this->db->insert('tbl_salary_deduction', $data);
           return true;
    }

    public function add_overtime($post){
           $this->db->insert('tbl_overtime', $post);
           return true;
    }

    public function fetch_templates(){
        $this->db->select('*');
        $this->db->from('tbl_salary_template');
        $company_id=$this->session->userdata('logged_user')[0]->company_id;
        $company_id=$company_id?$company_id:'""';
        $WHERE=array('company_id'=>$company_id);
        $this->db->where($WHERE);
        $query_result = $this->db->get();
        $result = $query_result->result();
        if(count($result)>0){
            return $result;
        }
        else{
            return false;
        }
    }

    public function fetch_template_by_id($id){
        $this->db->select('*');
        $this->db->from('tbl_salary_template');
        $this->db->where('salary_template_id',$id);
        $query_result = $this->db->get()->result_array();
        if(count($query_result)>0){
            return $query_result;
        }
        else{
            return false;
        }
    }

    public function delete_template($id){
        $this->db->delete('tbl_salary_template',array('salary_template_id'=>$id));
        $this->db->delete('tbl_salary_allowance',array('salary_template_id'=>$id)); 
        $this->db->delete('tbl_salary_deduction',array('salary_template_id'=>$id));
        return true;

    }

    public function fetch_allowance_by_id($id){
        $this->db->select('*');
        $this->db->from('tbl_salary_allowance');
        $this->db->where('salary_template_id',$id);
        $query_result = $this->db->get()->result_array();
        return $query_result;
    }

    public function fetch_deduction_by_id($id){
        $this->db->select('*');
        $this->db->from('tbl_salary_deduction');
        $this->db->where('salary_template_id',$id);
        $query_result = $this->db->get()->result_array();
        return $query_result;
    }

    public function add_account($data){
        $checker=array('account_name'=>$data['account_name']);
        $this->db->where($checker);
        $check = $this->db->get("tbl_accounts")->result_array();
        if(count($check) ==0 ){
            if($this->db->insert("tbl_accounts",$data)){
                $insert_id = $this->db->insert_id();
                return  $insert_id;         
            }else{
                return false;
            }
        }else{
            return false;
        } 
    }

    public function check_user_payment($id,$date){
        $this->db->select('*');
        $this->db->from('tbl_salary_payment');
        $this->db->where('user_id',$id);
        $this->db->where('payment_month',$date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function fetch_departments_data($id){
        $company_id=$this->session->userdata('logged_user')[0]->company_id;
        $company_id=$company_id?$company_id:'""';
        $WHERE=array('tbl_designations.company_id'=>$company_id);
        $this->db->select('*,tbl_account_details.user_id as user');
        $this->db->where($WHERE);
        $this->db->from('tbl_designations');
        $this->db->join('tbl_account_details', 'tbl_designations.designations_id=tbl_account_details.designations_id');
        $this->db->join('tbl_employee_payroll','tbl_employee_payroll.user_id = tbl_account_details.user_id','left');
        $this->db->join('tbl_salary_template','tbl_employee_payroll.salary_template_id=tbl_salary_template.salary_template_id','left');
        $this->db->where('tbl_designations.departments_id', $id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_advance_salary_info_by_date($payment_month = NULL, $id = NULL, $user_id = NULL)
    {
        $company_id=$this->session->userdata('logged_user')[0]->company_id;
        $company_id=$company_id?$company_id:'""';
        $WHERE=array('tbl_advance_salary.company_id'=>$company_id);
        $this->db->select('tbl_advance_salary.*', FALSE);
        $this->db->select('tbl_account_details.*', FALSE);
        $this->db->from('tbl_advance_salary');
        $this->db->where($WHERE);
        $this->db->join('tbl_account_details', 'tbl_account_details.user_id = tbl_advance_salary.user_id', 'left');
        if ($this->session->userdata('user_type') != 1) {
            $this->db->where('tbl_advance_salary.user_id', $this->session->userdata('user_id'));
            $this->db->where('tbl_advance_salary.deduct_month', $payment_month);
            $query_result = $this->db->get();
            $result = $query_result->result();
        } elseif (!empty($id)) {
            $this->db->where('tbl_advance_salary.advance_salary_id', $id);
            $query_result = $this->db->get();
            $result = $query_result->row();
        } elseif (!empty($user_id)) {
            $this->db->where('tbl_advance_salary.status', '1');
            $this->db->where('tbl_account_details.user_id', $user_id);
            $query_result = $this->db->get();
            $result = $query_result->result();
        } else {
            $this->db->where('tbl_advance_salary.deduct_month', $payment_month);
            $query_result = $this->db->get();
            $result = $query_result->result();
        }
        return $result;
    }

    public function fetch_departments(){
        $this->db->select('*');
        $this->db->from('tbl_departments');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function fetch_hourly_templates(){
        $this->db->select('*');
        $this->db->from('tbl_hourly_rate');
        $company_id=$this->session->userdata('logged_user')[0]->company_id;
        $company_id=$company_id?$company_id:'""';
        $WHERE=array('company_id'=>$company_id);
        $this->db->where($WHERE);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function fetch_hourly_template_by_id($id){
        $this->db->select('*');
        $this->db->from('tbl_hourly_rate');
        $this->db->where('hourly_rate_id',$id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_department_by_id($departments_id)
    {
        $this->db->select('tbl_departments.deptname', FALSE);
        $this->db->select('tbl_designations.*', FALSE);
        $this->db->from('tbl_departments');
        $this->db->join('tbl_designations', 'tbl_departments.departments_id = tbl_designations.departments_id', 'left');
        $this->db->where('tbl_departments.departments_id', $departments_id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function get_emp_info_by_id($designation_id)
    {
        $this->db->select('tbl_account_details.*', FALSE);
        $this->db->select('tbl_designations.designations', FALSE);
        $this->db->from('tbl_account_details');
        $this->db->join('tbl_designations', 'tbl_designations.designations_id  = tbl_account_details.designations_id', 'left');
        $this->db->where('tbl_designations.designations_id', $designation_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_emp_salary_list($id = NULL, $designation_id = NULL)
    {
        $company_id=$this->session->userdata('logged_user')[0]->company_id;
        $company_id=$company_id?$company_id:'""';
        $WHERE=array('tbl_employee_payroll.company_id'=>$company_id);
        $this->db->select('tbl_employee_payroll.*', FALSE);
        $this->db->select('tbl_account_details.*', FALSE);
        $this->db->select('tbl_salary_template.*', FALSE);
        $this->db->select('tbl_hourly_rate.*', FALSE);
        $this->db->select('tbl_designations.*', FALSE);
        $this->db->where($WHERE);
        $this->db->select('tbl_departments.deptname', FALSE);
        $this->db->from('tbl_employee_payroll');
        $this->db->join('tbl_account_details', 'tbl_employee_payroll.user_id = tbl_account_details.user_id', 'left');
        $this->db->join('tbl_salary_template', 'tbl_employee_payroll.salary_template_id = tbl_salary_template.salary_template_id', 'left');
        $this->db->join('tbl_hourly_rate', 'tbl_employee_payroll.hourly_rate_id = tbl_hourly_rate.hourly_rate_id', 'left');
        $this->db->join('tbl_designations', 'tbl_designations.designations_id  = tbl_account_details.designations_id', 'left');
        $this->db->join('tbl_departments', 'tbl_departments.departments_id  = tbl_designations.departments_id', 'left');

        if (!empty($designation_id)) {
            $this->db->where('tbl_designations.designations_id', $designation_id);
        }
        if (!empty($id)) {
            $this->db->where('tbl_employee_payroll.user_id', $id);
            $query_result = $this->db->get();
            $result = $query_result->row();
        } else {
            if (!empty($_POST["length"]) && $_POST["length"] != -1) {
                $this->db->limit($_POST['length'], $_POST['start']);
            }
            $query_result = $this->db->get();
            $result = $query_result->result();
        }
        return $result;
    }

    public function get_salary_payment_info($salary_payment_id, $result = NULL, $search_type = null)
    {

        $this->db->select('tbl_salary_payment.*', FALSE);
        $this->db->select('tbl_account_details.*', FALSE);
        $this->db->select('tbl_designations.*', FALSE);
        $this->db->select('tbl_departments.deptname', FALSE);
        $this->db->from('tbl_salary_payment');
        $this->db->join('tbl_account_details', 'tbl_salary_payment.user_id = tbl_account_details.user_id', 'left');
        $this->db->join('tbl_designations', 'tbl_designations.designations_id  = tbl_account_details.designations_id', 'left');
        $this->db->join('tbl_departments', 'tbl_departments.departments_id  = tbl_designations.departments_id', 'left');
        if (!empty($search_type)) {
            if ($search_type == 'employee') {
                $this->db->where("tbl_salary_payment.user_id", $salary_payment_id);
            } elseif ($search_type == 'month') {
                $this->db->where("tbl_salary_payment.payment_month", $salary_payment_id);
            } elseif ($search_type == 'period') {
                $this->db->where("tbl_salary_payment.payment_month >=", $salary_payment_id['start_month']);
                $this->db->where("tbl_salary_payment.payment_month <=", $salary_payment_id['end_month']);
            }
        } else {
            $this->db->where("tbl_salary_payment.salary_payment_id", $salary_payment_id);
        }
        if (!empty($_POST["length"]) && $_POST["length"] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query_result = $this->db->get();
        if (!empty($result)) {
            $result = $query_result->result();
        } else {
            $result = $query_result->row();
        }
        return $result;
    }

    public function view_advance_salary($id = NULL)
    {
        $this->db->select('tbl_advance_salary.*', FALSE);
        $this->db->select('tbl_account_details.*', FALSE);
        $this->db->from('tbl_advance_salary');
        $this->db->join('tbl_account_details', 'tbl_account_details.user_id = tbl_advance_salary.user_id', 'left');
        $this->db->where('tbl_advance_salary.advance_salary_id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }

    public function my_advance_salary_info($all = null)
    {
        $this->db->select('tbl_advance_salary.*', FALSE);
        $this->db->select('tbl_account_details.*', FALSE);
        $this->db->from('tbl_advance_salary');
        $this->db->join('tbl_account_details', 'tbl_account_details.user_id = tbl_advance_salary.user_id', 'left');
        if (!empty($all)) {
            $this->db->order_by('tbl_advance_salary.request_date', "DESC");
        } else {
            $this->db->where('tbl_advance_salary.user_id', $this->session->userdata('user_id'));
        }
        if (!empty($_POST["length"]) && $_POST["length"] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }

    public function get_attendance_info_by_date($start_date, $end_date, $user_id)
    {
        $this->db->select('tbl_attendance.*', FALSE);
        $this->db->select('tbl_clock.*', FALSE);
        $this->db->from('tbl_attendance');
        $this->db->join('tbl_clock', 'tbl_clock.attendance_id  = tbl_attendance.attendance_id', 'left');
        $this->db->where('tbl_attendance.date_in >=', $start_date);
        $this->db->where('tbl_attendance.date_in <=', $end_date);
        $this->db->where('tbl_attendance.user_id', $user_id);
        $this->db->where('tbl_attendance.attendance_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_overtime_info($data){
        $this->db->select('*', FALSE);
        $this->db->from('tbl_overtime');
        $this->db->where('overtime_date >=',$data['start_date']);
        $this->db->where('overtime_date <=', $data['end_date']);
        $this->db->where('user_id', $data['user_id']);
        $this->db->order_by('overtime_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_provident_fund_info_by_date($start_date, $end_date, $user_id = null)
    {
        $this->db->select('tbl_salary_payment.*', FALSE);
        $this->db->select('tbl_salary_payment_deduction.*', FALSE);
        $this->db->select('tbl_account_details.*', FALSE);
        $this->db->from('tbl_salary_payment');
        $this->db->join('tbl_salary_payment_deduction', 'tbl_salary_payment_deduction.salary_payment_id  = tbl_salary_payment.salary_payment_id', 'left');
        $this->db->join('tbl_account_details', 'tbl_account_details.user_id  = tbl_salary_payment.user_id', 'left');
        $this->db->where('tbl_salary_payment.payment_month >=', $start_date);
        $this->db->where('tbl_salary_payment.payment_month <=', $end_date);
        $this->db->where('tbl_salary_payment_deduction.salary_payment_deduction_label', lang('provident_fund'));
        if (!empty($user_id)) {
            $this->db->where('tbl_salary_payment.user_id', $user_id);
        }
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

        public function get_overtime_info_by_date($start_date, $end_date, $user_id = null)
    {
        $this->db->select('tbl_overtime.*', FALSE);
        $this->db->select('tbl_account_details.fullname', FALSE);
        $this->db->from('tbl_overtime');
        $this->db->join('tbl_account_details', 'tbl_account_details.user_id = tbl_overtime.user_id', 'left');
        $this->db->where('tbl_overtime.overtime_date >=', $start_date);
        $this->db->where('tbl_overtime.overtime_date <=', $end_date);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function get_overtime_info_by_emp_id($overtime_id)
    {

        $this->db->select('tbl_overtime.*', FALSE);
        $this->db->select('tbl_account_details.*', FALSE);
        $this->db->from('tbl_overtime');
        $this->db->join('tbl_account_details', 'tbl_account_details.user_id = tbl_overtime.user_id', 'left');
        $this->db->where('tbl_overtime.overtime_id', $overtime_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }

        public function generate_paySlip($salary_payment_id)
    {
     
        $this->db->select('tbl_salary_payment.*', FALSE);
        $this->db->select('tbl_salary_payslip.*', FALSE);
     
        //$this->db->select('tbl_salary_payment_allowance.*', FALSE);
  
        $this->db->select('tbl_account_details.*, tbl_users.*,tbl_designations.*, tbl_departments.*', FALSE);
        $this->db->from('tbl_salary_payment');
         $this->db->join('tbl_users', 'tbl_users.user_id=tbl_salary_payment.user_id');
        $this->db->join('tbl_account_details', 'tbl_account_details.user_id=tbl_salary_payment.user_id');
        $this->db->join('tbl_salary_payslip', 'tbl_salary_payslip.salary_payment_id = tbl_salary_payment.salary_payment_id', 'left');
        $this->db->join('tbl_designations', 'tbl_designations.designations_id = tbl_account_details.designations_id');

        $this->db->join('tbl_departments', 'tbl_designations.departments_id = tbl_departments.departments_id');
      //  $this->db->join('tbl_salary_payment_allowance', 'tbl_salary_payment_allowance.salary_payment_id = tbl_salary_payment.salary_payment_id', 'left');
      
         $data_ary = array('tbl_salary_payment.salary_payment_id' => $salary_payment_id);
         $this->db->where($data_ary);
        $result = $this->db->get()->row();

        return $result;
    }

    public function fetch_salary_payment_details($salary_payment_id){
           $res = $this->db->query("select * from tbl_salary_payment_details where salary_payment_id = '$salary_payment_id'")->result();
           return $res;
    }

     public function fetch_sal_payment_deduction($salary_payment_id){
           $res = $this->db->query("select * from tbl_salary_payment_deduction where salary_payment_id = '$salary_payment_id'")->result();
           return $res;
    }
    public function overTime($user_id){
        $condition =array('user_id'=>$user_id,'status'=>'approved');
        $this->db->where($condition);
       return  $this->db->get('tbl_overtime')->result();
    }


    public function fetch_salary_allowance_details($salary_payment_id){
           $res = $this->db->query("select * from tbl_salary_payment_allowance where salary_payment_id = '$salary_payment_id'")->result();
           return $res;
    }
    public function CheckPermission($designation_id)
    {
        $this->db->where('designations_id',$designation_id);
        return $this->db->get('tbl_designations')->result();
    }
    public function DeleteHourly($data)
    {
        $this->db->where($data);
         $results=$this->db->delete('tbl_hourly_rate');
         if($results)
            {
                return 1;
            }
    
            else
            {
                return 0;
            }
    }
    public function fetch_AdvSalary()
    {
       
        return $this->db->get('tbl_advance_salary')->result();
    }
}
