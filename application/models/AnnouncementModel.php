<?php
	class AnnouncementModel extends CI_Model{
		public function addNewAnnouncement($data){
			$this->db->where('title',$data['title']);
			$this->db->where('description',$data['description']);
			$this->db->where('user_id',$data['user_id']);
			if(count($this->db->get('tbl_announcements')->result())==0){
				if($this->db->insert('tbl_announcements',$data)){
					return 1;
				}else{
					return 0;
				}
			}else{
				return 2;
			}
		}
		public function UpdateAnnouncement($data,$announceid){
			$this->db->where('announcements_id',$announceid);
			// if(count($this->db->get('tbl_announcements')->result())==0){
				if($this->db->update('tbl_announcements',$data)){
					return 1;
				}else{
					return 0;
				}
			// }
			
		}
		public function getAnnounce(){
			$WHERE=array('company_id'=>$this->session->userdata('logged_user')[0]->company_id);
			$this->db->where($WHERE);
			$this->db->join('tbl_account_details','tbl_account_details.user_id=tbl_announcements.user_id');
			return $this->db->get('tbl_announcements')->result();
		}

		public function update_permissions($permission,$designations_id)
		{
			$this->db->where('designations_id', $designations_id);
    		if($this->db->update('tbl_designations',array('permission'=>$permission))){
    			return true;
    		}
    		else{
    			return false;
    		}
		}
	 public function CheckPermission($designation_id)
	    {
        $this->db->where('designations_id',$designation_id);
        return $this->db->get('tbl_designations')->result();
	    }

	    public function DeleteAnnounceData($data)
	    {
	        $this->db->where($data);
	         $results=$this->db->delete('tbl_announcements');
	         if($results)
	            {
	                return 1;
	            }
	    
	            else
	            {
	                return 0;
	            }
	    }
	    // public function FetchAnnounceDataById($an_id)
	    // {
	    // 	$this->db->where('announcements_id',$an_id);
	    // 	return $this->db->get('tbl_announcements')->result();

	    // }
	    public function FetchAnnounceDataById($an_id){
        $this->db->where('announcements_id',$an_id);
        return $this->db->get('tbl_announcements')->result();
    }
	
	}

?>