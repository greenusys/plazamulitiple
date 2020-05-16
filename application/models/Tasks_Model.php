<?php
class Tasks_Model extends CI_Model{

	public function create_task($data){
		$checker=array('task_name'=>$data['task_name']);
		$this->db->where($checker);
		$check = $this->db->get("tbl_task")->result_array();
		if(count($check) ==0 ){
		 	if($this->db->insert("tbl_task",$data)){ 		
		 		return true;
		 	}else{
		 		return false;
		 	}
		}else{
			return false;
		} 
	}

        public function update_task_main($task_id,$data){
            $this->db->where('task_id', $task_id);
            if($this->db->update('tbl_task',$data)){
                return true;
            }
            else{
                return false;
            }
    }

	    public function get_permission($table, $where = null)
    {
        $role = $this->session->logged_user[0]->role_id;
        $user_id = $this->session->logged_user[0]->user_id;
        $this->db->from($table);
        if (!empty($where)) {
            $this->db->where($where);
        }
        if (!empty($_POST["length"]) && $_POST["length"] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }

        $query = $this->db->get();
        $permission = $query->result();

        $return_result = array();
        if ($role != 1) {
            if (!empty($permission)) {
                foreach ($permission as $result) {
                    if ($result->permission == 'all') {
                        array_push($return_result, $result);
                    } else {
                        $get_permission = json_decode($result->permission);
                        if (is_object($get_permission)) {
                            foreach ($get_permission as $id => $v_permission) {
                                if ($user_id == $id) {
                                    array_push($return_result, $result);
                                }
                            }
                        }
                    }
                }
            }
        } else {
            $return_result = $permission;
        }
        return $return_result;
    }

	public function fetch_all_task($filterBy)
    {
        // $tasks = array();
        // $all_tasks = array_reverse($this->get_permission('tbl_task'));
        // if (empty($filterBy)) {
        //     return $all_tasks;
        // } else {
        //     foreach ($all_tasks as $v_tasks) {
        //         if ($v_tasks->task_status == $filterBy) {
        //             array_push($tasks, $v_tasks);
        //         }
        //     }
        // }
        // return $tasks;
        // $this->db->where($checker);
        $company_id=$this->session->userdata('logged_user')[0]->company_id;
        $company_id=$company_id?$company_id:'""';
        $WHERE=array('company_id'=>$company_id);
        $this->db->where($WHERE);
        $this->db->order_by('task_id','desc');
        $check = $this->db->get("tbl_task")->result_array();
        if(count($check)==0 ){
            return false;
        }else{
            return $check;
        } 
    }

	public function fetch_task($id){
		$checker=array('id'=>$id);
		$this->db->where($checker);
		$check = $this->db->get("tasks_")->result_array();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function update_tasks($task_id,$task_status){
			$this->db->where('task_id', $task_id);
    		if($this->db->update('tbl_task',array('task_status'=>$task_status))){
    			return true;
    		}
    		else{
    			return false;
    		}
	}

    public function update_task_ajax($main_data){
        extract($main_data);
        $data=array('user_id'=>$user_id,
                    'title'=>$title,
                    'due_date'=>$due_date,
                    'assigned'=>$assigned);
        $this->db->where('todo_id', $todo_id);
        if($this->db->update('tbl_todo',$data)){
            return true;
        }
        else{
            return false;
        }

    }

	public function update_task($data){
			$id=$data['id'];
			unset($data['id']);
			$this->db->where('id', $id);
    		if($this->db->update('tasks_',$data)){
    			return true;
    		}
    		else{
    			return false;
    		}
	}

	public function update_permission($task_id,$permission){
			$this->db->where('task_id', $task_id);
    		if($this->db->update('tbl_task',array("permission"=>$permission))){
    			return true;
    		}
    		else{
    			return false;
    		}
	}

	public function delete_task($data){
			$this->db->where('task_id', $data);
			if($this->db->delete('tbl_task')){
				return TRUE;
			}
			else{
				return FALSE;
			}
	}

    public function add_todo($data){
       $this->db->insert('tbl_todo', $data);
       return  true;
    }

    public function fetch_todo($id){
        $checker=array('tbl_todo.user_id'=>$id);
        $this->db->select('*');
        $this->db->from('tbl_todo');
        $WHERE=array('tbl_todo.company_id'=>$this->session->userdata('logged_user')[0]->company_id);
        $this->db->where($WHERE);
        $this->db->join('tbl_account_details','tbl_todo.assigned=tbl_account_details.user_id','left');
        $this->db->where($checker);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function fetch_to_do_id($id){
        $checker=array('todo_id'=>$id);
        $this->db->select('*');
        $this->db->from('tbl_todo');
        $this->db->join('tbl_account_details','tbl_todo.user_id=tbl_account_details.user_id','left');
        $this->db->where($checker);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function CheckPermission($designation_id)
    {
        $this->db->where('designations_id',$designation_id);
        return $this->db->get('tbl_designations')->result();
    }
    public function changeTaskStatusById($dataaa,$task_id)
    {
        $this->db->where('task_id',$task_id);
        if($this->db->update('tbl_task',$dataaa)){
                return 1;
            }
            else{
                return 0;
            }

    }

}

?>