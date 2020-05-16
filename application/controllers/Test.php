<?php
class Test extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tasks_Model');
        $this->load->model('Notification_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('pages/userDetails');
        $this->load->view("layout/footer");
    }

    public function add_todo()
    {
        $_POST['created_date'] = date('Y-m-d H:i:s');
        $session = $this->session->userdata('logged_user');
        $user_id = $session[0]->user_id;
        $_POST['order'] = '1';
        $due_date = $_POST['due_date'];
        $myTime = strtotime($due_date);
        $_POST['due_date'] = date("Y-m-d", $myTime);
        if (isset($_POST['user_id']) && $_POST['user_id'] == $user_id) {
            $result = $this->Tasks_Model->add_todo($_POST);
            if ($result) {
                redirect('User/addTodoList');
            }
        } else {
            $_POST['assigned'] = $user_id;
            $result = $this->Tasks_Model->add_todo($_POST);
            if ($result) {
                redirect('User/addTodoList');
            }
        }
    }

    public function update_notification()
    {
        $session = $this->session->userdata('logged_user');
        $user_id = $session[0]->user_id;
        $result = $this->Notification_model->update_notification($user_id);
        if ($result) {
            echo "1";
        } else {
            echo "0";
        }
    }
}
