<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payroll extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Payroll_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        echo 'Payroll';
    }
    public function paySlip($salary_payment_id)
    {$basicSalary = 0;
        $salDeduct = 0;
        $time2 = "00:00";
        $salry_overtime = '';

        $paysl['salary_deduction'] = $this->Payroll_model->fetch_sal_payment_deduction($salary_payment_id);
        foreach ($paysl['salary_deduction'] as $salryDeduction) {
            $salDeduct = $salryDeduction->salary_payment_deduction_value + $salDeduct;
        }
        $paysl['payslipdata'] = $this->Payroll_model->generate_paySlip($salary_payment_id);
        $paysl['salary_details'] = $this->Payroll_model->fetch_salary_payment_details($salary_payment_id);
        foreach ($paysl['salary_details'] as $salryDetail) {
            if ($salryDetail->salary_payment_details_label == 'overtime_salary') {
                $salry_overtime = $salryDetail->salary_payment_details_value;
            }
            if ($salryDetail->salary_payment_details_label == 'Basic Salary') {
                $basicSalary = $salryDetail->salary_payment_details_value;
            }
        }
        $user_id = $paysl['payslipdata']->user_id;
        $paysl['overtime_details'] = $this->Payroll_model->overTime($user_id);
        // print_r($paysl['overtime_details']);
        // die;
        foreach ($paysl['overtime_details'] as $overtime) {
            $selectedTime = $overtime->overtime_hours;
            $secs = strtotime($time2) - strtotime("00:00");
            $time2 = date("H:i", strtotime($selectedTime) + $secs);
        }

        $timeexp = explode(":", $time2);
        $thour = $timeexp[0] * $salry_overtime;
        $tminute = ($salry_overtime / 60) * $timeexp[1];
        $totalOverTimeSalary = $thour + $tminute;
        $grosSal = $basicSalary + $totalOverTimeSalary;
        $paidSalary = $grosSal - $salDeduct;
        $totalDetails = array('overtimeHour' => $time2, 'overTimeAmmount' => $totalOverTimeSalary, 'grossSalary' => $grosSal, 'totalDeduction' => $salDeduct, 'netSalary' => $paidSalary, 'paidAmount' => $paidSalary);

        $paysl['salOvertime'] = $totalDetails;
        $paysl['salary_allowance'] = $this->Payroll_model->fetch_salary_allowance_details($salary_payment_id);

        $this->load->view('layout/header');
        $this->load->view("pages/payslip", $paysl);
        $this->load->view("layout/footer");
    }

    public function salaryTemplate()
    {
        $session = $this->session->userdata('logged_user');
        $designation_id = $session[0]->designations_id;
        $data['Assign_permission'] = $this->Payroll_model->CheckPermission($designation_id);
        $user_id = $session[0]->user_id;
        $data['UsersPermission'] = $this->User_model->CheckUserPermission($user_id);
        $data['templates'] = $this->Payroll_model->fetch_templates();
        $this->load->view('layout/header');
        $this->load->view("pages/salary_template", $data);
        $this->load->view("layout/footer");
    }

    public function edit_template()
    {
        $id = $this->uri->segment(3);
        $data['templates'] = $this->Payroll_model->fetch_templates();
        $data['template_details'] = $this->Payroll_model->fetch_template_by_id($id);
        $data['allowance'] = $this->Payroll_model->fetch_allowance_by_id($id);
        $data['deduction'] = $this->Payroll_model->fetch_deduction_by_id($id);
        $this->load->view('layout/header');
        $this->load->view("pages/edit_template", $data);
        $this->load->view("layout/footer");
    }

    public function delete_template()
    {
        $template_id = $_POST['template_id'];
        $delete = $this->Payroll_model->delete_template($template_id);
        if ($delete) {
            die(json_encode(array('status' => '1', 'msg' => 'deleted')));
        } else {
            die(json_encode(array('status' => '0', 'msg' => 'failed')));
        }
    }

    public function fetch_template()
    {
        $id = $_POST['template_id'];
        $template_details = $this->Payroll_model->fetch_template_by_id($id);
        $allowance = $this->Payroll_model->fetch_allowance_by_id($id);
        $deduction = $this->Payroll_model->fetch_deduction_by_id($id);
        die(json_encode(array("template_details" => $template_details, "allowance" => $allowance, "deduction" => $deduction)));
    }

    public function hourlyTemplate()
    {
        $session = $this->session->userdata('logged_user');
        $designation_id = $session[0]->designations_id;
        $user_id = $session[0]->user_id;
        $data['UsersPermission'] = $this->User_model->CheckUserPermission($user_id);
        $data['Assign_permission'] = $this->Payroll_model->CheckPermission($designation_id);
        $data['templates'] = $this->Payroll_model->fetch_hourly_templates();
        $this->load->view('layout/header');
        $this->load->view("pages/hourly_rate", $data);
        $this->load->view("layout/footer");
    }

    public function update_template_ajax()
    {
        $update = $this->Payroll_model->update_hourly($_POST);
        if ($update) {
            echo "1";
        } else {
            echo "0";
        }
    }

    public function update_hourly_template()
    {
        $id = $this->uri->segment(3);
        $data['templates'] = $this->Payroll_model->fetch_hourly_templates();
        $data['templater'] = $this->Payroll_model->fetch_hourly_template_by_id($id);
        $this->load->view('layout/header');
        $this->load->view("pages/edit_hourly_rate", $data);
        $this->load->view("layout/footer");
    }

    public function manageSalary()
    {
        $data['departments'] = $this->Payroll_model->fetch_departments();
        $this->load->view('layout/header');
        $this->load->view("pages/manage_salary", $data);
        $this->load->view("layout/footer");
    }

    public function update_salary_details()
    {
        // die(json_encode($_POST));
        $user_id = $this->input->post('user_id', true);
        // print_r($user_id);
        // die;
        $hourly_status = $this->input->post('hourly_status', true);

        $hourly_rate_id = $this->input->post('hourly_rate_id', true);

        $monthly_status = $this->input->post('monthly_status', true);
        $salary_template_id = $this->input->post('salary_template_id', true);

        foreach ($user_id as $user) {
            //echo $user;
            $update_null = $this->Payroll_model->update_null_payroll($user);
        }

        foreach ($hourly_status as $hourly) {
            $hourly_user = $hourly;
            $user_index = array_search($hourly, $user_id);
            $hourly_index = $hourly_rate_id[$user_index];
            $update_hourly = $this->Payroll_model->update_hourly_model($hourly_user, $hourly_index);
        }
        # code...
        foreach ($monthly_status as $monthly) {
            $monthly_user = $monthly;
            $user_index = array_search($monthly, $user_id);
            $monthly_index = $salary_template_id[$user_index];
            $update_monthly = $this->Payroll_model->update_monthly_model($monthly_user, $monthly_index);
        }
        redirect('Payroll/empSalary');
    }

    public function fetch_department_data()
    {
        $dept_id = $this->uri->segment(3);
        $data['department'] = $this->Payroll_model->fetch_departments_data($dept_id);
        $data['hourly_grade'] = $this->Payroll_model->fetch_hourly_templates();
        $data['monthly_grade'] = $this->Payroll_model->fetch_templates();
        $data['departments'] = $this->Payroll_model->fetch_departments();
        $this->load->view('layout/header');
        $this->load->view("pages/manage_salary_num", $data);
        $this->load->view("layout/footer");
        //die(json_encode($data['department']));
    }

    public function empSalary()
    {
        $session = $this->session->userdata('logged_user');
        $designation_id = $session[0]->designations_id;
        $user_id = $session[0]->user_id;
        $data['UsersPermission'] = $this->User_model->CheckUserPermission($user_id);
        $data['Assign_permission'] = $this->Payroll_model->CheckPermission($designation_id);
        $data['employee'] = $this->Payroll_model->get_emp_salary_list();
        $this->load->view('layout/header');
        $this->load->view("pages/emp_salary_list", $data);
        $this->load->view("layout/footer");
    }

    public function set_hourly_template()
    {
        $template = $this->Payroll_model->set_hourly_template($_POST);
        if ($template) {
            echo "1";
        } else {
            echo "0";
        }
    }

    public function delete_payroll()
    {
        $id = $_POST['payroll_id'];
        $deleter = $this->Payroll_model->delete_payroll($id);
        if ($deleter) {
            echo "1";
        } else {
            echo "0";
        }
    }

    public function add_overtime()
    {
        $template = $this->Payroll_model->add_overtime($_POST);
        if ($template) {
            echo "1";
        } else {
            echo "0";
        }
    }

    public function add_account()
    {
        $result = $this->Payroll_model->add_account($_POST);
        if ($result) {
            die(json_encode(array('status' => '1', 'id' => $result, 'name' => $_POST['account_name'])));
        } else {
            die(json_encode(array('status' => '0', 'data' => 'no data')));
        }
    }

    public function update_template()
    {
        //print_r($_POST);
        $data = array('salary_grade' => $_POST['salary_grade'],
            'basic_salary' => $_POST['basic_salary'],
            'overtime_salary' => $_POST['overtime_salary']);
        $update_template = $this->Payroll_model->update_template($data, $_POST['template_id']);
        $deleter = $this->Payroll_model->delete_allowances_deductions($_POST['template_id']);
        $allowance_label = explode(",", $_POST['allowance_label']);
        $allowance_value = explode(",", $_POST['allowance_value']);
        $i = 0;
        foreach ($allowance_label as $allowance) {
            if ($allowance_value[$i] != 0) {
                $new_data = array();
                $new_data = array('salary_template_id' => $_POST['template_id'],
                    'allowance_label' => $allowance,
                    'allowance_value' => $allowance_value[$i]);
                $allowance_insert = $this->Payroll_model->set_template_allowance($new_data);
            }
            $i++;
        }
        $deduction_label = explode(",", $_POST['deduction_label']);
        $deduction_value = explode(",", $_POST['deduction_value']);
        $z = 0;
        foreach ($deduction_label as $deduction) {
            if ($deduction_value[$z] != 0) {
                $new_data = array();
                $new_data = array('salary_template_id' => $_POST['template_id'],
                    'deduction_label' => $deduction,
                    'deduction_value' => $deduction_value[$z]);
                $deduction_insert = $this->Payroll_model->set_template_deduction($new_data);
            }
            $z++;
        }
        echo "1";
    }

    public function set_template()
    {
        $data = array(
            'salary_grade' => $_POST['salary_grade'],
            'company_id' => $_POST['company_id'],
            'basic_salary' => $_POST['basic_salary'],
            'overtime_salary' => $_POST['overtime_salary']);
        $template_id = $this->Payroll_model->set_template($data);
        $allowance_label = explode(",", $_POST['allowance_label']);
        $allowance_value = explode(",", $_POST['allowance_value']);
        $i = 0;
        foreach ($allowance_label as $allowance) {
            if ($allowance_value[$i] != 0) {
                $new_data = array();
                $new_data = array('salary_template_id' => $template_id,
                    'allowance_label' => $allowance,
                    'allowance_value' => $allowance_value[$i]);
                $allowance_insert = $this->Payroll_model->set_template_allowance($new_data);
            }
            $i++;
        }
        $deduction_label = explode(",", $_POST['deduction_label']);
        $deduction_value = explode(",", $_POST['deduction_value']);
        $z = 0;
        foreach ($deduction_label as $deduction) {
            if ($deduction_value[$z] != 0) {
                $new_data = array();
                $new_data = array('salary_template_id' => $template_id,
                    'deduction_label' => $deduction,
                    'deduction_value' => $deduction_value[$z]);
                $deduction_insert = $this->Payroll_model->set_template_deduction($new_data);
            }
            $z++;
        }
        die(json_encode(array('status' => '1', 'msg' => 'success')));
    }

    public function makePayment()
    {
        if (isset($_POST['dept_id']) && isset($_POST['sal_date'])) {
            $date = $_POST['sal_date'];
            $dept_id = $_POST['dept_id'];
            $department = $this->Payroll_model->fetch_departments_data($dept_id);
            $arr=[];
            foreach ($department as $dept) {
                $user_id = $dept->user;
                $check_payment_status = $this->Payroll_model->check_user_payment($user_id, $date);

                if (count($check_payment_status) > 0) {
                    $dept->salary_paid = "true";
                    $dept->search_date = $date;
                    $dept->salary_payment_id = $check_payment_status;
                } else {
                    $dept->salary_paid = "false";
                    $dept->search_date = $date;
                }
                $arr[] = $dept;
            }
            $data['table_data'] = $arr;
            $data['departments'] = $this->Payroll_model->fetch_departments();
            //print_r($data['table_data']);
            $this->load->view('layout/header');
            $this->load->view("pages/make_payment", $data);
            $this->load->view("layout/footer");
        } else {
            $data['table_data'] = array();
            $data['departments'] = $this->Payroll_model->fetch_departments();
            //print_r($data['table_data']);
            $this->load->view('layout/header');
            $this->load->view("pages/make_payment", $data);
            $this->load->view("layout/footer");
        }
    }

    public function make_payment_pay()
    {
        $date = $this->uri->segment(4);
        $user_id = $this->uri->segment(3);
        $departments_id = $this->uri->segment(5);
        $data = $this->make_payment_new($user_id, $departments_id, $date);
        $this->load->view('layout/header');
        $this->load->view("pages/make_payment_history.php", $data);
        $this->load->view("layout/footer");
    }

    public function make_payment_new($user_id = null, $departments_id = null, $payment_month = null)
    {
        $data['title'] = "Make Payment";
// retrive all data from department table
        $data['all_department_info'] = $this->db->get('tbl_departments')->result();
        if ($user_id != 0 && !empty($payment_month)) {
// check payment history by employee id
            $check_existing_payment = $this->db->where('user_id', $user_id)->get('tbl_salary_payment')->result();

            $data['user_id'] = $user_id;
            //$data['staff_details'] = get_staff_details($user_id);
            $total_slary_amount = 0;
            if (!empty($check_existing_payment)) {
                foreach ($check_existing_payment as $key => $v_paymented_id) {
                    $salary_payment_id = $v_paymented_id->salary_payment_id;
                    $data['emp_salary_info'] = $this->Payroll_model->get_salary_payment_info($salary_payment_id);
                    $data['salary_payment_info'][] = $this->Payroll_model->get_salary_payment_info($salary_payment_id, true);

                    $this->Payroll_model->_table_name = "tbl_salary_payment_details"; // table name
                    $this->Payroll_model->_order_by = "salary_payment_id"; // $id
                    $salary_payment_history = $this->db->where('salary_payment_id', $salary_payment_id)->get('tbl_salary_payment_details')->result();
                    if (!empty($salary_payment_history)) {
                        foreach ($salary_payment_history as $v_payment_history) {
                            if (is_numeric($v_payment_history->salary_payment_details_value)) {
                                if ($v_payment_history->salary_payment_details_label == 'overtime_salary') {
                                    $rate = $v_payment_history->salary_payment_details_value;
                                } elseif ($v_payment_history->salary_payment_details_label == 'hourly_rates') {
                                    $rate = $v_payment_history->salary_payment_details_value;
                                }
                                $total_slary_amount += $v_payment_history->salary_payment_details_value;
                            }
                        }
                    }
                    $salary_allowance_info = $this->db->where('salary_payment_id', $salary_payment_id)->get('tbl_salary_payment_allowance')->result();
                    $total_allowance = 0;
                    if (!empty($salary_allowance_info)) {
                        foreach ($salary_allowance_info as $v_salary_allowance_info) {
                            $total_allowance += $v_salary_allowance_info->salary_payment_allowance_value;
                        }
                    }
                    if (!empty($rate)) {
                        $rate = $rate;
                    } else {
                        $rate = 0;
                    }

                    $data['total_paid_amount'][] = $total_slary_amount + $total_allowance - $rate;
                    $salary_deduction_info = $this->db->where('salary_payment_id', $salary_payment_id)->get('tbl_salary_payment_deduction')->result();
                    $total_deduction = 0;
                    if (!empty($salary_deduction_info)) {
                        foreach ($salary_deduction_info as $v_salary_deduction_info) {
                            $total_deduction += $v_salary_deduction_info->salary_payment_deduction_value;
                        }
                    }
                    $data['total_deduction'][] = $total_deduction;
                }
            }
            $data['payment_month'] = $payment_month;
            $data['payment_flag'] = 1;
            $data['departments_id'] = $departments_id;
// get employee info by employee id
            $data['employee_info'] = $this->Payroll_model->get_emp_salary_list($user_id);
// get all allowance info by salary template id
            if (!empty($data['employee_info']->salary_template_id)) {
                $data['allowance_info'] = $this->get_allowance_info_by_id($data['employee_info']->salary_template_id);
// get all deduction info by salary template id
                $data['deduction_info'] = $this->get_deduction_info_by_id($data['employee_info']->salary_template_id);
// get all overtime info by month and employee id
                $data['overtime_info'] = $this->get_overtime_info_by_id($user_id, $data['payment_month']);
            }
// get all advance salary info by month and employee id
            $data['advance_salary'] = $this->get_advance_salary_info_by_id($user_id, $data['payment_month']);
// get award info by employee id and payment month
            // get award info by employee id and payment date
            $this->Payroll_model->_table_name = 'tbl_employee_award';
            $this->Payroll_model->_order_by = 'user_id';
            //$data['award_info'] = $this->Payroll_model->get_by(array('user_id' => $user_id, 'award_date' => $data['payment_month']), FALSE);
            // check hourly payment info
            // if exist count total hours in a month
            // get hourly payment info by id
            if (!empty($data['employee_info']->hourly_rate_id)) {
                $data['total_hours'] = $this->get_total_hours_in_month($user_id, $data['payment_month']);
            }
            if (!empty($data['total_hours'])) {
                if ($data['total_hours'] == 0 && $data['total_minutes'] == 0) {
                    $type = 'error';
                    $message = '<strong>' . $data['employee_info']->fullname . ' ' . '</strong>' . lang('working_hour_empty');
                    set_message($type, $message);
                    redirect('admin/payroll/make_payment/' . '0' . '/' . $data['employee_info']->departments_id . '/' . $data['payment_month']);
                }
            }
        } else {
            $flag = $this->input->post('flag', true);
            if (!empty($flag) || !empty($departments_id)) { // check employee id is empty or not
                $data['flag'] = 1;
                if (!empty($departments_id)) {
                    $data['departments_id'] = $departments_id;
                } else {
                    $data['departments_id'] = $this->input->post('departments_id', true);
                }
                if (!empty($payment_month)) {
                    $data['payment_month'] = $payment_month;
                } else {
                    $data['payment_month'] = $this->input->post('payment_month', true);
                }
// get all designation info by Department id
                $designation_info = $this->db->where('departments_id', $data['departments_id'])->get('tbl_designations')->result();
                if (!empty($designation_info)) {
                    foreach ($designation_info as $v_designatio) {
                        $data['employee_info'][] = $this->Payroll_model->get_emp_salary_list('', $v_designatio->designations_id);
                        $employee_info = $this->Payroll_model->get_emp_salary_list('', $v_designatio->designations_id);
                        foreach ($employee_info as $value) {

// get all allowance info by salary template id
                            if (!empty($value->salary_template_id)) {
                                $data['allowance_info'][$value->user_id] = $this->get_allowance_info_by_id($value->salary_template_id);
// get all deduction info by salary template id
                                $data['deduction_info'][$value->user_id] = $this->get_deduction_info_by_id($value->salary_template_id);
// get all overtime info by month and employee id
                                $data['overtime_info'][$value->user_id] = $this->get_overtime_info_by_id($value->user_id, $data['payment_month']);
                            }
// get all advance salary info by month and employee id
                            $data['advance_salary'][$value->user_id] = $this->get_advance_salary_info_by_id($value->user_id, $data['payment_month']);
// get award info by employee id and payment month
                            $data['award_info'][$value->user_id] = $this->get_award_info_by_id($value->user_id, $data['payment_month']);
// check hourly payment info
                            // if exist count total hours in a month
                            // get hourly payment info by id
                            if (!empty($value->hourly_rate_id)) {
                                $data['total_hours'][$value->user_id] = $this->get_total_hours_in_month($value->user_id, $data['payment_month']);
                            }
                        }
                    }
                }
            }
        }
        return $data;
        //$data['subview'] = $this->load->view('admin/payroll/make_payment', $data, TRUE);
        //$this->load->view('admin/_layout_main', $data);
    }

    public function get_payment($id = null)
    {
// input data
        $data = $this->Payroll_model->array_from_post(array('user_id', 'payment_month', 'fine_deduction', 'payment_type', 'comments'));
//        // save into tbl employee paymenet
        $this->Payroll_model->_table_name = "tbl_salary_payment"; // table name
        $this->Payroll_model->_primary_key = "salary_payment_id"; // $id
        if (!empty($id)) {
            $details_data['salary_payment_id'] = $id;
            $this->Payroll_model->save($data, $id);
        } else {
            $data['deduct_from'] = 0;
            $details_data['salary_payment_id'] = $this->Payroll_model->save($data);
        }
// get employee info by employee id
        $employee_info = $this->Payroll_model->get_emp_salary_list($data['user_id']);

// get all allowance info by salary template id
        if (!empty($employee_info->salary_template_id)) {
            $salary_payment_details_label[] = 'salary_grade';
            $salary_payment_details_value[] = $employee_info->salary_grade;

            $salary_payment_details_label[] = 'basic_salary';
            $salary_payment_details_value[] = $employee_info->basic_salary;
            if (!empty($employee_info->overtime_salary)) {
                $salary_payment_details_label[] = 'overtime_salary';
                $salary_payment_details_value[] = $employee_info->overtime_salary;
            }
// ************ Save all allwance info **********
            $this->Payroll_model->_table_name = 'tbl_salary_allowance';
            $this->Payroll_model->_order_by = 'salary_template_id';
            $allowance_info = $this->Payroll_model->get_by(array('salary_template_id' => $employee_info->salary_template_id), false);
            if (!empty($allowance_info)) {
                foreach ($allowance_info as $v_allowance_info) {
                    $aldata['salary_payment_id'] = $details_data['salary_payment_id'];
                    $aldata['salary_payment_allowance_label'] = $v_allowance_info->allowance_label;
                    $aldata['salary_payment_allowance_value'] = $v_allowance_info->allowance_value;

//  save into tbl employee paymenet
                    $this->Payroll_model->_table_name = "tbl_salary_payment_allowance"; // table name
                    $this->Payroll_model->_primary_key = "salary_payment_allowance_id"; // $id
                    $this->Payroll_model->save($aldata);
                }
            }
// get all deduction info by salary template id
            // ************ Save all deduction info **********
            $this->Payroll_model->_table_name = 'tbl_salary_deduction';
            $this->Payroll_model->_order_by = 'salary_template_id';
            $deduction_info = $this->Payroll_model->get_by(array('salary_template_id' => $employee_info->salary_template_id), false);
            if (!empty($deduction_info)) {
                foreach ($deduction_info as $v_deduction_info) {
                    $salary_payment_deduction_label[] = $v_deduction_info->deduction_label;
                    $salary_payment_deduction_value[] = $v_deduction_info->deduction_value;
                }
            }
// ************ Save all Overtime info **********
            // get all overtime info by month and employee id
            $overtime_info = $this->get_overtime_info_by_id($data['user_id'], $data['payment_month']);
            $salary_payment_details_label[] = 'overtime_hour';
            $salary_payment_details_value[] = $overtime_info['overtime_hours'] . ':' . $overtime_info['overtime_minutes'];

            $overtime_hour = $overtime_info['overtime_hours'];
            $overtime_minutes = $overtime_info['overtime_minutes'];
            if ($overtime_hour > 0) {
                $ov_hours_ammount = $overtime_minutes * $employee_info->overtime_salary;
            } else {
                $ov_hours_ammount = 0;
            }
            if ($overtime_minutes > 0) {
                $ov_amount = round($employee_info->overtime_salary / 60, 2);
                $ov_minutes_ammount = $overtime_minutes * $ov_amount;
            } else {
                $ov_minutes_ammount = 0;
            }
            $overtime_amount = $ov_hours_ammount + $ov_minutes_ammount;
            $salary_payment_details_label[] = 'overtime_amount';
            $salary_payment_details_value[] = $overtime_amount;
        }
// ************ Save all Advance Salary info **********
        // get all advance salary info by month and employee id
        $advance_salary = $this->get_advance_salary_info_by_id($data['user_id'], $data['payment_month']);
        if ($advance_salary['advance_amount']) {
            $salary_payment_deduction_label[] = 'advance_amount';
            $salary_payment_deduction_value[] = $advance_salary['advance_amount'];
            $advance_salary_info = $this->Payroll_model->check_by(array('user_id' => $data['user_id'], 'deduct_month' => $data['payment_month']), 'tbl_advance_salary');
            if (!empty($advance_salary_info)) {
                $this->Payroll_model->_table_name = "tbl_advance_salary"; // table name
                $this->Payroll_model->_primary_key = "advance_salary_id"; // $id
                $advnce_slry_date['status'] = 3;
                $this->Payroll_model->save($advnce_slry_date, $advance_salary_info->advance_salary_id);
            }
        }
// ************ Save all Hourly info **********
        // check hourly payment info
        // if exist count total hours in a month
        // get hourly payment info by id
        if (!empty($employee_info->hourly_rate_id)) {
            $total_hours = $this->get_total_hours_in_month($data['user_id'], $data['payment_month']);
            $salary_payment_details_label[] = 'hourly_grade';
            $salary_payment_details_value[] = $employee_info->hourly_grade;

            $salary_payment_details_label[] = 'hourly_rates';
            $salary_payment_details_value[] = $employee_info->hourly_rate;

            $salary_payment_details_label[] = 'total_hour';
            $salary_payment_details_value[] = $total_hours['total_hours'] . ':' . $total_hours['total_minutes'];

            $total_hour = $total_hours['total_hours'];
            $total_minutes = $total_hours['total_minutes'];
            if ($total_hour > 0) {
                $hours_ammount = $total_hour * $employee_info->hourly_rate;
            } else {
                $hours_ammount = 0;
            }
            if ($total_minutes > 0) {
                $amount = round($employee_info->hourly_rate / 60, 2);
                $minutes_ammount = $total_minutes * $amount;
            } else {
                $minutes_ammount = 0;
            }
            $total_hours_amount = $hours_ammount + $minutes_ammount;
            $salary_payment_details_label[] = 'amount';
            $salary_payment_details_value[] = $total_hours_amount;
        }
// get award info by employee id and payment date
        $this->Payroll_model->_table_name = 'tbl_employee_award';
        $this->Payroll_model->_order_by = 'user_id';
        $award_info = $this->Payroll_model->get_by(array('user_id' => $data['user_id'], 'award_date' => $data['payment_month']), false);
        if (!empty($award_info)) {
            foreach ($award_info as $v_award_info) {
                $salary_payment_details_label[] = 'award_name' . '
<small> ( ' . $v_award_info->award_name . ' )</small>';
                $salary_payment_details_value[] = $v_award_info->award_amount;
            }
        }
        if (!empty($salary_payment_details_label)) {
            foreach ($salary_payment_details_label as $key => $payment_label) {
                $details_data['salary_payment_details_label'] = $payment_label;
                $details_data['salary_payment_details_value'] = $salary_payment_details_value[$key];

//  save into tbl employee paymenet
                $this->Payroll_model->_table_name = "tbl_salary_payment_details"; // table name
                $this->Payroll_model->_primary_key = "salary_payment_details_id"; // $id
                $this->Payroll_model->save($details_data);
            }
        }
        if (!empty($salary_payment_deduction_label)) {
            foreach ($salary_payment_deduction_label as $dkey => $deduction_label) {
                $ddetails_data['salary_payment_id'] = $details_data['salary_payment_id'];
                $ddetails_data['salary_payment_deduction_label'] = $deduction_label;
                $ddetails_data['salary_payment_deduction_value'] = $salary_payment_deduction_value[$dkey];

//  save into tbl employee paymenet
                $this->Payroll_model->_table_name = "tbl_salary_payment_deduction"; // table name
                $this->Payroll_model->_primary_key = "salary_payment_deduction_id"; // $id
                $this->Payroll_model->save($ddetails_data);
            }
        }
        if (!empty($employee_info->hourly_rate_id) || !empty($employee_info->salary_template_id)) {

            $deduct_from_account = $this->input->post('deduct_from_account', true);
            if (!empty($deduct_from_account)) {
                $account_id = $this->input->post('account_id', true);
                if (empty($account_id)) {
                    $account_id = config_item('default_account');
                }
                if (!empty($account_id)) {
                    $reference = lang('salary_month') . ' : ' . date('F Y', strtotime($data['payment_month'])) . ' ' . lang('salary_payment') . ' ' . lang('for') . ' ' . $employee_info->fullname . ' ' . lang('and') . ' ' . lang('comments') . ': ' . $data['comments'];
// save into tbl_transaction
                    $tr_data = array(
                        'name' => lang('salary_payment') . ' ' . lang('for') . ' ' . $employee_info->fullname,
                        'type' => 'Expense',
                        'amount' => $this->input->post('payment_amount', true),
                        'debit' => $this->input->post('payment_amount', true),
                        'date' => date('Y-m-d'),
                        'paid_by' => '0',
                        'payment_methods_id' => $this->input->post('payment_type', true),
                        'reference' => lang('salary_month') . ' ' . $this->input->post('payment_month'),
                        'notes' => lang('this_expense_from_salary_payment', $reference),
                        'permission' => 'all',
                    );
                    $account_info = $this->Payroll_model->check_by(array('account_id' => $account_id), 'tbl_accounts');
                    if (!empty($account_info)) {
                        $ac_data['balance'] = $account_info->balance - $tr_data['amount'];
                        $this->Payroll_model->_table_name = "tbl_accounts"; //table name
                        $this->Payroll_model->_primary_key = "account_id";
                        $this->Payroll_model->save($ac_data, $account_info->account_id);

                        $aaccount_info = $this->Payroll_model->check_by(array('account_id' => $account_id), 'tbl_accounts');
                        $tr_data['total_balance'] = $aaccount_info->balance;
                        $tr_data['account_id'] = $account_id;
// save into tbl_transaction
                        $this->Payroll_model->_table_name = "tbl_transactions"; //table name
                        $this->Payroll_model->_primary_key = "transactions_id";
                        $return_id = $this->Payroll_model->save($tr_data);

// save into activities
                        //                         $activities = array(
                        //                             'user' => $this->session->userdata('user_id'),
                        //                             'module' => 'transactions',
                        //                             'module_field_id' => $return_id,
                        //                             'activity' => 'activity_new_expense',
                        //                             'icon' => 'fa-building-o',
                        //                             'link' => 'admin/transactions/view_details/' . $return_id,
                        //                             'value1' => $account_info->account_name,
                        //                             'value2' => $this->input->post('payment_amount', TRUE),
                        //                         );
                        // // Update into tbl_project
                        //                         $this->Payroll_model->_table_name = "tbl_activities"; //table name
                        //                         $this->Payroll_model->_primary_key = "activities_id";
                        //                         $this->Payroll_model->save($activities);

                        $this->Payroll_model->_table_name = "tbl_salary_payment"; // table name
                        $this->Payroll_model->_primary_key = "salary_payment_id"; // $id
                        $deduct_account['deduct_from'] = $account_id;
                        $this->Payroll_model->save($deduct_account, $details_data['salary_payment_id']);
                    }
                }
            }
// save into activities
            //             $activities = array(
            //                 'user' => $this->session->userdata('user_id'),
            //                 'module' => 'payroll',
            //                 'module_field_id' => $id,
            //                 'activity' => 'activity_make_payment',
            //                 'icon' => 'fa-list-ul',
            //                 'value1' => $employee_info->fullname,
            //                 'value2' => date('F Y', strtotime($data['payment_month'])),
            //             );
            // // Update into tbl_project
            //             $this->Payroll_model->_table_name = "tbl_activities"; //table name
            //             $this->Payroll_model->_primary_key = "activities_id";
            //             $this->Payroll_model->save($activities);
        }

        echo $type = 'success';
        // $message = lang('payment_information_update');
        // set_message($type, $message);
        // redirect('admin/payroll/make_payment/0/' . $employee_info->departments_id . '/' . $data['payment_month']);
    }

    public function get_total_hours_in_month($user_id, $payment_month)
    {

        $start_date = $payment_month . '-' . '01';
        $end_date = $payment_month . '-' . '31';
        $attendance_info = $this->Payroll_model->get_attendance_info_by_date($start_date, $end_date, $user_id); // get all report by start date and in date

        $total_hh = 0;
        $total_mm = 0;
        foreach ($attendance_info as $v_clock_time) {
// calculate the start timestamp
            $startdatetime = strtotime($v_clock_time->date_in . " " . $v_clock_time->clockin_time);
// calculate the end timestamp
            $enddatetime = strtotime($v_clock_time->date_out . " " . $v_clock_time->clockout_time);
// calulate the difference in seconds
            $difference = $enddatetime - $startdatetime;
            $years = abs(floor($difference / 31536000));
            $days = abs(floor(($difference - ($years * 31536000)) / 86400));
            $hours = abs(floor(($difference - ($years * 31536000) - ($days * 86400)) / 3600));
            $mins = abs(floor(($difference - ($years * 31536000) - ($days * 86400) - ($hours * 3600)) / 60)); #floor($difference / 60);
            $total_mm += $mins;
            $total_hh += $hours;
        }
        if ($total_mm > 59) {
            $total_hh += intval($total_mm / 60);
            $total_mm = intval($total_mm % 60);
        }
        $result['total_hours'] = $total_hh;
        $result['total_minutes'] = $total_mm;
        return $result;
    }

    public function get_allowance_info_by_id($salary_template_id)
    {
        $salary_allowance_info = $this->db->where('salary_template_id', $salary_template_id)->get('tbl_salary_allowance')->result();
        $total_allowance = 0;
        foreach ($salary_allowance_info as $v_allowance_info) {
            $total_allowance += $v_allowance_info->allowance_value;
        }
        return $total_allowance;
    }

    public function get_deduction_info_by_id($salary_template_id)
    {
        $salary_deduction_info = $this->db->where('salary_template_id', $salary_template_id)->get('tbl_salary_deduction')->result();
        $total_deduction = 0;
        foreach ($salary_deduction_info as $v_deduction_info) {
            $total_deduction += $v_deduction_info->deduction_value;
        }
        return $total_deduction;
    }

    public function get_overtime_info_by_id($user_id, $payment_month)
    {
        $start_date = $payment_month . '-' . '01';
        $end_date = $payment_month . '-' . '31';
        $part_data = array('start_date' => $start_date, 'end_date' => $end_date, 'user_id' => $user_id);
        $all_overtime_info = $this->Payroll_model->get_overtime_info($part_data);
        $hh = 0;
        $mm = 0;
        foreach ($all_overtime_info as $overtime_info) {
            $hh += $overtime_info->overtime_hours;
            $mm += date('i', strtotime($overtime_info->overtime_hours));
        }
        if ($hh > 1 && $hh < 10 || $mm > 1 && $mm < 10) {
            $total_mm = '0' . $mm;
            $total_hh = '0' . $hh;
        } else {
            $total_mm = $mm;
            $total_hh = $hh;
        }
        if ($total_mm > 59) {
            $total_hh += intval($total_mm / 60);
            $total_mm = intval($total_mm % 60);
        }
        $result['overtime_hours'] = $total_hh;
        $result['overtime_minutes'] = $total_mm;
        return $result;
    }

    public function get_advance_salary_info_by_id($user_id, $payment_month)
    {

        $advance_salary_info = $this->Payroll_model->get_advance_salary_info_by_date($payment_month, '', $user_id); // get all report by start date and in date
        $advance_amount = 0;
        foreach ($advance_salary_info as $v_advance_salary) {
            $advance_amount += $v_advance_salary->advance_amount;
        }
        $result['advance_amount'] = $advance_amount;
        return $result;

    }

    public function generatePaySlip()
    {
        if (isset($_POST['dept_id']) && isset($_POST['sal_date'])) {
            $date = $_POST['sal_date'];
            $dept_id = $_POST['dept_id'];
            $department = $this->Payroll_model->fetch_departments_data($dept_id);
            foreach ($department as $dept) {
                $user_id = $dept->user;
                $check_payment_status = $this->Payroll_model->check_user_payment($user_id, $date);
                if (count($check_payment_status) > 0) {
                    $dept->salary_paid = "true";
                    $dept->search_date = $date;
                } else {
                    $dept->salary_paid = "false";
                    $dept->search_date = $date;
                }
                $arr[] = $dept;
            }
            $data['table_data'] = $arr;
            $data['departments'] = $this->Payroll_model->fetch_departments();
            //print_r($data['table_data']);
            $this->load->view('layout/header');
            $this->load->view("pages/make_payment", $data);
            $this->load->view("layout/footer");
        } else {
            $data['table_data'] = array();
            $data['departments'] = $this->Payroll_model->fetch_departments();
            //print_r($data['table_data']);
            $this->load->view('layout/header');
            $this->load->view("pages/make_payment", $data);
            $this->load->view("layout/footer");
        }
    }
    public function payrollSummary()
    {
        $this->load->view('layout/header');
        $this->load->view("pages/payroll_summary");
        $this->load->view("layout/footer");
    }
    public function advanceSalary($details = null)
    {
        // list view
        if (!empty($details)) {
            $data['active'] = 1;
            $data['switch'] = 1;
        }
        $data['title'] = "Advance Salary";
// active check with current month
        $data['current_month'] = date('m');
        if ($this->input->post('year', true)) { // if input year
            $data['year'] = $this->input->post('year', true);
        } else { // else current year
            $data['year'] = date('Y'); // get current year
        }
// get all expense list by year and month
        $data['advance_salary_info'] = $this->get_advance_salary_info($data['year']);
        $data['all_employee'] = $this->Payroll_model->get_all_employee();

        // $data['subview'] = $this->load->view('admin/payroll/advance_salary', $data, TRUE);
        // $this->load->view('admin/_layout_main', $data);
        // $data['fetchAdvSalary']=$this->Payroll_model->fetch_AdvSalary();
        $this->load->view('layout/header');
        $this->load->view("pages/advance_salary", $data);
        $this->load->view("layout/footer");

    }

    public function save_advance_salary($id = null)
    {
        $session = $this->session->userdata('logged_user');
        $data['advance_amount'] = $this->input->post('advance_amount', true);
        $data['company_id']=$this->input->post('company_id');
//receive form input by post
        $user_id = $this->input->post('user_id', true);
        if (!empty($user_id)) {
            $data['user_id'] = $user_id;
        } else {
            $session = $this->session->userdata('logged_user');
            $data['user_id'] = $session[0]->user_id;
        }

        $this->load->model('global_model');
        $basic_salary = $this->global_model->get_advance_amount($data['user_id']);
        if (!empty($basic_salary)) {
            if ($basic_salary < $data['advance_amount']) {
// messages for user
                $type = "error";
                echo $message = "Exceeded basic Salary";
                die;
                // set_message($type, $message);
                // redirect('admin/payroll/advance_salary');
            }
        } else {
            $type = "error";
            echo $message = "You Can Not Apply";
            die;
            // set_message($type, $message);
            // redirect('admin/payroll/advance_salary');
        }

        $data['reason'] = $this->input->post('reason', true);
        $data['deduct_month'] = $this->input->post('deduct_month', true);

        if ($this->session->userdata('user_type') == 1) {
            $data['status'] = 1;
        }
//save data in database
        $this->Payroll_model->_table_name = "tbl_advance_salary"; // table name
        $this->Payroll_model->_primary_key = "advance_salary_id"; // $id
        $id = $this->Payroll_model->save($data, $id);

// save into activities
        $activities = array(
            'user' => $session[0]->user_id,
            'module' => 'payroll',
            'module_field_id' => $id,
            'activity' => 'activity_apply_advance_salary',
            'icon' => 'cc-mastercard',
            'link' => 'admin/payroll/view_advance_salary/' . $id,
            'value1' => $this->db->where('user_id', $data['user_id'])->get('tbl_account_details')->row()->fullname,
            'value2' => $data['advance_amount'],
        );

// Update into tbl_project
        $this->Payroll_model->_table_name = "tbl_activities"; //table name
        $this->Payroll_model->_primary_key = "activities_id";
        $this->Payroll_model->save($activities);

        $advance_salary_info = $this->Payroll_model->check_by(array('advance_salary_id' => $id), 'tbl_advance_salary');
        $profile_info = $this->Payroll_model->check_by(array('user_id' => $advance_salary_info->user_id), 'tbl_account_details');
// send email to departments head
        if ($advance_salary_info->status == 0) {
            if (!empty($profile_info->designations_id)) {
// get departments head user id
                $designation_info = $this->Payroll_model->check_by(array('designations_id' => $profile_info->designations_id), 'tbl_designations');
// get departments head by departments id
                $dept_head = $this->Payroll_model->check_by(array('departments_id' => $designation_info->departments_id), 'tbl_departments');

                if (!empty($dept_head->department_head_id)) {
                    $advance_salary_email = config_item('advance_salary_email');
                    if (!empty($advance_salary_email) && $advance_salary_email == 1) {

                        $email_template = $this->Payroll_model->check_by(array('email_group' => 'advance_salary_email'), 'tbl_email_templates');
                        $user_info = $this->Payroll_model->check_by(array('user_id' => $dept_head->department_head_id), 'tbl_users');
                        $message = $email_template->template_body;
                        $subject = $email_template->subject;
                        $username = str_replace("{NAME}", $profile_info->fullname, $message);
                        $Link = str_replace("{LINK}", base_url() . 'admin/payroll/view_advance_salary/' . $id, $username);
                        $message = str_replace("{SITE_NAME}", config_item('company_name'), $Link);
                        $data['message'] = $message;
                        $message = $this->load->view('email_template', $data, true);

                        $params['subject'] = $subject;
                        $params['message'] = $message;
                        $params['resourceed_file'] = '';
                        $params['recipient'] = $user_info->email;
                        //$this->payroll_model->send_email($params);
                    }

                    $notifyUser = array($dept_head->department_head_id);
                    if (!empty($notifyUser)) {
                        foreach ($notifyUser as $v_user) {
                            add_notification(array(
                                'to_user_id' => $v_user,
                                'description' => 'not_advance_salary_request',
                                'icon' => 'cc-mastercard',
                                'link' => 'admin/payroll/view_advance_salary/' . $id,
                                'value' => lang('by') . ' ' . $session[0]->fullname,
                            ));
                        }
                    }
                    if (!empty($notifyUser)) {
                        //show_notification($notifyUser);
                    }
                }
            }
        }
// messages for user
        $type = "success";
        echo $message = "Advance Salary Submitted";
        // set_message($type, $message);
        // if (empty($_SERVER['HTTP_REFERER'])) {
        //     redirect('admin/payroll/advance_salary');
        // } else {
        //     redirect($_SERVER['HTTP_REFERER']);
        // }
    }

    public function get_advance_salary_info($year, $month = null)
    { // this function is to create get monthy recap report
        if (!empty($month)) {
            $advance_salary_info = $this->Payroll_model->get_advance_salary_info_by_date($month); // get all report by start date and in date
        } else {
            for ($i = 1; $i <= 12; $i++) { // query for months
                if ($i >= 1 && $i <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
                    $month = $year . "-" . '0' . $i;
                } else {
                    $month = $year . "-" . $i;
                }
                $advance_salary_info[$i] = $this->Payroll_model->get_advance_salary_info_by_date($month); // get all report by start date and in date
            }
        }
        return $advance_salary_info; // return the result
    }

    public function providentFund()
    {
        $this->load->view('layout/header');
        $this->load->view("pages/provident_fund");
        $this->load->view("layout/footer");
    }
    public function overTime($id = "")
    {
        $data['current_month'] = date('m');
        if ($this->input->post('year', true)) { // if input year
            $data['year'] = $this->input->post('year', true);
        } else { // else current year
            $data['year'] = date('Y'); // get current year
        }
        // get all expense list by year and month
        $data['all_overtime_info'] = $this->get_overtime_info($data['year']);
        $data['current_month'] = date('m');
        if ($this->input->post('year', true)) { // if input year
            $data['year'] = $this->input->post('year', true);
        } else { // else current year
            $data['year'] = date('Y'); // get current year
        }

        $data['all_employee'] = $this->Payroll_model->get_all_employee();
        if (!empty($id)) {
            $data['overtime_info'] = $this->Payroll_model->get_overtime_info_by_emp_id($id);
        }
        //die(json_encode($data));
        //$data['modal_subview'] = $this->load->view('admin/utilities/overtime/new_overtime', $data, FALSE);
        $this->load->view('layout/header');
        $this->load->view("pages/overtime", $data);
        $this->load->view("layout/footer");
    }

    public function get_overtime_info($year, $month = null)
    { // this function is to create get monthy recap report
        if (!empty($month)) {
            if ($month >= 1 && $month <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
                $start_date = $year . "-" . '0' . $month . '-' . '01';
                $end_date = $year . "-" . '0' . $month . '-' . '31';
            } else {
                $start_date = $year . "-" . $month . '-' . '01';
                $end_date = $year . "-" . $month . '-' . '31';
            }
            $get_expense_list = $this->Payroll_model->get_overtime_info_by_date($start_date, $end_date); // get all report by start date and in date
        } else {
            for ($i = 1; $i <= 12; $i++) { // query for months
                if ($i >= 1 && $i <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
                    $start_date = $year . "-" . '0' . $i . '-' . '01';
                    $end_date = $year . "-" . '0' . $i . '-' . '31';
                } else {
                    $start_date = $year . "-" . $i . '-' . '01';
                    $end_date = $year . "-" . $i . '-' . '31';
                }
                $get_expense_list[$i] = $this->Payroll_model->get_overtime_info_by_date($start_date, $end_date); // get all report by start date and in date
            }
        }
        return $get_expense_list; // return the result
    }

    public function employeeAward()
    {
        $this->load->view('layout/header');
        $this->load->view("pages/employee_award");
        $this->load->view("layout/footer");
    }
    public function DeleteHourly()
    {

        $data = array('hourly_rate_id' => $this->input->post('hourly_id'));
        $results = $this->Payroll_model->DeleteHourly($data);
        die(json_encode($results));

    }

}
