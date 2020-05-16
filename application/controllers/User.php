<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel', 'Login');
		$this->load->model('Job_circular_model');
		$this->load->model('User_model');
		$this->load->model('Tasks_Model');
		$this->load->model('Global_Model');
		$this->load->model('AttendanceModel', 'ATND');
		$this->load->model('Payroll_model');
		$this->load->model('Utilities_model');
	}

	public function index()
	{
		$data['countries'] = $this->db->get('countries')->result();
		$this->load->view('pages/auth-register', $data);
	}

	public function edit_user()
	{
		$user_id = $this->uri->segment(3);
		$data['edit_data'] = $this->User_model->fetch_all_details($user_id);
		$action = "";
		if ($action == 'edit_user' && $id != my_id()) {
			$data['active'] = 2;
			$can_edit = $this->User_model->can_action('tbl_users', 'edit', array('user_id' => $id));
			$edited = can_action('24', 'edited');
			if (!empty($can_edit) || !empty($edited)) {
				$data['login_info'] = $this->db->where('user_id', $user_id)->get('tbl_users')->row();
			}
		} else {
			$data['active'] = 1;
		}

		$data['title'] = 'User List';

		$this->User_model->_table_name = 'tbl_client'; //table name
		$this->User_model->_order_by = 'client_id';
		$data['all_client_info'] = $this->User_model->get();

		// get all language
		$data['languages'] = $this->db->where('active', 1)->order_by('name', 'ASC')->get('tbl_languages')->result();

		$data['permission_user'] = $this->User_model->all_permission_user('24');

		$data['all_user_info'] = $this->User_model->get_permission('tbl_users');

		$data['all_designation_info'] = $this->User_model->all_designation();


		$data['countries'] = $this->db->get('tbl_countries')->result();
		$data['all_dept_info'] = $this->db->get('tbl_departments')->result();
		foreach ($data['all_dept_info'] as $v_dept_info) {
			$data['all_department_info'][] = $this->Job_circular_model->get_add_department_by_id($v_dept_info->departments_id);
		}
		$session = $this->session->userdata('logged_user');
		// print_r($session);
		// die;
		$designation_id = $session[0]->designations_id;
		$user_id = $session[0]->user_id;
		$data['Assign_permission'] = $this->User_model->CheckPermission($designation_id);
		$data['UsersPermission'] = $this->User_model->CheckUserPermission($user_id);
		// print_r($data['UsersPermission']);
		// die;
		$data['all_users'] = $this->User_model->fetch_all_users();
		$this->load->view('layout/header');
		$this->load->view("pages/user_edit", $data);
		$this->load->view("layout/footer");
	}

	public function new_user()
	{
		$full_name = $_POST['full_name'];
		$employment_id = $_POST['Employment_id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$mobile = $_POST['mobile'];
		$skype_id = $_POST['skype_id'];
		$direction = $_POST['direction'];
		$designations_id = $_POST['designations_id'];
		$check_data = $this->User_model->check_user($username, $email);
		if ($check_data) {
			die(json_encode(array('status' => '0', 'msg' => 'Already Exists')));
		} else {
			$data = array(
				'company_id'=>$_POST['company_id'],
				'username' => $username,
				'full_name' => $full_name,
				'password' => $password,
				'email' => $email,
				'role_id' => '3',
				'activated' => '1');
			$insert = $this->User_model->insert_user($data);
			$user_id = $insert;
			$image = rand(0000, 9999) . '-' . $_FILES["profilephoto"]['name'];
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['file_name'] = $image;
			// $config['upload_path'] = './uploads/';
			// $config['allowed_types'] = '*';
			// $config['max_size'] = 2000;
			// $config['max_width'] = 1500;
			// $config['max_height'] = 1500;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('profilephoto')) {
				$error = array('error' => $this->upload->display_errors());
				die(json_encode(array('status' => '0', 'msg' => $error)));
			} else {
				$upload_data = $this->upload->data();
				$file_name = "uploads/" . $image;
				$new_data = array('user_id' => $user_id,
					'fullname' => $full_name,
					'employment_id' => $employment_id,
					'company' => '0',
					'phone' => $phone,
					'mobile' => $mobile,
					'skype' => $skype_id,
					'designations_id' => $designations_id,
					'avatar' => $file_name,
					'direction' => $direction);
				$final = $this->User_model->insert_account($new_data);
				if ($final) {
					die(json_encode(array('status' => '1', 'msg' => 'success')));
				} else {
					die(json_encode(array('status' => '0', 'msg' => 'OOPS ! Something Went Wrong')));
				}
			}
		}
	}

	public function delete_user($id = null)
	{
		$cwhere = array('user_id' => $id);
		$this->User_model->_table_name = 'tbl_private_chat';
		$this->User_model->delete_multiple($cwhere);

		$this->User_model->_table_name = 'tbl_private_chat_users';
		$this->User_model->delete_multiple($cwhere);

		$this->User_model->_table_name = 'tbl_private_chat_messages';
		$this->User_model->delete_multiple($cwhere);

		$this->User_model->_table_name = 'tbl_activities';
		$this->User_model->delete_multiple(array('user' => $id));

		$this->User_model->_table_name = 'tbl_inbox';
		$this->User_model->delete_multiple(array('user_id' => $id));

		$this->User_model->_table_name = 'tbl_sent';
		$this->User_model->delete_multiple(array('user_id' => $id));

		$this->User_model->_table_name = 'tbl_draft';
		$this->User_model->delete_multiple(array('user_id' => $id));

		$this->User_model->_table_name = 'tbl_users';
		$this->User_model->delete_multiple(array('user_id' => $id));

		$this->User_model->_table_name = 'tbl_account_details';
		$this->User_model->delete_multiple(array('user_id' => $id));
		redirect('User/user_list');
	}

	public function user_list($action = NULL, $id = NULL)
	{

		$user_id = $id;

		if ($action == 'edit_user' && $id != my_id()) {
			$data['active'] = 2;
			$can_edit = $this->User_model->can_action('tbl_users', 'edit', array('user_id' => $id));
			$edited = can_action('24', 'edited');
			if (!empty($can_edit) || !empty($edited)) {
				$data['login_info'] = $this->db->where('user_id', $user_id)->get('tbl_users')->row();
			}
		} else {
			$data['active'] = 1;
		}

		$data['title'] = 'User List';

		$this->User_model->_table_name = 'tbl_client'; //table name
		$this->User_model->_order_by = 'client_id';
		$data['all_client_info'] = $this->User_model->get();

		// get all language
		$data['languages'] = $this->db->where('active', 1)->order_by('name', 'ASC')->get('tbl_languages')->result();

		$data['permission_user'] = $this->User_model->all_permission_user('24');

		$data['all_user_info'] = $this->User_model->get_permission('tbl_users');

		$data['all_designation_info'] = $this->User_model->all_designation();


		$data['countries'] = $this->db->get('tbl_countries')->result();
		$data['all_dept_info'] = $this->db->get('tbl_departments')->result();
		foreach ($data['all_dept_info'] as $v_dept_info) {
			$data['all_department_info'][] = $this->Job_circular_model->get_add_department_by_id($v_dept_info->departments_id);
		}
		$session = $this->session->userdata('logged_user');
		// print_r($session);
		// die;
		$designation_id = $session[0]->designations_id;
		$user_id = $session[0]->user_id;
		$data['Assign_permission'] = $this->User_model->CheckPermission($designation_id);
		$data['UsersPermission'] = $this->User_model->CheckUserPermission($user_id);
		// print_r($data['UsersPermission']);
		// die;
		$data['all_users'] = $this->User_model->fetch_all_users();
		$data['companies']=$this->db->get('tbl_companies')->result();
		$this->load->view('layout/header');
		$this->load->view("pages/user_list", $data);
		$this->load->view("layout/footer");
	}

	public function userProfile()
	{
		$session = $this->session->userdata('logged_user');
		$user_id = $session[0]->user_id;
		$data['user_info'] = $this->User_model->fetch_user_data($user_id);
		$this->load->view('layout/header');
		$this->load->view("pages/update_profile", $data);
		$this->load->view("layout/footer");
	}

	public function addTodoList()
	{
		$data['users'] = $this->User_model->fetch_all_employees_admin();
		if (isset($_POST['users'])) {
			$user_id = $_POST['users'];
			$data['fetch_to_do'] = $this->Tasks_Model->fetch_todo($user_id);
			$data['main_id'] = $user_id;
		} else {
			$session = $this->session->userdata('logged_user');
			$user_id = $session[0]->user_id;
			$data['fetch_to_do'] = $this->Tasks_Model->fetch_todo($user_id);
			$data['main_id'] = $user_id;
		}
		$this->load->view('layout/header');
		$this->load->view("pages/todo_list", $data);
		$this->load->view("layout/footer");
	}

	public function fetch_to_do_id()
	{
		$todo_id = $_POST['todo_id'];
		$result = $this->Tasks_Model->fetch_to_do_id($todo_id);
		if ($result) {
			die(json_encode(array('status' => '1', 'data' => $result)));
		} else {
			die(json_encode(array('status' => '0')));
		}
	}

	public function update_todo_ajax()
	{
		$session = $this->session->userdata('logged_user');
		$user_id = $session[0]->user_id;
		$_POST['assigned'] = $user_id;
		$due_date = $_POST['due_date'];
		$myTime = strtotime($due_date);
		$_POST['due_date'] = date("Y-m-d", $myTime);
		$result = $this->Tasks_Model->update_task_ajax($_POST);
		if ($result) {
			echo "1";
		} else {
			echo "0";
		}
	}


	// public function userDetails(){

	// 	$this->load->view('layout/header');
	// 	$this->load->view("pages/userDetails");
	// 	$this->load->view("layout/footer");
	// }

	public function update_todo()
	{
		$result = $this->User_model->update_todo($_POST);
		if ($result) {
			echo "1";
		} else {
			echo "0";
		}
	}

	public function delete_todo()
	{
		$todo_id = $_POST['todo_id'];
		$result = $this->User_model->delete_todo($todo_id);
		if ($result) {
			echo "1";
		} else {
			echo "0";
		}
	}

	public function chekcForMyLeaveCategory($designation_id)
	{
		return $this->db->where('leave_cat_desig_id', $designation_id)->get('tbl_leave_category')->result_array();
	}

	public function countMyLeaveOfThisCategory($cat_id, $id)
	{

		return $this->db->query("SELECT SUM(leave_duration ) as leave_d FROM tbl_leave_application WHERE application_status='2' and leave_category_id='$cat_id' and user_id='$id'")->result();

	}

	public function userDetails($id, $active = null)
	{
		// $usersdetail=$this->session->logged_user;

		$formyleave = $id;
		$userDe = $this->db->select('designations_id')->where('user_id', $id)->get('tbl_account_details')->row();
		$designation_id = $userDe->designations_id;
		// print_r();
		// die();
		$myLeaveReport = array();
		$leaveDeatils = array();
		$resArray = array();
		$LeaveCate = $this->chekcForMyLeaveCategory($designation_id);
		foreach ($LeaveCate as $key => $cat) {
			# code...
			$calLEa = $this->countMyLeaveOfThisCategory($cat['leave_category_id'], $id);
			// print_r($calLEa);

			if ($calLEa[0]->leave_d != "") {
				$leaveDuration = $calLEa[0]->leave_d;
				$myLeaveReport[] = array("cate_id" => $cat['leave_category_id'], 'cat_name' => $cat['leave_category'], 'leaveDuration' => $leaveDuration, 'leaveDays' => $cat['leave_quota']);


			} else {
				$leaveDuration = 0;
			}
			$resArray[] = array("cate_id" => $cat['leave_category_id'], 'cat_name' => $cat['leave_category'], 'leaveDuration' => $leaveDuration, 'leaveDays' => $cat['leave_quota']);
		}
		$leaveReportArray = $this->db->where('user_id', $id)->get('tbl_leave_application')->result();
		// print_r($myLeaveReport);
		$data['myLeaveDetails'] = $resArray;
		$data['myLeaveReport'] = $myLeaveReport;
		if (isset($id)) {
			$data['title'] = 'user_details';
			$data['id'] = $id;
			if (!empty($active)) {
				$data['active'] = $active;
			} else {
				$data['active'] = 1;
			}
			$date = $this->input->post('date', true);
			if (!empty($date)) {
				$data['date'] = $date;
			} else {
				$data['date'] = date('Y-m');
			}
			$data['attendace_info'] = $this->get_report($id, $data['date']);
			$data['my_leave_report'] = leave_report($id);
			//
			if ($this->input->post('year', TRUE)) { // if input year
				$data['year'] = $this->input->post('year', TRUE);
			} else { // else current year
				$data['year'] = date('Y'); // get current year
			}
			// get all expense list by year and month
			$data['provident_fund_info'] = $this->get_provident_fund_info($data['year'], $id);

			if ($this->input->post('overtime_year', TRUE)) { // if input year
				$data['overtime_year'] = $this->input->post('overtime_year', TRUE);
			} else { // else current year
				$data['overtime_year'] = date('Y'); // get current year
			}
			// get all expense list by year and month
			$data['all_overtime_info'] = $this->get_overtime_info($data['overtime_year'], $id);
			$data['profile_info'] = $this->db->where('user_id', $id)->get('tbl_account_details')->row();

			$data['total_attendance'] = count($this->total_attendace_in_month($id));

			$data['total_absent'] = count($this->total_attendace_in_month($id, 'absent'));

			$data['total_leave'] = count($this->total_attendace_in_month($id, 'leave'));
			//award received
			$data['total_award'] = count($this->db->where('user_id', $id)->get('tbl_employee_award')->result());

			// get working days holiday
			$holidays = $this->Global_Model->get_holidays(); //tbl working Days Holiday

			$num = cal_days_in_month(CAL_GREGORIAN, date('n'), date('Y'));
			$working_holiday = 0;
			for ($i = 1; $i <= $num; $i++) {
				$day_name = date('l', strtotime("+0 days", strtotime(date('Y') . '-' . date('n') . '-' . $i)));

				if (!empty($holidays)) {
					foreach ($holidays as $v_holiday) {
						if ($v_holiday->day == $day_name) {
							$working_holiday += count($day_name);
						}
					}
				}
			}
			// get public holiday
			// $public_holiday = count($this->total_attendace_in_month($id, TRUE));
			$public_holiday = 0;
			// get total days in a month
			$month = date('m');
			$year = date('Y');
			$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
			// total attend days in a month without public holiday and working days
			$data['total_days'] = $days - $working_holiday - $public_holiday;

			$data['all_working_hour'] = $this->all_attendance_id_by_date($id, true);

			$data['this_month_working_hour'] = $this->all_attendance_id_by_date($id);

			$this->load->view('layout/header');
			$this->load->view("pages/userDetails", $data);
			$this->load->view("layout/footer");
		} else {
			set_message('error', lang('there_in_no_value'));
			redirect('Dashboard');
		}
	}

	public function get_provident_fund_info($year, $user_id)
	{// this function is to create get monthy recap report

		for ($i = 1; $i <= 12; $i++) { // query for months
			if ($i >= 1 && $i <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
				$start_date = $year . "-" . '0' . $i;
				$end_date = $year . "-" . '0' . $i;
			} else {
				$start_date = $year . "-" . $i;
				$end_date = $year . "-" . $i;
			}
			$provident_fund_info[$i] = $this->Payroll_model->get_provident_fund_info_by_date($start_date, $end_date, $user_id); // get all report by start date and in date
		}

		return $provident_fund_info; // return the result
	}

	public function get_overtime_info($year, $user_id)
	{// this function is to create get monthy recap report

		for ($i = 1; $i <= 12; $i++) { // query for months
			if ($i >= 1 && $i <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
				$start_date = $year . "-" . '0' . $i . '-' . '01';
				$end_date = $year . "-" . '0' . $i . '-' . '31';
			} else {
				$start_date = $year . "-" . $i . '-' . '01';
				$end_date = $year . "-" . $i . '-' . '31';
			}
			$get_expense_list[$i] = $this->Utilities_model->get_overtime_info_by_date($start_date, $end_date, $user_id); // get all report by start date and in date
		}

		return $get_expense_list; // return the result
	}

	public function total_attendace_in_month($user_id, $flag = NULL)
	{
		$month = date('m');
		$year = date('Y');

		if ($month >= 1 && $month <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
			$start_date = $year . "-" . '0' . $month . '-' . '01';
			$end_date = $year . "-" . '0' . $month . '-' . '31';
		} else {
			$start_date = $year . "-" . $month . '-' . '01';
			$end_date = $year . "-" . $month . '-' . '31';
		}
		if (!empty($flag) && $flag == 1) { // if flag is not empty that means get pulic holiday
			$get_public_holiday = $this->Global_Model->get_holiday_list_by_date($start_date, $end_date);

			if (!empty($get_public_holiday)) { // if not empty the public holiday
				foreach ($get_public_holiday as $v_holiday) {
					if ($v_holiday->start_date == $v_holiday->end_date) { // if start date and end date is equal return one data
						$total_holiday[] = $v_holiday->start_date;
					} else { // if start date and end date not equan return all date
						for ($j = $v_holiday->start_date; $j <= $v_holiday->end_date; $j++) {
							$total_holiday[] = $j;
						}
					}
				}
				return $total_holiday;
			}
		} elseif (!empty($flag)) { // if flag is not empty that means get pulic holiday
			$get_total_absent = $this->Global_Model->get_total_attendace_by_date($start_date, $end_date, $user_id, $flag); // get all attendace by start date and in date
			return $get_total_absent;
		} else {
			$get_total_attendance = $this->Global_Model->get_total_attendace_by_date($start_date, $end_date, $user_id); // get all attendace by start date and in date
			return $get_total_attendance;
		}
	}

	public function get_report($user_id, $date)
	{
		$month = date('n', strtotime($date));
		$year = date('Y', strtotime($date));
		$num = cal_days_in_month(CAL_GREGORIAN, $month, $year);

		$holidays = $this->Global_Model->get_holidays(); //tbl working Days Holiday

		if ($month >= 1 && $month <= 9) {
			$yymm = $year . '-' . '0' . $month;
		} else {
			$yymm = $year . '-' . $month;
		}

		$public_holiday = $this->Global_Model->get_public_holidays($yymm);

		//tbl a_calendar Days Holiday
		if (!empty($public_holiday)) {
			foreach ($public_holiday as $p_holiday) {
				$p_hday = $this->ATND->GetDays($p_holiday->start_date, $p_holiday->end_date);
			}
		}

		$key = 1;
		$x = 0;
		for ($i = 1; $i <= $num; $i++) {

			if ($i >= 1 && $i <= 9) {
				$sdate = $yymm . '-' . '0' . $i;
			} else {
				$sdate = $yymm . '-' . $i;
			}
			$day_name = date('l', strtotime("+$x days", strtotime($year . '-' . $month . '-' . $key)));

			$data['week_info'][date('W', strtotime($sdate))][$sdate] = $sdate;

			// get leave info
			if (!empty($holidays)) {
				foreach ($holidays as $v_holiday) {
					if ($v_holiday->day == $day_name) {
						$flag = 'H';
					}
				}
			}
			if (!empty($p_hday)) {
				foreach ($p_hday as $v_hday) {
					if ($v_hday == $sdate) {
						$flag = 'H';
					}
				}
			}
			if (!empty($flag)) {
				$attendace_info[date('W', strtotime($sdate))][$sdate] = $this->ATND->attendance_report_by_empid($user_id, $sdate, $flag);
			} else {
				$attendace_info[date('W', strtotime($sdate))][$sdate] = $this->ATND->attendance_report_by_empid($user_id, $sdate);
			}
			$key++;
			$flag = '';
		}
		return $attendace_info;

	}

	public function all_attendance_id_by_date($user_id, $flag = null)
	{
		if (!empty($flag)) {
			$get_total_attendance = $this->db->where(array('user_id' => $user_id, 'attendance_status' => '1'))->get('tbl_attendance')->result();
			if (!empty($get_total_attendance)) {
				foreach ($get_total_attendance as $v_attendance_id) {
					$aresult[] = $this->Global_Model->get_total_working_hours($v_attendance_id->attendance_id);
				}
				return $aresult;
			}
		} else {

			$month = date('n');
			$year = date('Y');
			if ($month >= 1 && $month <= 9) {
				$yymm = $year . '-' . '0' . $month;
			} else {
				$yymm = $year . '-' . $month;
			}
			$num = cal_days_in_month(CAL_GREGORIAN, $month, $year);
			for ($i = 1; $i <= $num; $i++) {
				if ($i >= 1 && $i <= 9) {
					$sdate = $yymm . '-' . '0' . $i;
				} else {
					$sdate = $yymm . '-' . $i;
				}
				$get_total_attendance = $this->Global_Model->get_total_attendace_by_date($sdate, $sdate, $user_id); // get all attendace by start date and in date
				if (!empty($get_total_attendance)) {
					foreach ($get_total_attendance as $v_attendance_id) {
						$result[] = $this->Global_Model->get_total_working_hours($v_attendance_id->attendance_id);
					}
				}
			}
			if (!empty($result)) {
				return $result;
			}
		}
	}

	public function update_user()
	{
		if ($_FILES["file"]['name'] != "") {
			$image = rand(0000, 9999) . '-' . $_FILES["file"]['name'];
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['file_name'] = $image;
			$this->upload->initialize($config);
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('file')) {
				$error = array('error' => $this->upload->display_errors());
				//$this->session->set_flashdata('msg','Error In Uploading Image');
				// $this->load->view('files/upload_form', $error);
				//$this->userProfile();
			} else {
				$imager = "uploads/" . $image;
				$data = array('fullname' => $_POST['full_name'],
					'employment_id' => $_POST['Employment_id'],
					'phone' => $_POST['mobile'],
					'skype' => $_POST['skype_id'],
					'designations_id' => $_POST['designations_id'],
					'avatar' => $imager
				);
				$email = $_POST['email'];
				$result = $this->User_model->update_user_with_image($_POST['user_id'], $data, $email);
				if ($result) {
					redirect('User/user_list');
				}
			}
		} else {
			$data = array('fullname' => $_POST['full_name'],
				'employment_id' => $_POST['Employment_id'],
				'phone' => $_POST['mobile'],
				'skype' => $_POST['skype_id'],
				'designations_id' => $_POST['designations_id'],
			);
			$email = $_POST['email'];
			$result = $this->User_model->update_user_with_image($_POST['user_id'], $data, $email);
			if ($result) {
				redirect('User/user_list');
			}
		}
	}

	public function updateUserInfo()
	{
		if ($_FILES["file"]['name'] != "") {
			$image = rand(0000, 9999) . '-' . $_FILES["file"]['name'];
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['file_name'] = $image;
			$this->upload->initialize($config);
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('file')) {

				$this->session->set_flashdata('msg', 'Error In Uploading Image');
				// $this->load->view('files/upload_form', $error);
				$this->userProfile();
			} else {
				$rss = $this->upload->data();
				$_POST['avatar'] = "uploads/" . $rss['file_name'];
				if ($this->User_model->update_user_data($_POST)) {
					$this->session->set_flashdata('msg', 'Successfully Updated');
					$this->userProfile();
				} else {
					$this->session->set_flashdata('msg', 'Server Error, Please Try Again');
					$this->userProfile();
				}
			}
		} else {

			if ($this->User_model->update_user_data($_POST)) {
				$this->session->set_flashdata('msg', 'Successfully Updated');
				$this->userProfile();
			} else {
				$this->session->set_flashdata('msg', 'Server Error, Please Try Again');
				$this->userProfile();
			}
		}

	}

	public function updateEmail()
	{
		//print_r($_POST);
		if ($this->User_model->update_user_email($_POST)) {
			$this->session->set_flashdata('msg', 'Successfully Updated');
			$this->userProfile();
		} else {
			$this->session->set_flashdata('msg', 'Server Error, Please Try Again');
			$this->userProfile();
		}
	}

	public function updatePassword()
	{
		//print_r($_POST);
		//die();
		if ($this->User_model->update_user_password($_POST)) {
			die(json_encode(array('error' => 0, 'msg' => 'Successfully Updated')));
		} else {
			die(json_encode(array('error' => 1, 'msg' => 'Password Doesn\'t Matched')));
		}
	}

	function generateReport()
	{
		//	get all employee details to show on dropdown
		$this->db->where('role_id', 3);
		$data['employees'] = $this->db->get('tbl_users')->result();
		$this->db->where('role_id !=', 3);
		$data['admins'] = $this->db->get('tbl_users')->result();
		$this->load->view('layout/header');
		$this->load->view("pages/generate_report", $data);
		$this->load->view("layout/footer");
	}

	function addReport()
	{
//		echo '<pre>';
//		print_r($_POST);die();
//print_r($_FILES);
		$adminlist = $this->input->post('admin_list') ? $this->input->post('admin_list') : '';
		$emplist = $this->input->post('emp_list') ? $this->input->post('emp_list') : '';
		$adminEmailString = $adminlist ? implode(',', $adminlist) : '';
		$empEmailString = $emplist ? implode(',', $emplist) : '';
		$data['detail']=$_POST;

		if ($_FILES["myfile"]['name'] != "") {
			$cpt = count($_FILES['myfile']['name']);
			for ($i = 0; $i < $cpt; $i++) {
				$ext = pathinfo($_FILES['myfile']['name'][$i], PATHINFO_EXTENSION);
//				$_FILES['file']['name'] = "report-" . date("Y-m-d-H-i-s") . $i . "." . $ext;
				$_FILES['file']['name'] = "report-" . time() . $i . "." . $ext;
				$_FILES['file']['type'] = $_FILES['myfile']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['myfile']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['myfile']['error'][$i];
				$_FILES['file']['size'] = $_FILES['myfile']['size'][$i];
				$uploadPath = 'uploads/report_images/';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$this->upload->do_upload('file');
				$dataInfo[] = $this->upload->data();
				$images[] = $_FILES['file']['name'];

			}
			$pics = implode(",", $images);
			$_POST['rpt_images'] = $pics;
			unset($_POST['user_type']);
			$usname=$_POST['your_name'];
			unset($_POST['your_name']);
			unset($_POST['admin_list']);
			unset($_POST['emp_list']);
			if ($this->User_model->add_user_reports($_POST)) {
				if($adminEmailString || $empEmailString){
					$this->load->config('email');
					$this->load->library('email');
					$this->email->initialize();
					$this->email->set_newline("\r\n");
					$contwnt=$this->load->view('email/report',$data,true);
					$this->email->from($this->config->item('smtp_user'), $usname);
					foreach ($images as $imagename){
						$this->email->attach(APPPATH.'../uploads/report_images/'.$imagename);
					}
					$this->email->to($adminEmailString.$empEmailString);
					$this->email->subject('Report '.$usname);
					$this->email->message($contwnt);
					$this->email->send();
				}
				$this->session->set_flashdata('msg', 'Added Successfully');
				redirect(base_url('User/generateReport'));
			} else {
				$this->session->set_flashdata('msg', 'Server Error, Please Try Again');
				redirect(base_url('User/generateReport'));
			}

		} else {
			if ($this->User_model->add_user_reports($_POST)) {
				$this->session->set_flashdata('msg', 'Added Successfully ');
				redirect(base_url('User/generateReport'));
			} else {
				$this->session->set_flashdata('msg', 'Server Error, Please Try Again');
				redirect(base_url('User/generateReport'));
			}
		}
	}

	function reportList()
	{
		$session = $this->session->userdata('logged_user');
		$user_id = $session[0]->user_id;
		$designation_id = $session[0]->designations_id;
		$data['UsersPermission'] = $this->User_model->CheckUserPermission($user_id);
		$data['Assign_permission'] = $this->User_model->CheckPermission($designation_id);
		$data['reports_list'] = $this->User_model->fetch_report_list($user_id);
		$this->load->view('layout/header');
		$this->load->view("pages/view_reports", $data);
		$this->load->view("layout/footer");
	}

	function fetchReport()
	{
		//print_r($_POST);
		$res = $this->User_model->fetch_report_data($_POST);
		if ($res != false) {
			die(json_encode(array("error" => 0, "data" => $res)));
		} else {
			die(json_encode(array("error" => 1, "data" => $res)));
		}

	}

	function TaskReport()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/TaskReport");
		$this->load->view("layout/footer");
	}
	// function TaskReport(){
	// 	$this->load->view('layout/header');
	// 	$this->load->view("pages/taskreport");
	// 	$this->load->view("layout/footer");
	// }
	function ProjectReport()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/projectreport");
		$this->load->view("layout/footer");
	}

	public function getUserByDetails()
	{
		$this->db->where('tbl_users.user_id', $this->input->post('user_id'));
		$this->db->join('tbl_account_details', 'tbl_account_details.user_id=tbl_users.user_id');
		die(json_encode($this->db->get('tbl_users')->result()));
	}


	public function DeleteUsers()
	{

		$data = array('user_id' => $this->input->post('users_id'));
		$results = $this->User_model->DeleteUsers($data);
		die(json_encode($results));

	}

	public function InProgressUserProject()
	{
		$session = $this->session->userdata('logged_user');
		$user_id = $session[0]->user_id;
		$data['project'] = $this->User_model->fetch_UserInProgressproject($user_id);
		print_r($data['project']);
		die;
		$this->load->view('layout/header');
		$this->load->view("pages/user_inprogressproject", $data);
		$this->load->view("layout/footer");
	}

	public function myOpenTask()
	{
		$data['all_tasks'] = array();
		$this->load->view('layout/header');
		$this->load->view("pages/myOpenTask", $data);
		$this->load->view("layout/footer");
	}

	public function myCompletedTask()
	{
		$data['all_tasks'] = array();
		$this->load->view('layout/header');
		$this->load->view("pages/myCompletedTask", $data);
		$this->load->view("layout/footer");
	}

	public function myOpenProject()
	{
		$data['project'] = array();
		$this->load->view('layout/header');
		$this->load->view("pages/myOpenProject", $data);
		$this->load->view("layout/footer");
	}

	public function myCompletedProject()
	{
		$data['project'] = array();
		$this->load->view('layout/header');
		$this->load->view("pages/myCompletedProject", $data);
		$this->load->view("layout/footer");
	}


}
?>