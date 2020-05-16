<?php
class Bugs extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Projects_Model');
        $this->load->model('Bugs_model');
        $this->load->model('User_model');
        // $this->load->model('Notification_model');
    }
    public function index($id = "")
    {

        //$data['title'] = lang('all_bugs');
        // get permission user by menu id
        $data['assign_user'] = $this->Bugs_model->allowad_user('58');
        $WHERE=array('company_id'=>$this->session->userdata('logged_user')[0]->company_id);
        $data['all_bugs_info'] = $this->Bugs_model->get_permission('tbl_bug',$WHERE);
        if ($id) { // retrive data from db by id
            $data['active'] = 2;
            $can_edit = $this->Bugs_model->can_action('tbl_bug', 'edit', array('bug_id' => $id));
            $edited = can_action('58', 'edited');
            if ($id == 'project') {
                $data['project_id'] = $opt_id;
                $project_info = get_row('tbl_project', array('project_id' => $opt_id));
                if ($project_info->permission == 'all') {
                    $data['assign_user'] = $this->Bugs_model->allowad_user('57');
                } else {
                    $data['assign_user'] = $this->Bugs_model->permitted_allowad_user($project_info->permission);
                }
            } elseif ($id == 'opportunities') {
                $data['opportunities_id'] = $opt_id;
                $option_info = get_row('tbl_opportunities', array('opportunities_id' => $opt_id));
                if ($option_info->permission == 'all') {
                    $data['assign_user'] = $this->Bugs_model->allowad_user('56');
                } else {
                    $data['assign_user'] = $this->Bugs_model->permitted_allowad_user($option_info->permission);
                }
            } else {
                if (!empty($can_edit) && !empty($edited)) {
                    if (is_numeric($id)) {
                        // get all bug information
                        $data['bug_info'] = $this->db->where('bug_id', $id)->get('tbl_bug')->row();
                    }
                }
            }
            $data['all_opportunities_info'] = $this->Bugs_model->get_permission('tbl_opportunities');
        } else {
            $data['active'] = 1;
        }
        //$data['editor'] = $this->data;
        //$data['subview'] = $this->load->view('admin/bugs/bugs', $data, TRUE);
        //$this->load->view('admin/_layout_main', $data);
        $session = $this->session->userdata('logged_user');
        $designation_id = $session[0]->designations_id;
        $user_id = $session[0]->user_id;
        $data['Assign_permission'] = $this->User_model->CheckPermission($designation_id);
        $data['UsersPermission'] = $this->User_model->CheckUserPermission($user_id);
        // $data['ip_arr'] = $this->global_model->getAllowedIP();
        // print_r($data['ip_arr']);die();
        $data['admin_staff'] = $this->User_model->fetch_all_users();
        $data['users'] = $this->User_model->fetch_user();
        // echo '<pre>';
        // print_r($data);die;
        $this->load->view('layout/header');
        $this->load->view('pages/bugs', $data);
        $this->load->view('layout/footer');
    }

    public function fetch_bugs_projects_oppor()
    {
        if ($_POST['related_to'] != "oppor") {
            $projects = $this->Projects_Model->fetch_projects();
            die(json_encode(array('status' => '1', "data" => $projects, 'msg' => 'project')));
        } else {
            $oppo = $this->db->get("tbl_opportunities")->result_array();
            die(json_encode(array('status' => '2', "data" => $oppo, 'msg' => 'opportunity')));
        }
    }

    public function add_bug()
    {
        $_POST['created_time'] = date('Y-m-d H:i:s');
        $insert = $this->Bugs_model->add_bug($_POST);
        if ($insert) {
            echo "1";
        } else {
            echo "0";
        }
    }
    public function update_bug()
    {
        $_POST['update_time'] = date('Y-m-d H:i:s');
        $insert = $this->Bugs_model->update_bug($_POST);
        if ($insert) {
            echo "1";
        } else {
            echo "0";
        }
    }

    public function edit()
    {
        $id = $this->input->get('id');
        $data['bug'] = $this->Bugs_model->bugDetail($id);
        $data['users'] = $this->User_model->fetch_user();
        $data['admin_staff'] = $this->User_model->fetch_all_users();
        $data['all_opportunities_info'] = $this->Bugs_model->get_permission('tbl_opportunities');
        $this->load->view('layout/header');
        $this->load->view('pages/editBug', $data);
        $this->load->view('layout/footer');
    }

    public function bugsDetails()
    {
        $this->load->view('layout/header');
        $this->load->view('pages/bugsDetails');
        $this->load->view('layout/footer');
    }

    public function progessBugs()
    {
        $this->load->view('layout/header');
        $this->load->view('pages/inProgressBugs', $data);
        $this->load->view('layout/footer');
    }
    public function bugs_Details($id)
    {
        echo 'Bugs Detail';
        // $this->load->view('layout/header');
        // $this->load->view('pages/inProgressBugs',$data);
        // $this->load->view('layout/footer');
    }
    public function DeleteBugsData()
    {

        $data = array('bug_id' => $this->input->post('bugs_id'));

        $results = $this->Bugs_model->DeleteBugsData($data);
        die(json_encode($results));

    }

}
