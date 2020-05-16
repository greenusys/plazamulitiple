<?php
	class LoginModel extends CI_Model{
		public function verifyThisUser($data){
			// $data['pass_code'];
			$this->db->where('username',$data['user_name_']);
			$this->db->join('tbl_account_details','tbl_account_details.user_id=tbl_users.user_id');
			if(count($result=$this->db->get('tbl_users')->result())>0){
				// print_r($result);
				if($result[0]->password==$data['password_']){
					return $result;
				}
				
			}else{
				return false;
			}	
		}
	}
?>