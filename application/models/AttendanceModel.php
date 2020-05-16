<?php
class AttendanceModel extends MY_Model
{
    public $_table_name;
    public $_order_by;
    public $_primary_key;
    public function fetchEmployee()
    {
        $company_id = $this->session->userdata('logged_user')[0]->company_id;
        $company_id = $company_id ? $company_id : '""';
        $WHERE = array('tbl_users.company_id' => $company_id);
        $this->db->where($WHERE);
        $this->db->where('tbl_users.role_id', 3);
        $this->db->join('tbl_account_details', 'tbl_account_details.user_id=tbl_users.user_id');
        $this->db->join('tbl_designations', 'tbl_designations.designations_id=tbl_account_details.designations_id');
        return $this->db->get('tbl_users')->result();
    }
    public function getLastAttendanceId()
    {
        $this->db->limit(1);
        $this->db->order_by('attendance_id', 'Desc');
        return $this->db->get('tbl_attendance')->result_array();
    }
    public function markMyAttendance($data, $id, $attArray)
    {
        //  print_r($attArray);
        $conditionArr = array("user_id" => $id, "date_in" => date('Y-m-d'));
        $this->db->where($conditionArr);
        $res = $this->db->get('tbl_attendance')->result();
        if (count($res) == 0) {
            if ($this->db->insert('tbl_attendance', $attArray)) {
                $insert_id = $this->db->insert_id();
                return $insert_id;
            } else {
                return false;
            }
        } else {
            // echo 'Already Hai';
            // print_r($res);
            if ($res[0]->date_out == "") {
                $this->db->where('user_id', $id);
                if ($this->db->update('tbl_attendance', $attArray)) {
                    return $res[0]->attendance_id;
                } else {
                    return false;
                }
            } else {
                return $res[0]->attendance_id;
            }

        }
    }
    public function getClock($st)
    {
        $this->db->where('attendance_id', $st);
        $this->db->order_by('clock_id', 'desc');
        $this->db->limit(1);
        if (count($res = $this->db->get('tbl_clock')->result()) > 0) {
            return $res;
        } else {
            return false;
        }
    }
    public function updateClockDetails($toUpdate, $clock_id)
    {
        if ($this->db->where('clock_id', $clock_id)->update('tbl_clock', $toUpdate)) {
            return true;
        } else {
            return false;
        }
    }
    // public function updateAttendanceTable($user_id,$date){
    //     $this
    // }
    public function getAttendanceId($condition)
    {
        $this->db->where($condition);
        $this->db->order_by("attendance_id", "desc");
        $this->db->limit(1);
        return $this->db->get('tbl_attendance')->result();

    }
    public function get_attendance($condition)
    {
        // $table_="tbl_attendance";
        // print_r($condition);
        $this->db->where('user_id', $condition['user_id']);
        // $this->db->order_by("attendance_id", "desc");
        // $this->db->limit(1);
        return $this->db->get('tbl_attendance')->result();
    }
    public function getAttendanceDetails($id)
    {
        // echo 'Id Passed: '.$id;
        $this->db->where('attendance_id', $id);
        return $this->db->get('tbl_attendance')->result();
    }
    public function insATNDData($data)
    {
        $this->db->where($data);
        if (count($this->db->get('tbl_attendance')->result()) == 0) {
            if ($this->db->insert('tbl_attendance', $data)) {
                $this->db->where($data);
                $this->db->order_by('attendance_id', 'desc');
                $this->db->limit(1);
                return $this->db->get('tbl_attendance')->result();
            } else {
                return false;
            }
        } else {
            return false;
        }

    }

    public function updateAttendData($attendance_id, $date_out)
    {
        if ($this->db->where('attendance_id', $attendance_id)->update('tbl_attendance', array("date_out" => $date_out))) {
            return $this->db->where('attendance_id', $attendance_id)->order_by('clock_id', 'desc')->limit(1)->get('tbl_clock')->result();
        } else {
            return false;
        }
    }
    public function insClockData($data)
    {
        $this->db->where($data);
        if (count($this->db->get('tbl_clock')->result()) == 0) {
            if ($this->db->insert('tbl_clock', $data)) {

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function fetchEmployeeATNDDetails()
    {
        $company_id=$this->session->userdata('logged_user')[0]->company_id;
        $company_id=$company_id?$company_id:'""';
        $WHERE=array('company_id'=>$company_id);
        $this->db->where($WHERE);
        $this->db->join('tbl_account_details', 'tbl_account_details.user_id=tbl_attendance.user_id');
        $this->db->join('tbl_users', 'tbl_users.user_id=tbl_attendance.user_id');
        $this->db->join('tbl_clock', 'tbl_clock.attendance_id=tbl_attendance.attendance_id');
        return $this->db->get('tbl_attendance')->result();
    }
    public function get_employee_id_by_dept_id($departments_id)
    {
        $this->db->select('tbl_account_details.*', false);
        $this->db->select('tbl_designations.*', false);
        $this->db->select('tbl_departments.*', false);
        $this->db->from('tbl_account_details');
        $this->db->join('tbl_designations', 'tbl_designations.designations_id = tbl_account_details.designations_id', 'left');
        $this->db->join('tbl_departments', 'tbl_departments.departments_id = tbl_designations.departments_id', 'left');
        $this->db->where('tbl_departments.departments_id', $departments_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function attendance_report_by_empid($user_id = null, $sdate = null, $flag = null, $leave = null)
    {
        $this->db->select('tbl_attendance.*', false);
        $this->db->select('tbl_clock.*', false);
        $this->db->select('tbl_account_details.user_id', false);
        $this->db->from('tbl_attendance');
        $this->db->join('tbl_clock', 'tbl_clock.attendance_id  = tbl_attendance.attendance_id', 'left');
        $this->db->join('tbl_account_details', 'tbl_attendance.user_id  = tbl_account_details.user_id', 'left');
        $this->db->where('tbl_attendance.user_id', $user_id);
        $this->db->where('tbl_attendance.date_in', $sdate);
        //$this->db->where('tbl_attendance.date_out <=', $sdate);

        $query_result = $this->db->get();
        $result = $query_result->result();

        if (empty($result)) {
            //$val['attendance_status'] = $leave;
            $val['attendance_status'] = $flag;
            $val['date'] = $sdate;
            $result[] = (object) $val;
        }
        return $result;
    }
    public function CheckPermission($designation_id)
    {
        $this->db->where('designations_id', $designation_id);
        return $this->db->get('tbl_designations')->result();
    }
    public function delete_clock($id)
    {
        $this->db->where('clock_id', $id);
        if ($this->db->delete('tbl_clock')) {
            return true;
        } else {
            return false;
        }
    }

}
