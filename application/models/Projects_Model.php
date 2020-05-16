<?php
class Projects_Model extends CI_Model{

	public function create_project($data){
		$checker=array('project_name'=>$data['project_name']);
		$this->db->where($checker);
		$check = $this->db->get("tbl_project")->result_array();
		if(count($check) ==0 ){
		 	if($this->db->insert("tbl_project",$data)){ 		
		 		return true;
		 	}else{
		 		return false;
		 	}
		}else{
			return false;
		} 
	}

	public function fetch_project($id){
		$checker=array('project_id'=>$id);
		$this->db->where($checker);
		$check = $this->db->get("tbl_project")->result_array();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function fetch_Inprojects(){
		$this->db->select('project_id,tbl_project.uploads as project_uploads, project_name,progress,end_date,project_status,permission,tbl_client.name as client_name');
		$this->db->where(' tbl_project.project_status','in_progress');
		$this->db->join('tbl_client', 'tbl_client.client_id = tbl_project.client_id');
		$check = $this->db->get("tbl_project")->result_array();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}
	public function fetch_projects(){
		$this->db->select('project_id,tbl_project.uploads as project_uploads, project_name,progress,end_date,project_status,permission,tbl_client.name as client_name');
		$company_id=$this->session->userdata('logged_user')[0]->company_id;
		$company_id=$company_id?$company_id:'""';
		$WHERE=array('tbl_project.company_id'=>$company_id);
		$this->db->where($WHERE);
		$this->db->join('tbl_client', 'tbl_client.client_id = tbl_project.client_id');
		$check = $this->db->get("tbl_project")->result_array();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function fetch_settings(){
		$check = $this->db->get("tbl_project_settings")->result_array();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function update_projecter($task_id,$task_status){
			$this->db->where('project_id', $task_id);
    		if($this->db->update('tbl_project',array('project_status'=>$task_status))){
    			return true;
    		}
    		else{
    			return false;
    		}
	}

	public function upload_project($project_id,$file_list){
			$this->db->where('project_id', $project_id);
    		if($this->db->update('tbl_project',array('uploads'=>$file_list))){
    			return true;
    		}
    		else{
    			return false;
    		}
	}

	public function update_project($data){
			$id=$data['project_id'];
			unset($data['project_id']);
			unset($data['editor1']);
	        $token = $data['token_amount'];
        	$fp = $data['fixed_rate'];
        	$remaining_amt = $fp-$token;
        	$data['remaining_amt'] = $remaining_amt;
			$this->db->where('project_id', $id);
    		if($this->db->update('tbl_project',$data)){
    			return true;
    		}
    		else{
    			return false;
    		}
	}

	public function delete_project($data){
			$this->db->where('project_id', $data);
			if($this->db->delete('tbl_project')){
				return TRUE;
			}
			else{
				return FALSE;
			}
	}
	public function CheckPermission($designation_id)
    {
        $this->db->where('designations_id',$designation_id);
        return $this->db->get('tbl_designations')->result();
    }
    public function changeProStatusById($dataaa,$pro_id)
    {
    	$this->db->where('project_id',$pro_id);
    	if($this->db->update('tbl_project',$dataaa)){
    			return 1;
    		}
    		else{
    			return 0;
    		}

    }

}

?>