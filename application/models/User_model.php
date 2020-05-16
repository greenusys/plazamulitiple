<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * 	@author : themetic.net
 * 	date	: 21 April, 2015
 * 	Inventory & Invoice Management System
 * 	http://themetic.net
 *  version: 1.0
 */

class User_model extends MY_Model
{

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function select_user_roll_by_id($user_id)
    {
        $this->db->select('tbl_user_role.*', false);
        $this->db->select('tbl_menu.*', false);
        $this->db->from('tbl_user_role');
        $this->db->join('tbl_menu', 'tbl_user_role.menu_id = tbl_menu.menu_id', 'left');
        $this->db->where('tbl_user_role.user_id', $user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function insert_user($data){
       $this->db->insert('tbl_users', $data);
       $insert_id = $this->db->insert_id();
       return  $insert_id;
    }

    public function insert_account($data){
       $this->db->insert('tbl_account_details', $data);
       return  true;
    }

    public function check_user($username,$email){
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('username',$username);
        $this->db->or_where('email',$email);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function fetch_user(){
        $checker=array('role_id'=>'1',
                       'activated'=>'1',
                       'banned'=>'0');
        $checker2=array('role_id'=>'3',
                       'activated'=>'1',
                       'banned'=>'0');
        $this->db->where($checker);
        $this->db->or_where($checker2);
        $check = $this->db->get("tbl_users")->result_array();
        if(count($check)==0 ){
            return false;
        }else{
            return $check;
        } 
    }

    public function fetch_all_details($user_id){
        $checker=array('tbl_users.user_id'=>$user_id);
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->join('tbl_account_details', 'tbl_users.user_id = tbl_account_details.user_id');
        $this->db->where($checker);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function fetch_all_users()
    {
        $company_id=$this->session->userdata('logged_user')[0]->company_id;
        $company_id=$company_id?$company_id:'""';
        $WHERE=array('company_id'=>$company_id);
        $this->db->select('*');
        $this->db->where($WHERE);
        $this->db->from('tbl_users');
        $this->db->join('tbl_account_details', 'tbl_users.user_id = tbl_account_details.user_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function fetch_all_employees()
    {
        $checker=array('tbl_users.role_id'=>'3');
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->join('tbl_account_details', 'tbl_users.user_id = tbl_account_details.user_id');
        $this->db->where($checker);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function update_todo($data)
    {
        extract($data);
        $new_data=array('status'=>$status);
        $this->db->where(array('todo_id'=>$todo_id));
        $res = $this->db->update('tbl_todo',$new_data);
        if ($res) {
            return true;
        }
        else{
            return false;
        }

    }

    public function delete_todo($todo)
    {
            $this->db->where('todo_id', $todo);
            $this->db->delete('tbl_todo');
            return true;
    }

    public function fetch_all_employees_admin()
    {
        $checker=array('2');
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->join('tbl_account_details', 'tbl_users.user_id = tbl_account_details.user_id');
        $this->db->where_not_in('tbl_users.role_id',$checker);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function fetch_user_by_id($id){
        $checker=array('tbl_users.user_id'=>$id);
        $this->db->select('tbl_users.user_id as userid,fullname,avatar');
        $this->db->join('tbl_account_details', 'tbl_users.user_id = tbl_account_details.user_id');
        $this->db->where($checker);
        $check = $this->db->get("tbl_users")->row();
        return $check;
    }

    public function get_new_user()
    {
        $post = new stdClass();
        $post->user_name = '';
        $post->name = '';
        $post->email = '';
        $post->flag = 3;
        $post->employee_login_id = '';

        return $post;
    }

    public function get_user($filterBy = null)
    {
        $users = array();
        $all_users = array_reverse($this->get_permission('tbl_users'));
        if (empty($filterBy)) {
            return $all_users;
        } else {
            foreach ($all_users as $v_users) {
                if ($filterBy == 'admin' && $v_users->role_id == 1) {
                    array_push($users, $v_users);
                }
                if ($filterBy == 'client' && $v_users->role_id == 2) {
                    array_push($users, $v_users);
                }
                if ($filterBy == 'staff' && $v_users->role_id == 1) {
                    array_push($users, $v_users);
                }
                if ($filterBy == 'active' && $v_users->activated == 1) {
                    array_push($users, $v_users);
                }
                if ($filterBy == 'deactive' && $v_users->activated == 0) {
                    array_push($users, $v_users);
                }
                if ($filterBy == 'banned' && $v_users->banned == 1) {
                    array_push($users, $v_users);
                }
            }
        }
        return $users;
    }

    public function fetch_user_data($id)
    {
        $this->db->select('tbl_users.*', FALSE);
         $this->db->select('tbl_account_details.*', FALSE);
        $this->db->from('tbl_users');
        $this->db->join('tbl_account_details','tbl_account_details.user_id=tbl_users.user_id');
        $this->db->where('tbl_users.user_id',$id);
        $res = $this->db->get()->result();
         return $res;   
    }

    public function update_user_with_image($user_id,$data,$email){
        $cond1=array("user_id"=>$user_id);
        $this->db->where($cond1);
        $ct =$this->db->get('tbl_account_details')->row();
        if(count($ct)>0){
            $this->db->where($cond1);
            $res = $this->db->update('tbl_account_details',$data);
            if($res){
                $this->db->where($cond1);
                $res1 = $this->db->update('tbl_users',array('email'=>$email));
                if ($res1) {
                    return true;
                }
                else{
                    return false;
                }
            }else{
               return false;
            }
        }else{
            return false;
        }

    }

    public function update_user_data($data){
        //print_r($data);
        $condition =array("user_id"=>$data['user_id']);
        $this->db->where($condition);
        $ct =$this->db->get('tbl_account_details')->row();
        if(count($ct)>0){
            $this->db->where($condition);
            $res = $this->db->update('tbl_account_details',$data);
            if($res){
                return true;
            }else{
               return false;
            }
        }else{
            return false;
        }
    }
     public function update_user_email($data){
        $condition =array("user_id"=>$data['user_id'],"password"=>$data['password']);
        $this->db->where($condition);
        $ct =$this->db->get('tbl_users')->result();
        if(count($ct)>0){
            $dta = array('email'=>$data['email']);
                $this->db->where($condition);
                $res = $this->db->update('tbl_users',$dta);
            if($res){
                return true;
            }else{
               return false;
            }
        }else{
            return false;
        }
     }

    public function update_user_password($data){
        $condition =array("user_id"=>$data['user_id'],"password"=>$data['oldpassword']);
        $this->db->where($condition);
        $ct =$this->db->get('tbl_users')->result();
        if(count($ct)>0){
            $dta = array('password'=>$data['newpassword']);
                $this->db->where($condition);
                $res = $this->db->update('tbl_users',$dta);
            if($res){
                return true;
            }else{
               return false;
            }
        }else{
           return false;
        }
     }

     public function add_user_reports($data){
        // print_r($data);
            if($this->db->insert('tbl_reports', $data)){
                return  true;
            }else{
                return  false;
            } 
     }
     function fetch_report_list($user_id){
       
         $this->db->select('tbl_users.*', FALSE);
         $this->db->select('tbl_reports.*', FALSE);
        $this->db->from('tbl_users');
        $this->db->join('tbl_reports', 'tbl_reports.user_id=tbl_users.user_id');
        $this->db->where('tbl_users.user_id',$user_id);
        $res = $this->db->get()->result();
        return $res;
      
     }

         function fetch_report_data($data){
              $condition =array("rpt_id"=>$data['rpt_id']);
        $this->db->where($condition);
        $ct =$this->db->get('tbl_reports')->row();
       // print_r($ct);
        if(count($ct)>0){
            $this->db->select('tbl_users.*', FALSE);
            $this->db->select('tbl_reports.*', FALSE);
            $this->db->select('tbl_account_details.*', FALSE);
            $this->db->from('tbl_users');
            $this->db->join('tbl_reports', 'tbl_reports.user_id=tbl_users.user_id');   
         
          $this->db->join('tbl_account_details', 'tbl_account_details.user_id=tbl_users.user_id');
            $new_cond=array("tbl_reports.rpt_id"=>$data['rpt_id'],'tbl_users.user_id'=>$ct->user_id);
             $this->db->where($new_cond);
             return $this->db->get()->row();
                
        }else{
            return false;
        }  
     }
     public function CheckPermission($designation_id)
    {
        $this->db->where('designations_id',$designation_id);
        return $this->db->get('tbl_designations')->result();
    }
    public function CheckUserPermission($user_id)
    {
        $this->db->where('user_id',$user_id);
        return $this->db->get('tbl_users')->result();
    }
    public function DeleteUsers($data)
    {
        $this->db->where($data);
         $results=$this->db->delete('tbl_users');
         if($results)
            {
                return 1;
            }
    
            else
            {
                return 0;
            }
    }
    public function fetch_UserInProgressproject($user_id)
    {
       $tabledata=$this->db->get('tbl_project')->result();
       // $permission=$tabledata[0]->permission;
             $finalpermission=array();
               foreach ($tabledata as $value) {
                    $finalpermission[]=array($value->permission);

                       $dec=json_decode($finalpermission);
                   }
                   return  $dec;
               }

       
    public function random_stuff()
    {
        $users_array = array(
            'attributes'  => array(
                'age'       => '25', 
                'height'    => '1.75cm', 
                'weight'    => '70kg'
            ),
            'savings'     => array(
                'cash'      => 3000,
                'bank'      => rand(1, 222)
            )
        );

        $users_array = json_encode($users_array);
        $value       = json_decode($users_array, true);
        return $value;

    }
    public function UpdateusersPassword($oldpass,$user_id,$data)
    {
        $this->db->where('user_id',$user_id);
        $check=$this->db->get('tbl_users')->result();
        
         $dbpass=$check[0]->password;
         if($oldpass==$dbpass)
         {
            $this->db->where('user_id',$user_id);
            if($this->db->update('tbl_users',$data))
            {
            return 1;
            }
            else
            {
              return 0;  
            }
         }
         else
         {
            return 2;
         }
         // print_r($dbpass);
         // die;
        // $dbpass=$check['']

    }

}
?>