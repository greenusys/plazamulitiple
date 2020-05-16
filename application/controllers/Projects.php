<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Projects extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Projects_Model');
        $this->load->model('Client_Model');
        $this->load->model('User_model');
        $this->load->model('Items_Model', 'items_model');
        $this->load->model('Notification_model');
    }

    public function index($id = null)
    {
        //echo 'Projects';
        if ($id != "") {

            $data['particular_project_Detail'] = $this->db->where('project_id', $id)->get('tbl_project')->result();
            $data['hide_all'] = true;
            // print_r($data['particular_project_Detail']);
        } else {
            $data['hide_all'] = false;
            $data['clients'] = $this->Client_Model->getClients();
            $data['users'] = $this->User_model->fetch_user();
            $data['settings'] = $this->Projects_Model->fetch_settings();
            $projects = $this->Projects_Model->fetch_projects();
            $project_data = [];
            if ($projects) {
                foreach ($projects as $pr) {
                    $perm = $pr['permission'];
                    $project_id = $pr['project_id'];
                    // print_r($project_id.'<br>');

                    $taskprogress['taskprogress'] = $this->counttaskprogress($project_id);
                    // print_r($taskprogress);
                    // die;

                    $user = array();
                    if ($perm == "all") {
                        $user[] = "Everyone";
                    } else {
                        $new = json_decode($perm);
                        foreach ($new as $key => $value) {
                            $user[] = $this->User_model->fetch_user_by_id($key);
                        }
                    }
                    $project_data[] = array_merge($pr, array("assigned_to" => $user), $taskprogress);

                }
            }
            // print_r($project_data);
            // die;
            $data['project'] = $project_data;
            //  $data['taskprogress']=$taskprogress;

        }
        $session = $this->session->userdata('logged_user');
        $id = $session[0]->user_id;
        $designation_id = $session[0]->designations_id;
        $data['Assign_permission'] = $this->Projects_Model->CheckPermission($designation_id);
        $user_id = $session[0]->user_id;
        $data['UsersPermission'] = $this->User_model->CheckUserPermission($user_id);
        $this->load->view('layout/header');
        $this->load->view("pages/projects", $data);
        $this->load->view("layout/footer");
    }
    public function editProject($id)
    {
        $data['particular_project_Detail'] = $this->db->where('project_id', $id)->get('tbl_project')->result();
        $data['clients'] = $this->Client_Model->getClients();
        $data['users'] = $this->User_model->fetch_user();
        $data['settings'] = $this->Projects_Model->fetch_settings();
        $projects = $this->Projects_Model->fetch_projects();
        $this->load->view('layout/header');
        $this->load->view("pages/editProject", $data);
        $this->load->view("layout/footer");
    }
    public function counttaskprogress($project_id = null)
    {

        $this->db->where(array('tbl_task.project_id' => $project_id, 'tbl_task.task_status' => 'completed'));
        $this->db->join('tbl_project', 'tbl_task.project_id=tbl_project.project_id');
        $task = $this->db->get('tbl_task')->result_array();
        $count1 = count($task);

        $this->db->where(array('tbl_task.project_id' => $project_id));
        $this->db->join('tbl_project', 'tbl_task.project_id=tbl_project.project_id');
        $total = $this->db->get('tbl_task')->result_array();
        $count = count($total);
        if ($count != 0) {
            $pro = $count - $count1;
            $progress = ($count1 / $count) * 100;
            $progress = number_format($progress, 2);
        } else {
            $progress = 0;
        }
        return $progress;
        // $total=$task;
        // return $total;

    }
    public function project_details($id, $active = null, $op_id = null)
    {
        // echo ' ******* ';
        // die;

        $data['title'] = lang('project_details');
        //get all task information
        $this->db->where(array('project_id' => $id));
        $this->db->join('tbl_client', 'tbl_client.client_id=tbl_project.client_id');
        $data['project_details'] = $this->db->get('tbl_project')->result();
        // if (empty($data['project_details'])) {
        //     set_message('error', lang('there_in_no_value'));
        //     redirect('admin/projects');
        // }
        $this->items_model->_table_name = "tbl_task_attachment"; //table name
        $this->items_model->_order_by = "project_id";
        $data['files_info'] = $this->items_model->get_by(array('project_id' => $id), false);

        if (!empty($data['files_info'])) {
            foreach ($data['files_info'] as $key => $v_files) {
                $this->items_model->_table_name = "tbl_task_uploaded_files"; //table name
                $this->items_model->_order_by = "task_attachment_id";
                $data['project_files_info'][$key] = $this->items_model->get_by(array('task_attachment_id' => $v_files->task_attachment_id), false);
            }
        }
        $data['dropzone'] = true;
        // print_r($files_info);
        if ($active == 2) {
            $data['active'] = 2;
            $data['miles_active'] = 1;
            $data['task_active'] = 1;
            $data['bugs_active'] = 1;
            $data['time_active'] = 1;
            $data['estimate'] = 1;
        } elseif ($active == 3) {
            $data['active'] = 3;
            $data['miles_active'] = 1;
            $data['task_active'] = 1;
            $data['bugs_active'] = 1;
            $data['time_active'] = 1;
            $data['estimate'] = 1;
        } elseif ($active == 4) {
            $data['active'] = 4;
            $data['miles_active'] = 1;
            $data['task_active'] = 1;
            $data['bugs_active'] = 1;
            $data['time_active'] = 1;
            $data['estimate'] = 1;
        } elseif ($active == 5) {
            $data['active'] = 5;
            $data['miles_active'] = 1;
            $data['task_active'] = 1;
            $data['bugs_active'] = 1;
            $data['time_active'] = 1;
            $data['estimate'] = 1;
        } elseif ($active == 'milestone') {
            $data['active'] = 5;
            $data['miles_active'] = 2;
            $data['task_active'] = 1;
            $data['bugs_active'] = 1;
            $data['time_active'] = 1;
            $data['estimate'] = 1;
            $data['milestones_info'] = $this->items_model->check_by(array('milestones_id' => $op_id), 'tbl_milestones');
        } elseif ($active == 6) {
            $data['active'] = 6;
            $data['miles_active'] = 1;
            $data['task_active'] = 1;
            $data['bugs_active'] = 1;
            $data['time_active'] = 1;
            $data['estimate'] = 1;
        } elseif ($active == 7) {
            $data['active'] = 7;
            $data['miles_active'] = 1;
            $data['task_active'] = 1;
            $data['bugs_active'] = 1;
            $data['estimate'] = 1;
            if (!empty($op_id)) {
                $data['time_active'] = 2;
                $data['project_timer_info'] = $this->items_model->check_by(array('tasks_timer_id' => $op_id), 'tbl_tasks_timer');
            } else {
                $data['time_active'] = 1;
            }
        } elseif ($active == 8) {
            $data['active'] = 8;
            $data['miles_active'] = 1;
            $data['task_active'] = 1;
            $data['bugs_active'] = 1;
            $data['time_active'] = 1;
            $data['estimate'] = 1;
        } elseif ($active == 10) {
            $data['active'] = 10;
            $data['miles_active'] = 1;
            $data['task_active'] = 1;
            $data['bugs_active'] = 1;
            $data['time_active'] = 1;
            $data['estimate'] = 1;
        } elseif ($active == 13) {
            $data['active'] = 13;
            $data['miles_active'] = 1;
            $data['task_active'] = 1;
            $data['bugs_active'] = 1;
            $data['time_active'] = 1;
            $data['estimate'] = 1;
        } elseif ($active == 15) {
            $data['active'] = 15;
            $data['miles_active'] = 1;
            $data['task_active'] = 1;
            $data['bugs_active'] = 1;
            $data['time_active'] = 1;
            $data['estimate'] = 1;
        } else {
            $data['active'] = 1;
            $data['miles_active'] = 1;
            $data['task_active'] = 1;
            $data['bugs_active'] = 1;
            $data['time_active'] = 1;
            $data['estimate'] = 1;
        }
        //  print_r($data);
        $this->load->view('layout/header');
        $this->load->view('pages/projectDetails', $data);
        $this->load->view('layout/footer');
    }
    public function create_project()
    {
        $date = date('Y-m-d H:i:s');
        unset($_POST['everyone']);
        unset($_POST['vehicle2']);
        unset($_POST['vehicle1']);
        unset($_POST['editor1']);
        $token = $_POST['token_amount'];
        $fp = $_POST['fixed_rate'];
        // print_r($token);die;
        $remaining_amt = (integer) $fp - $token;
        $_POST['remaining_amt'] = $remaining_amt;
        $permission = $_POST['permission'];
        $session = $this->session->userdata('logged_user');
        $user_id = $session[0]->user_id;
        $result = $this->Projects_Model->create_project($_POST);
        if ($result == true) {
            if ($permission == "all") {
                $fetch_users = $this->User_model->fetch_all_employees_admin();
                foreach ($fetch_users as $users) {
                    $emp_id = $users->user_id;
                    $new_data = array('date' => $date,
                        'description' => 'Project',
                        'from_user_id' => $user_id,
                        'to_user_id' => $emp_id,
                        'link' => 'Projects',
                        'value' => $_POST['project_name']);
                    $notify = $this->Notification_model->insert_notification($new_data);
                }
            } else {
                $new = json_decode($permission);
                foreach ($new as $key => $value) {
                    $new_data = array('date' => $date,
                        'description' => 'Project',
                        'from_user_id' => $user_id,
                        'to_user_id' => $key,
                        'link' => 'Projects',
                        'value' => $_POST['project_name']);
                    $notify = $this->Notification_model->insert_notification($new_data);
                }
            }
            die(json_encode(array('status' => '1', 'msg' => 'Project Created Successfully')));
        } else {
            die(json_encode(array('status' => '0', 'msg' => 'Project With Same Name Already Exists')));
        }
    }

    public function upload_project()
    {

        $data = array();

        // Count total files
        $countfiles = count($_FILES['files']['name']);

        // Looping all files
        for ($i = 0; $i < $countfiles; $i++) {

            // if(!empty($_FILES['files']['name'][$i])){

            // Define new $_FILES array - $_FILES['file']
            $_FILES['file']['name'] = $_FILES['files']['name'][$i];
            $_FILES['file']['type'] = $_FILES['files']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES['files']['error'][$i];
            $_FILES['file']['size'] = $_FILES['files']['size'][$i];

            // Set preference
            $config['upload_path'] = 'uploads/project_uploads/';
            $config['allowed_types'] = '*';
            //$config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = $_FILES['files']['name'][$i];

            //Load upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // File upload
            if ($this->upload->do_upload('file')) {
                // Get data about the file
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];

                // Initialize array
                $uploaded_files[] = $filename;
            }
            // else{
            //     $error = array('error' => $this->upload->display_errors());
            //     print_r($error);
            // }
            // }

        }
        $file_list = implode(',', $uploaded_files);
        $project_id = $_POST['project_id'];
        $fetch_project = $this->Projects_Model->fetch_project($project_id);
        if ($fetch_project[0]['uploads'] == null) {
            $result = $this->Projects_Model->upload_project($project_id, $file_list);
            if ($result) {
                die(json_encode(array('status' => '1', 'msg' => 'Uploaded Successfully')));
            } else {
                die(json_encode(array('status' => '0', 'msg' => 'Something Went Wrong')));
            }
        } else {
            $old_uploads = $fetch_project[0]['uploads'];
            $xplode = explode(',', $old_uploads);
            $fnal_files = array_merge($uploaded_files, $xplode);
            $final_files = implode(',', $fnal_files);
            $result = $this->Projects_Model->upload_project($project_id, $final_files);
            if ($result) {
                die(json_encode(array('status' => '1', 'msg' => 'Uploaded Successfully')));
            } else {
                die(json_encode(array('status' => '0', 'msg' => 'Something Went Wrong')));
            }
        }
    }

    public function fetch_all_projects()
    {
        $projects = $this->Projects_Model->fetch_projects();
        die(json_encode(array('status' => '1', "data" => $projects)));
    }

    public function fetch_project()
    {
        $project_id = $_POST['project_id'];
        $result = $this->Projects_Model->fetch_project($project_id);
        if ($result) {
            die(json_encode(array('status' => '1', 'data' => $result)));
        } else {
            die(json_encode(array('status' => '0', 'msg' => 'no data ')));
        }
    }

    public function update_project()
    {
        $result = $this->Projects_Model->update_project($_POST);
        if ($result) {
            die(json_encode(array('status' => '1', 'msg' => 'Successfully Updated')));
        } else {
            die(json_encode(array('status' => '0', 'msg' => 'Failed')));
        }
    }

    public function update_projecter($id, $string)
    {
        $project_id = $id;
        $project_status = $string;
        $update = $this->Projects_Model->update_projecter($project_id, $project_status);
        redirect('Projects');
    }

    public function delete_project()
    {
        $id = $_POST['project_id'];
        $result = $this->Projects_Model->delete_project($id);
        if ($result == true) {
            die(json_encode(array('status' => '1', 'msg' => 'Successfully Deleted')));
        } else {
            die(json_encode(array('status' => '0', 'msg' => 'Failed')));
        }
    }

    public function downloader()
    {
        $project_id = $this->uri->segment(3);
        $result = $this->Projects_Model->fetch_project($project_id);
        $files = $result[0]['uploads'];
        $main_files = explode(",", $files);
        // foreach ($main_files as $filer) {
        //     $path="./uploads/project_uploads/".$filer;
        //     $this->file_download($path);
        // }
        $zip = new ZipArchive();
        $zip_name = "uploads/project_uploads/" . time() . ".zip"; // Zip name
        $zip->open($zip_name, ZipArchive::CREATE);
        foreach ($main_files as $file) {
            $path = "./uploads/project_uploads/" . $file;
            if (file_exists($path)) {
                $zip->addFromString(basename($path), file_get_contents($path));
            } else {
                echo "file does not exist";
            }
        }
        $zip->close();
        $this->file_download($zip_name);
    }

    public function file_download($file_name)
    {

        $this->load->helper('download');
        force_download($file_name, null);
        //  $data = file_get_contents($file_name);
        // // $name = 'My_new_name.pdf'; // custom file name for your download

        //  //force_download($name, $data);
        //  force_download($file_name, NULL); //will get the file name for you
    }
    // function projectDetails($id){

    // }
    public function ChangeStatusByPro_id()
    {
        $pro_id = $this->input->post('project_id');
        $dataaa = array('project_status' => $this->input->post('pro_status'));
        $data = $this->Projects_Model->changeProStatusById($dataaa, $pro_id);
        die(json_encode(array('code' => 1, 'data' => $data)));

    }

}
