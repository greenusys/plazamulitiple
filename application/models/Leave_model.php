<?php
class Leave_Model extends CI_Model
{
    public function getAllDetails($condition = "")
    {
        if ($condition != "") {
            $this->db->where($condition);
        }
        return $this->db->get('tbl_leave_application')->result();
    }
    public function addLeaveData($data)
    {
        // print_r($data);
        // die;

        if ($this->db->insert('tbl_leave_application', $data)) {

            return 1;

        } else {
            return 0;
        }
    }
    public function updateData($data, $condition)
    {
        $this->db->where($condition);
        if ($this->db->update('tbl_leave_application', $data)) {
            return true;
        } else {
            return false;
        }
    }
    public function fetchLeaveDetails()
    {
        $company_id=$this->session->userdata('logged_user')[0]->company_id;
        if(!$company_id){
            $company_id='""';
        }
        return $this->db->query("select tbl_leave_application.*,tbl_users.*,tbl_leave_category.*,tbl_account_details.*,tbl_leave_application.user_id as users,tbl_leave_application.leave_category_id as leavecatid from tbl_leave_application join tbl_users on tbl_users.user_id=tbl_leave_application.user_id  join  tbl_account_details on tbl_account_details.user_id= tbl_users.user_id join tbl_leave_category on tbl_leave_category.leave_category_id=tbl_leave_application.leave_category_id where tbl_leave_application.company_id=$company_id")->result();
    }
    public function fetchUserForApplyLeave()
    {
        return $this->db->get('tbl_users')->result();

    }
    public function fetchLeaveCategoryData($designation_id)
    {
        $this->db->where('leave_cat_desig_id', $designation_id);
        return $this->db->get('tbl_leave_category')->result();

    }

    public function fetchMyLeaveDetails($formyleave)
    {

        $this->db->join('tbl_users', 'tbl_users.user_id=tbl_leave_application.user_id');
        $this->db->join('tbl_account_details', 'tbl_account_details.user_id=tbl_leave_application.user_id');
        $this->db->join('tbl_leave_category', 'tbl_leave_category.leave_category_id=tbl_leave_application.leave_category_id');
        $this->db->where('tbl_leave_application.user_id', $formyleave);
        return $this->db->get('tbl_leave_application')->result();
        // return $this->db->query("om tbl_leave_application join tbl_users on tbl_users.user_id=tbl_leave_application.user_id  join  tbl_account_details on tbl_account_details.user_id= tbl_users.user_id join tbl_leave_category on tbl_leave_category.leave_category_id=tbl_leave_application.leave_category_id where tbl_leave_application.user_id=$formyleave")->result();
    }
    public function fetchleaveDataByIdToModal($leave_id)
    {
        return $this->db->query("select tbl_leave_application.*,tbl_users.*,tbl_leave_category.*,tbl_account_details.*,tbl_leave_application.user_id as users,tbl_leave_application.leave_category_id as leavecatid from tbl_leave_application join tbl_users on tbl_users.user_id=tbl_leave_application.user_id  join  tbl_account_details on tbl_account_details.user_id= tbl_users.user_id join tbl_leave_category on tbl_leave_category.leave_category_id=tbl_leave_application.leave_category_id where tbl_leave_application.leave_application_id='$leave_id'")->result();
    }
    public function DeletePendingLeave($data)
    {
        $this->db->where($data);
        $results = $this->db->delete('tbl_leave_application');
        if ($results) {
            return 1;
        } else {
            return 0;
        }
    }
    public function DeleteMyLeave($data)
    {
        $this->db->where($data);
        $results = $this->db->delete('tbl_leave_application');
        if ($results) {
            return 1;
        } else {
            return 0;
        }
    }
    public function DeleteAllLeave($data)
    {
        $this->db->where($data);
        $results = $this->db->delete('tbl_leave_application');
        if ($results) {
            return 1;
        } else {
            return 0;
        }
    }

    public function addYearlyLeaveData($data, $designation_id)
    {
        $this->db->where('designation_id', $designation_id);
        $re = $this->db->get('tbl_leave_yearly')->result();
        if (count($re) == 0) {
            $results = $this->db->insert('tbl_leave_yearly', $data);
            if ($results) {
                return 1;
            } else {
                return 0;
            }

        } else {
            return 2;
        }
    }
    public function addleaveCategoryData($data)
    {

        if ($this->db->insert('tbl_leave_category', $data)) {
            return 1;

        } else {
            return 0;
        }
    }
    public function addLeavePolicyData($data)
    {

        if ($this->db->insert('tbl_leave_policy', $data)) {
            return 1;

        } else {
            return 0;
        }
    }

    public function fetchDesignationforYearlyLeave()
    {
        return $this->db->get('tbl_designations')->result();

    }

