<?php
    class AttendanceModel extends CI_Model{
        public function fetchEmployee(){
            $this->db->join('tbl_users','tbl_users.user_id=tbl_account_details.user_id');
            // $this->db->join('tbl_designations','tbl_designations.designations_id=tbl_user_role');
    $this->db->join('tbl_user_role','tbl_user_role.user_role_id=tbl_users.role_id');
    $this->db->join('tbl_designations','tbl_designations.designations_id=tbl_user_role.designations_id');
    // $this->db->join('tbl_designations','tbl_designations.designations_id=tbl_user_role.designations_id');
            return $this->db->get('tbl_account_details')->result();
        }
        public function getLastAttendanceId(){
            $this->db->limit(1);
            $this->db->order_by('attendance_id','Desc');
            return $this->db->get('tbl_attendance')->result_array();
        }
        public function markMyAttendance($data,$id,$attArray){
        //  print_r($attArray);
            $conditionArr=array("user_id"=>$id,"date_in"=>date('Y-m-d'));
            $this->db->where($conditionArr);
            $res=$this->db->get('tbl_attendance')->result();
            if(count($res)==0){
                if($this->db->insert('tbl_attendance',$attArray)){
                    $insert_id = $this->db->insert_id();
                    return $insert_id;
                }else{
                    return false;
                }
            }else{
                // echo 'Already Hai';
                // print_r($res);
                if($res[0]->date_out==""){
                    $this->db->where('user_id',$id);
                    if($this->db->update('tbl_attendance',$attArray)){
                       return $res[0]->attendance_id;
                    }else{
                        return false;
                    }
                }else{
                    return $res[0]->attendance_id;
                }
                
            }
        }
        public function getClock($st){
            $this->db->where('attendance_id',$st);
            if(count($res=$this->db->get('tbl_clock')->result())>0){
               return $res;
            }else{
               return false;
            }
        }
        // public function updateAttendanceTable($user_id,$date){
        //     $this
        // }
        public function getAttendanceId($condition){
            $this->db->where($condition);
            $this->db->order_by("attendance_id", "desc");
            $this->db->limit(1);  
            return $this->db->get('tbl_attendance')->result();
            
        }
        public function get_attendance($condition){
            // $table_="tbl_attendance";
            // print_r($condition);
            $this->db->where('user_id',$condition['user_id']);
            // $this->db->order_by("attendance_id", "desc");
            // $this->db->limit(1);  
            return $this->db->get('tbl_attendance')->result();
        }
        public function getAttendanceDetails($id){
            // echo 'Id Passed: '.$id;
            $this->db->where('attendance_id',$id);
            return $this->db->get('tbl_attendance')->result();
        }
        public function insATNDData($data){
            $this->db->where($data);
            if(count($this->db->get('tbl_attendance')->result())==0){
                if($this->db->insert('tbl_attendance',$data)){
                    $this->db->where($data);
                    $this->db->order_by('attendance_id','desc');
                    $this->db->limit(1);
                    return $this->db->get('tbl_attendance')->result();
                }else{
                    return false;
                }
            }else{
                return false;
            }
        
        }


        public function insClockData($data){
            $this->db->where($data);
            if(count($this->db->get('tbl_clock')->result())==0){
                if($this->db->insert('tbl_clock',$data)){
                    
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
        public function fetchEmployeeATNDDetails(){
            $this->db->join('tbl_account_details','tbl_account_details.user_id=tbl_attendance.user_id');
            $this->db->join('tbl_users','tbl_users.user_id=tbl_attendance.user_id');
            $this->db->join('tbl_clock','tbl_clock.attendance_id=tbl_attendance.attendance_id');
            return $this->db->get('tbl_attendance')->result();
        }
        public function get_employee_id_by_dept_id($departments_id)
        {
            $this->db->select('tbl_account_details.*', FALSE);
            $this->db->select('tbl_designations.*', FALSE);
            $this->db->select('tbl_departments.*', FALSE);
            $this->db->from('tbl_account_details');
            $this->db->join('tbl_designations', 'tbl_designations.designations_id = tbl_account_details.designations_id', 'left');
            $this->db->join('tbl_departments', 'tbl_departments.departments_id = tbl_designations.departments_id', 'left');
            $this->db->where('tbl_departments.departments_id', $departments_id);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        }
    } 
?>
