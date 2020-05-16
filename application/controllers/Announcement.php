<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Announcement extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnnouncementModel', 'Anna');
        $this->load->model('User_model');
        $this->load->model('Notification_model');
    }
    public function index()
    {
        $session = $this->session->userdata('logged_user');
        $designation_id = $session[0]->designations_id;
        $data['Assign_permission'] = $this->Anna->CheckPermission($designation_id);
        $user_id = $session[0]->user_id;
        $data['UsersPermission'] = $this->User_model->CheckUserPermission($user_id);
        $data['Announcement'] = $this->getAllAnnouncements();
        $this->load->view('layout/header');
        $this->load->view("pages/announcements", $data);
        $this->load->view("layout/footer");
    }
    public function addAnnouncement()
    {
        $date = date('Y-m-d H:i:s');
        $session = $this->session->userdata('logged_user');
        $user_id = $session[0]->user_id;
        if ($this->input->post('published') == 'on') {
            $published = 1;
        } else {
            $published = 0;
        }
        if ($this->input->post('shareWith') == 'on') {
            $shareWith = 1;
        } else {
            $shareWith = 0;
        }
        $data = array("title" => $this->input->post('title'),
            "company_id" => $this->input->post('company_id'),
            "description" => $this->input->post('description'),
            "user_id" => $user_id,
            "created_date" => date('Y-m-d h:i:s'),
            "status" => $published,
            "view_status" => 2,
            "start_date" => $this->input->post('start_date'),
            "end_date" => $this->input->post('end_date'),
            "all_client" => $shareWith,
            "attachment" => 'null',
        );
        $stats = $this->Anna->addNewAnnouncement($data);
        switch ($stats) {
            case 0:
                die(json_encode(array('code' => 0, 'msg' => "Failed To Post Announcement.")));
                break;
            case 1:
                $fetch_users = $this->User_model->fetch_all_employees();
                foreach ($fetch_users as $users) {
                    $emp_id = $users->user_id;
                    $new_data = array('date' => $date,
                        'description' => 'announcement',
                        'from_user_id' => $user_id,
                        'to_user_id' => $emp_id,
                        'link' => 'Announcement',
                        'value' => $this->input->post('title'));
                    $notify = $this->Notification_model->insert_notification($new_data);
                }
                die(json_encode(array('code' => 1, 'msg' => "Announcement Posted Successfully.")));
                break;
            case 2:
                die(json_encode(array('code' => 0, 'msg' => "Announcement Already Exists.")));
                break;

            default:
                die(json_encode(array('code' => 0, 'msg' => "Server Not Found.")));
                break;
        }
    }
    public function UpdateAnnouncement()
    {
        $date = date('Y-m-d H:i:s');
        $session = $this->session->userdata('logged_user');
        $user_id = $session[0]->user_id;
        if ($this->input->post('published') == 'on') {
            $published = 1;
        } else {
            $published = 0;
        }
        if ($this->input->post('shareWith') == 'on') {
            $shareWith = 1;
        } else {
            $shareWith = 0;
        }
        $announceid = $this->input->post('announce_id');
        $data = array("title" => $this->input->post('title'),
            "description" => $this->input->post('editor1'),
            "user_id" => $user_id,
            "created_date" => date('Y-m-d h:i:s'),
            "status" => $published,
            "view_status" => 2,
            "start_date" => $this->input->post('start_date'),
            "end_date" => $this->input->post('end_date'),
            "all_client" => $shareWith,
            "attachment" => 'null',
        );
        $stats = $this->Anna->UpdateAnnouncement($data, $announceid);
        switch ($stats) {
            case 0:
                die(json_encode(array('code' => 0, 'msg' => "Failed To Update Announcement.")));
                break;
            case 1:
                $fetch_users = $this->User_model->fetch_all_employees();
                foreach ($fetch_users as $users) {
                    $emp_id = $users['user_id'];
                    $new_data = array('date' => $date,
                        'description' => 'announcement',
                        'from_user_id' => $user_id,
                        'to_user_id' => $emp_id,
                        'link' => 'Announcement',
                        'value' => $title);
                    $notify = $this->Notification_model->insert_notification($new_data);
                }
                die(json_encode(array('code' => 1, 'msg' => "Announcement Updated Successfully.")));
                break;
            case 2:
                die(json_encode(array('code' => 0, 'msg' => "Try Again .")));
                break;

            default:
                die(json_encode(array('code' => 0, 'msg' => "Server Not Found.")));
                break;
        }
    }
    public function getAllAnnouncements()
    {
        return $this->Anna->getAnnounce();
    }
    public function DeleteAnnounceData()
    {

        $data = array('announcements_id' => $this->input->post('announce_id'));

        $results = $this->Anna->DeleteAnnounceData($data);
        die(json_encode($results));

    }
    public function EditAnnounceData()
    {
        $an_id = $this->input->post('an_id');
        $data = $this->Anna->FetchAnnounceDataById($an_id);
        // print_r($data);
        // die;
        if ($data) {
            die(json_encode(array('status' => 1, 'data' => $data)));
        } else {
            die(json_encode(array('status' => 0, 'data' => 'No Data Found')));
        }

    }

}