    public function fetchDepartmentforLeave()
    {
        return $this->db->get('tbl_departments')->result();

    }
    public function fetchDesignationforLeave()
    {
        return $this->db->get('tbl_designations')->result();
        // print_r($re);
        // die;

    }
    public function fetchtotalLeaveById($desig_id)
    {
        $this->db->where('designation_id', $desig_id);
        return $this->db->get('tbl_leave_yearly')->result();

    }
    public function fetchDesignationforLeaveById($dept_id)
    {
        $this->db->where('departments_id', $dept_id);
        return $this->db->get('tbl_designations')->result();

    }
    public function fetchLeaveYearlyData()
    {
        $company_id=$this->session->userdata('logged_user')[0]->company_id;
        $company_id=$company_id?$company_id:'""';
        $WHERE = array('tbl_leave_yearly.company_id' => $company_id);
        $this->db->select('*')
            ->where($WHERE)
            ->from('tbl_leave_yearly')
            ->join('tbl_designations', 'tbl_designations.designations_id = tbl_leave_yearly.designation_id');
            
        return $this->db->get()->result();
        // return $this->db->get('tbl_leave_yearly')->result();

    }
    public function changeleavestatusByid($leave_id, $data)
    {
        $this->db->where('leave_application_id', $leave_id);
        $results = $this->db->update('tbl_leave_application', $data);

        if ($results) {
            return 1;
        } else {
            return 0;
        }
    }
    public function rejectleavestatusByid($leave_id, $data)
    {
        $this->db->where('leave_application_id', $leave_id);
        $results = $this->db->update('tbl_leave_application', $data);

        if ($results) {
            return 1;
        } else {
            return 0;
        }
    }

    public function Deleteyearlyleave($data)
    {
        $this->db->where($data);
        $results = $this->db->delete('tbl_leave_yearly');
        if ($results) {
            return 1;
        } else {
            return 0;
        }
    }
    public function EditYearlyleave($id)
    {
        $this->db->select('*')
            ->from('tbl_leave_yearly')
            ->join('tbl_designations', 'tbl_designations.designations_id = tbl_leave_yearly.designation_id')
            ->where('tbl_leave_yearly.year_leaveid', $id);
        return $this->db->get()->result();
        // return $this->db->get('tbl_leave_yearly')->result();

    }
    public function UpdateYearlyLeaveData($data, $leaveyearid)
    {
        $this->db->where('year_leaveid', $leaveyearid);
        $results = $this->db->update('tbl_leave_yearly', $data);

        if ($results) {
            return 1;
        } else {
            return 0;
        }
    }
    public function checkAvailableleave($desig_id)
    {
        $this->db->select('lpolicy_days')->from('tbl_leave_policy');
        $this->db->where('lpolicy_designation_id', $desig_id);
        $query = $this->db->get();
        $days_array = array();
        foreach ($query->result_array() as $row) {
            $days_array[] = intval($row['lpolicy_days']); //can it be float also?
        }
        return $total = array_sum($days_array);

    }
    public function checkAvailableleaveforParticularUser($desig_id)
    {
        return $this->db->query("select designation_id,DATEDIFF(max(leave_end_date),min(leave_start_date))+1 as checkdata from tbl_leave_application where tbl_leave_application.application_status='2' group by tbl_leave_application.designation_id='$desig_id'")->result();

    }
    public function CheckPermission($designation_id)
    {
        $this->db->where('designations_id', $designation_id);
        return $this->db->get('tbl_designations')->result();
    }
    public function getMyApprovedLeaveDetails($leave_id)
    {
        $condition = array("user_id" => $leave_id, "application_status" => 2);
        return $this->db->select('leave_category_id,leave_start_date as start_, leave_end_date as end_')->where($condition)->get('tbl_leave_application')->result_array();
    }
    public function getMyApprovedLeaveDetailsCategoryWise($cat_id)
    {
        $usersdetail = $this->session->logged_user;
        $designation_id = $usersdetail[0]->designations_id;
        $formyleave = $usersdetail[0]->user_id;
        $condition = array("user_id" => $formyleave, "application_status" => 2, "leave_category_id" => $cat_id);
        return $this->db->select('leave_category_id,leave_start_date as start_, leave_end_date as end_')->where($condition)->get('tbl_leave_application')->result_array();

    }
    public function getLeaveCategory($designation_id)
    {
        $this->db->where('leave_cat_desig_id', $designation_id);
        return $this->db->get('tbl_leave_category')->result_array();

    }
    public function getLeaveDetailsForCategoryWise($cat_id)
    {
        $condition = array("leave_category_id" => $cat_id);
        return $this->db->where($condition)->get('tbl_leave_category')->result_array();
    }
    public function LeaveDataInsertInTbl_Attendance($appid)
    {
        $this->db->where('leave_application_id', $appid);
        $dataaa = $this->db->get('tbl_leave_application')->result();

        $leaveid = $dataaa[0]->leave_application_id;
        $userid = $dataaa[0]->user_id;
        $strtdate = $dataaa[0]->leave_start_date;
        $enddate = $dataaa[0]->leave_end_date;

        $begin = new DateTime($strtdate);
        $end = new DateTime($enddate);
        $dates_array = array();

        $daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);

        foreach ($daterange as $date) {
            $dates_array[] = $date->format("Y-m-d");
        }

        foreach ($dates_array as $newlist) {
            $data = array(
                'user_id' => $userid,
                'leave_application_id' => $leaveid,
                'date_in' => $newlist,
                'date_out' => $newlist,
                'attendance_status' => 3);
            $this->db->insert('tbl_attendance', $data);

            // print_r($data);
        }
    }
}
