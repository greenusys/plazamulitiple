<?php
	class Notification_model extends CI_Model{

		public function insert_notification($new_data){
	        $this->db->insert('tbl_notifications', $new_data);
       		return  true;
		}
		// public function insert_notification($new_data){
	 //        $this->db->insert('tbl_notifications', $new_data);
  //      		return  true;
		// }

		public function update_notification($id){
			 $this->db->where('to_user_id', $id); 
		     $dbdata = array(
		          "read" => '1',
		          "read_inline" => '1'
		     ); 
		     $this->db->update('tbl_notifications', $dbdata);
		     /**
		     * if required add this code here to check
		     *
		     * echo $this->db->last_query();
		     */
		     return true; 
		}

	}