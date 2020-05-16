<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Leave_model', 'leave');
        $this->load->model('Accounts_model', 'Accounts');
        $this->load->model('Expense_model', 'Expenses');
        $this->load->model('Client_Model', 'Client');
        $this->load->model('Payments_model', 'Payments');
        $this->load->model('Transactions_model', 'Transaction');
        $this->load->model('User_model');
    }

    public function index()
    {

        echo 'Working';
    }

    public function expense()
    {
        $session = $this->session->userdata('logged_user');
        $designation_id = $session[0]->designations_id;
        $user_id = $session[0]->user_id;
        $data['UsersPermission'] = $this->User_model->CheckUserPermission($user_id);
        $data['Assign_permission'] = $this->Transaction->CheckPermission($designation_id);
        $data['fetch_Account_Data'] = $this->Accounts->AllAccountData();
        $data['fetch_Expenses_Category'] = $this->Expenses->fetchExpensesCategory();
        $data['fetch_Client_Data'] = $this->Client->getClientDetails();
        $data['fetch_Method_Data'] = $this->Payments->fetchMethodData();
        $data['All_expense_Data'] = $this->Transaction->fetchAllTransactionData();
        $this->load->view('layout/header');
        $this->load->view("pages/expense", $data);
        $this->load->view("layout/footer");
    }
    public function Edit_Expense($id)
    {
        $data['fetch_Account_Data'] = $this->Accounts->AllAccountData();
        $data['Expense_DataById'] = $this->Transaction->fetchTransactionDataById($id);
        $data['fetch_Expenses_Category'] = $this->Expenses->fetchExpensesCategory();
        $data['fetch_Client_Data'] = $this->Client->getClientDetails();
        $data['fetch_Method_Data'] = $this->Payments->fetchMethodData();
        $this->load->view('layout/header');
        $this->load->view("pages/edit_expense", $data);
        $this->load->view("layout/footer");
    }
    public function Expense_Modal_Detailss()
    {

        $transid = $this->input->post('transactions_id');
        $data = $this->Transaction->fetchTransactionDataByIdToModal($transid);
        die(json_encode(array('msg' => 1, 'data' => $data)));
        //print_r($transid);
    }
    public function Deposit_Modal_Detailss()
    {
        $transid = $this->input->post('transactions_id');
        $data = $this->Transaction->fetchDepositTransactionDataByIdToModal($transid);
        die(json_encode(array('msg' => 1, 'data' => $data)));
        //print_r($transid);

    }
    public function deposit()
    {
        $session = $this->session->userdata('logged_user');
        $designation_id = $session[0]->designations_id;
        $user_id = $session[0]->user_id;
        $data['UsersPermission'] = $this->User_model->CheckUserPermission($user_id);
        $data['Assign_permission'] = $this->Transaction->CheckPermission($designation_id);
        $data['fetch_Account_Data'] = $this->Accounts->AllAccountData();
        $data['fetch_Expenses_Category'] = $this->Expenses->fetchExpensesCategory();
        $data['fetch_Client_Data'] = $this->Client->getClientDetails();
        $data['fetch_Method_Data'] = $this->Payments->fetchMethodData();
        $data['All_expense_Data'] = $this->Transaction->fetchAllDepositTransactionData();
        $this->load->view('layout/header');
        $this->load->view("pages/deposit", $data);
        $this->load->view("layout/footer");
    }

    public function transfer()
    {
        $session = $this->session->userdata('logged_user');
        $designation_id = $session[0]->designations_id;
        $user_id = $session[0]->user_id;
        $data['UsersPermission'] = $this->User_model->CheckUserPermission($user_id);
        $data['Assign_permission'] = $this->Transaction->CheckPermission($designation_id);
        $data['fetch_Account_Data'] = $this->Accounts->AllAccountData();
        $data['fetch_Method_Data'] = $this->Payments->fetchMethodData();
        $TransaferAAray = $this->Transaction->fetchAllTransferData();
        $finalTransferDetail = array();
        foreach ($TransaferAAray as $key => $value) {
            # code...
            // echo  ' To Account : '.$this->getName($value->to_account_id);
            // echo  ' From Account : '.$this->getName($value->from_account_id);
            $finalTransferDetail[] = array(
                "From" => $this->getName($value->from_account_id),
                "To" => $this->getName($value->to_account_id),
                "Amount" => $value->amount,
                "Date" => $value->date,
                "Attachement" => $value->attachement,
                "TransferId" => $value->transfer_id,
            );
        }
        // print_r($finalTransferDetail);
        // print_r( $TransaferAAray);
        // die();
        $data['All_Transfer_Data'] = $finalTransferDetail;
        $this->load->view('layout/header');
        $this->load->view("pages/transfer", $data);
        $this->load->view("layout/footer");
    }
    public function getName($user_id)
    {
        $result = $this->db->where('user_id', $user_id)->get('tbl_account_details')->result();
        return $result[0]->fullname;
    }
    public function Edit_Transfer($id)
    {
        $data['fetch_Method_Data'] = $this->Payments->fetchMethodData();
        $data['fetch_Account_Data'] = $this->Accounts->AllAccountData();
        $data['Transfer_DataById'] = $this->Transaction->fetchTransferDataById($id);
        $this->load->view('layout/header');
        $this->load->view("pages/edit_tranfer", $data);
        $this->load->view("layout/footer");
    }
    public function TransactionReport()
    {
        $data['transaction_report'] = $this->Transaction->fetch_transactions();
        $this->load->view('layout/header');
        $this->load->view("pages/transaction_report", $data);
        $this->load->view("layout/footer");
    }

    public function TransferReport()
    {
        $this->load->view('layout/header');
        $this->load->view("pages/transfer_report");
        $this->load->view("layout/footer");
    }
    public function BankAndCash()
    {
        $this->load->view('layout/header');
        $this->load->view("pages/manage_account");
        $this->load->view("layout/footer");
    }
    public function AddNewAccount()
    {
        $data = array('account_name' => $this->input->post('account_name'),
            'description' => $this->input->post('Description'),
            'balance' => $this->input->post('initial_balance'));
        $results = $this->Accounts->addAccountData($data);
        switch ($results) {
            case 0:$this->session->set_flashdata('msg', 'Error');
                break;
            case 1:$this->session->set_flashdata('msg', 'Account Information Added Successfully');
                break;

            default:$this->session->set_flashdata('msg', 'Error');
                break;
        }
        redirect('Transaction/expense');
    }
    public function AddNewExpensesCategory()
    {
        $data = array('expense_category' => $this->input->post('expenses_name'),
            'description' => $this->input->post('expense_description'),
        );
        $results = $this->Expenses->addExpenseCategoryData($data);
        switch ($results) {
            case 0:$this->session->set_flashdata('msg', 'Error');
                break;
            case 1:$this->session->set_flashdata('msg', 'Expenses Category Added Successfully');
                break;

            default:$this->session->set_flashdata('msg', 'Error');
                break;
        }
        redirect('Transaction/expense');
    }
    public function AddMethodName()
    {
        $data = array('method_name' => $this->input->post('method_name'));
        $results = $this->Payments->addPaymentsMethod($data);
        switch ($results) {
            case 0:$this->session->set_flashdata('msg', 'Error');
                break;
            case 1:$this->session->set_flashdata('msg', 'Method Added Successfully');
                break;

            default:$this->session->set_flashdata('msg', 'Error');
                break;
        }
        redirect('Transaction/expense');
    }

    public function AddExpenseData()
    {
        $type = 2;
        $total_balance = $this->input->post('account_total_balance');
        $users_seesion_id = $this->input->post('users_idforTransaction');

        $data = array();
        // If file upload form submitted
        if (!empty($_FILES['files']['name'])) {
            $filesCount = count($_FILES['files']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
                $_FILES['file']['name'] = "expense-image" . date("Y-m-d-H-i-s") . $i . "." . $ext;
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                // File upload configuration
                $uploadPath = './uploads/expense/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc';

                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Upload file to server
                if ($this->upload->do_upload('file')) {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                } else {
                    echo 'not ';
                }
                $attach[] = $_FILES['file']['name'];

            }
            $expenseFiles = implode(",", $attach);
            // $videos=implode(",",$images);
            if (!empty($uploadData)) {
                // Insert files data into the database

                $uploadDate = date("Y-m-d H:i:s");
                $data = array(
                    'name' => $this->input->post('expense_title'),
                    'account_id' => $this->input->post('account_id'),
                    'date' => $this->input->post('expensedate'),
                    'notes' => $this->input->post('short_note'),
                    'amount' => $this->input->post('expenseamount'),
                    'category_id' => $this->input->post('expenses_cat_id'),
                    'paid_by' => $this->input->post('paid_by_id'),
                    'payment_methods_id' => $this->input->post('payment_methods_id'),
                    'reference' => $this->input->post('expensereference'),
                    'permission' => $this->input->post('permission'),
                    'added_by' => $users_seesion_id,
                    'total_balance' => $total_balance,
                    'type' => $type,
                    'attachement' => $expenseFiles,
                    "company_id" => $this->session->userdata('logged_user')[0]->company_id,
                );
                //    print_r($data);
                $results = $this->Expenses->addExpenseData($data);
                switch ($results) {
                    case 0:
                        die(json_encode(array('status' => 0, 'msg' => "failed try again")));
                        break;
                    case 1:
                        die(json_encode(array('status' => 1, 'msg' => "Expense Added Successfully")));
                        break;
                    default:
                        die(json_encode(array('status' => 0, 'msg' => "failed try again")));
                        break;
                }

            } else {
                die(json_encode(array('status' => '2', 'msg' => 'File Not Be Empty')));
            }
            // image if end
        } else {
            die(json_encode(array('status' => '0', 'msg' => 'Error Try Again ')));
        }

    }
    public function fetchUserBalance()
    {
        $data = array('account_id' => $this->input->post('user_id'));
        $results = $this->Accounts->fetchBalanceBy_id($data);
        die(json_encode(array('status' => 1, 'data' => $results)));

    }

    public function AddNewAccountforDeposit()
    {
        // print_r($_POST);
        $data = array('account_name' => $this->input->post('account_name'),
            'description' => $this->input->post('Description'),
            'balance' => $this->input->post('initial_balance'));
        // print_r($data);
        $results = $this->Accounts->addAccountData($data);
        if ($results) {

            die(json_encode(array('status' => 1, 'msg' => " Account Information Added Successfully")));
        } else {
            die(json_encode(array('status' => 0, 'msg' => "failed try again")));
        }

    }
    public function AddDepositNewExpensesCategory()
    {
        $data = array('expense_category' => $this->input->post('expenses_name'),
            'description' => $this->input->post('expense_description'),
        );
        $results = $this->Expenses->addExpenseCategoryData($data);
        if ($results) {

            die(json_encode(array('status' => 1, 'msg' => " Expenses Category Added Successfully")));
        } else {
            die(json_encode(array('status' => 0, 'msg' => "failed try again")));
        }

    }
    public function AddDepositMethodName()
    {
        $data = array('method_name' => $this->input->post('method_name'));
        $results = $this->Payments->addPaymentsMethod($data);
        if ($results) {

            die(json_encode(array('status' => 1, 'msg' => " Method Added Successfully")));
        } else {
            die(json_encode(array('status' => 0, 'msg' => "failed try again")));
        }
    }
    public function AddDepositData()
    {
        $type = 1;
        $total_balance = $this->input->post('account_total_balance');
        $users_seesion_id = $this->input->post('users_idforTransaction');

        $data = array();
        // If file upload form submitted
        if (!empty($_FILES['files']['name'])) {
            $filesCount = count($_FILES['files']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
                $_FILES['file']['name'] = "deposit-image" . date("Y-m-d-H-i-s") . $i . "." . $ext;
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                // File upload configuration
                $uploadPath = './uploads/deposit/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|csv|xlsx';

                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Upload file to server
                if ($this->upload->do_upload('file')) {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                }
                $attach[] = $_FILES['file']['name'];

            }
            $expenseFiles = implode(",", $attach);
            // $videos=implode(",",$images);
            if (!empty($uploadData)) {
                // Insert files data into the database

                $uploadDate = date("Y-m-d H:i:s");
                $data = array(
                    'name' => $this->input->post('depo_title'),
                    'account_id' => $this->input->post('account_id'),
                    'date' => $this->input->post('depodate'),
                    'notes' => $this->input->post('short_note'),
                    'amount' => $this->input->post('depoamount'),
                    'category_id' => $this->input->post('depo_cat_id'),
                    'paid_by' => $this->input->post('paid_by_id'),
                    'payment_methods_id' => $this->input->post('payment_methods_id'),
                    'reference' => $this->input->post('deporeference'),
                    'permission' => $this->input->post('permission'),
                    'added_by' => $users_seesion_id,
                    'total_balance' => $total_balance,
                    'type' => $type,
					'attachement' => $expenseFiles,
					'company_id'=>$this->session->userdata('logged_user')[0]->company_id
                );
                //    print_r($data);
                $results = $this->Expenses->addExpenseData($data);
                switch ($results) {
                    case 0:$this->session->set_flashdata('msg', 'Error');
                        break;
                    case 1:$this->session->set_flashdata('msg', 'Deposit Added Successfully');
                        break;

                    default:$this->session->set_flashdata('msg', 'Error');
                        break;
                }
                redirect('Transaction/deposit');
            } else {
                die(json_encode(array('status' => '2', 'msg' => 'code error')));
            }
            // image if end
        } else {
            die(json_encode(array('status' => '3', 'msg' => 'Error Try Again ')));
        }

    }
    public function Edit_Deposit($id)
    {
        $data['fetch_Account_Data'] = $this->Accounts->AllAccountData();
        $data['Deposit_DataById'] = $this->Transaction->fetchDepositDataById($id);
        $data['fetch_Expenses_Category'] = $this->Expenses->fetchExpensesCategory();
        $data['fetch_Client_Data'] = $this->Client->getClientDetails();
        $data['fetch_Method_Data'] = $this->Payments->fetchMethodData();
        $this->load->view('layout/header');
        $this->load->view("pages/edit_deposit", $data);
        $this->load->view("layout/footer");
    }

    public function AddTransferData()
    {

        $type = 'Transfer';
        // $total_balance=$this->input->post('account_total_balance');
        // $users_seesion_id=$this->input->post('users_idforTransaction');

        $data = array();
        // If file upload form submitted
        if (!empty($_FILES['files']['name'])) {
            $filesCount = count($_FILES['files']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
                $_FILES['file']['name'] = "transfer-image" . date("Y-m-d-H-i-s") . $i . "." . $ext;
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                // File upload configuration
                $uploadPath = './uploads/transfer/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|csv|xlsx';

                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Upload file to server
                if ($this->upload->do_upload('file')) {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                }
                $attach[] = $_FILES['file']['name'];

            }
            $tranferFiles = implode(",", $attach);
            // $videos=implode(",",$images);
            if (!empty($uploadData)) {
                // Insert files data into the database
                $uploadDate = date("Y-m-d H:i:s");
                $data = array(
                    'from_account_id' => $this->input->post('From_Account_id'),
                    'to_account_id' => $this->input->post('To_Account_id'),
                    'date' => $this->input->post('transferdate'),
                    'notes' => $this->input->post('short_note'),
                    'amount' => $this->input->post('transfer_amount'),
                    'payment_methods_id' => $this->input->post('payment_methods_id'),
                    'reference' => $this->input->post('transferreference'),
                    'permission' => $this->input->post('permission'),
                    // 'added_by'=>$users_seesion_id,
                    // 'total_balance'=>$total_balance,
                    'type' => $type,
                    'attachement' => $tranferFiles,
                );
                //    print_r($data);
                $results = $this->Transaction->addTransferData($data);
                switch ($results) {
                    case 0:$this->session->set_flashdata('msg', 'Error');
                        break;
                    case 1:$this->session->set_flashdata('msg', 'Transaction Transfer Successfully');
                        break;

                    default:$this->session->set_flashdata('msg', 'Error');
                        break;
                }
                redirect('Transaction/transfer');
            } else {
                die(json_encode(array('status' => '2', 'msg' => 'code error')));
            }
            // image if end
        } else {
            die(json_encode(array('status' => '3', 'msg' => 'Error Try Again ')));
        }

    }
    public function deleteParticularImageFromArray()
    {

        $imgIndex = $this->input->post('imgIndex');
        $imgString = $this->input->post('imgString');
        $imgArray = explode(',', $imgString);
        // print_r($imgArray);
        if (array_splice($imgArray, $imgIndex, 1)) {
            // print_r(print_r($imgArray));
            $newImageString = implode(',', $imgArray);
            die(json_encode(array("code" => 1, "newString" => $newImageString)));
        } else {
            // print_r($imgArray);
            die(json_encode(array("code" => 0)));
        }
    }
    public function UpdateExpenseData()
    {
        // $type=2;
        // $total_balance=$this->input->post('account_total_balance');
        $users_seesion_id = $this->input->post('users_idforTransaction');

        $data = array();
        // If file upload form submitted
        if (!empty($_FILES['files']['name'])) {
            $filesCount = count($_FILES['files']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
                $_FILES['file']['name'] = "expense-image" . date("Y-m-d-H-i-s") . $i . "." . $ext;
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                // File upload configuration
                $uploadPath = './uploads/expense/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|csv|xlsx';

                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Upload file to server
                if ($this->upload->do_upload('file')) {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                }
                $attach[] = $_FILES['file']['name'];

            }
            $expenseFiles = implode(",", $attach);
            // $videos=implode(",",$images);
            if (!empty($uploadData) || empty($uploadData)) {
                // Insert files data into the database

                $uploadDate = date("Y-m-d H:i:s");
                $transId = $this->input->post('trans_id');
                $account_id = $this->input->post('accountsss_id');
                $amount = $this->input->post('expenseamount');
                $data = array(
                    'name' => $this->input->post('expense_title'),
                    'account_id' => $account_id,
                    'date' => $this->input->post('expensedate'),
                    'notes' => $this->input->post('short_note'),
                    'amount' => $amount,
                    'category_id' => $this->input->post('expenses_cat_id'),
                    'paid_by' => $this->input->post('paid_by_id'),
                    'payment_methods_id' => $this->input->post('payment_methods_id'),
                    'reference' => $this->input->post('expensereference'),
                    'permission' => $this->input->post('permission'),
                    'added_by' => $users_seesion_id,
                    // 'total_balance'=>$total_balance,
                    // 'type'=>$type,
                    'attachement' => $expenseFiles,
                );
                //    print_r($data);
                $results = $this->Expenses->UpdateExpense($data, $transId);
                switch ($results) {
                    case 0:$this->session->set_flashdata('msg', 'Error');
                        break;
                    case 1:$this->session->set_flashdata('msg', 'Expense Updated Successfully');
                        break;

                    default:$this->session->set_flashdata('msg', 'Error');
                        break;
                }
                redirect('Transaction/expense');
            } else {
                die(json_encode(array('status' => '2', 'msg' => 'code error')));
            }
            // image if end
        } else {
            die(json_encode(array('status' => '3', 'msg' => 'Error Try Again ')));
        }

    }
    public function DeleteTransaction()
    {

        $data = array('transactions_id' => $this->input->post('transactions_id'));

        $results = $this->Transaction->DeleteTransaction($data);
        die(json_encode($results));

    }
    public function UpdateDepositData()
    {
        // $type=2;
        // $total_balance=$this->input->post('account_total_balance');
        $users_seesion_id = $this->input->post('users_idforTransaction');

        $data = array();
        // If file upload form submitted
        if (!empty($_FILES['files']['name'])) {
            $filesCount = count($_FILES['files']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
                $_FILES['file']['name'] = "deposit-image" . date("Y-m-d-H-i-s") . $i . "." . $ext;
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                // File upload configuration
                $uploadPath = './uploads/deposit';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|csv|xlsx';

                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Upload file to server
                if ($this->upload->do_upload('file')) {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                }
                $attach[] = $_FILES['file']['name'];

            }
            $depositFiles = implode(",", $attach);
            // $videos=implode(",",$images);
            if (!empty($uploadData) || empty($uploadData)) {
                // Insert files data into the database

                $uploadDate = date("Y-m-d H:i:s");
                $transId = $this->input->post('trans_id');
                $account_id = $this->input->post('accountsss_id');
                $amount = $this->input->post('depoamount');
                $data = array(
                    'name' => $this->input->post('depo_title'),
                    'account_id' => $account_id,
                    'date' => $this->input->post('depodate'),
                    'notes' => $this->input->post('short_note'),
                    'amount' => $amount,
                    'category_id' => $this->input->post('expenses_cat_id'),
                    'paid_by' => $this->input->post('paid_by_id'),
                    'payment_methods_id' => $this->input->post('payment_methods_id'),
                    'reference' => $this->input->post('deporeference'),
                    'permission' => $this->input->post('permission'),
                    'added_by' => $users_seesion_id,
                    // 'total_balance'=>$total_balance,
                    // 'type'=>$type,
                    'attachement' => $depositFiles,
                );
                //    print_r($data);
                $results = $this->Expenses->UpdateDeposit($data, $transId);
                switch ($results) {
                    case 0:$this->session->set_flashdata('msg', 'Error');
                        break;
                    case 1:$this->session->set_flashdata('msg', 'Deposit Updated Successfully');
                        break;

                    default:$this->session->set_flashdata('msg', 'Error');
                        break;
                }
                redirect('Transaction/deposit');
            } else {
                die(json_encode(array('status' => '2', 'msg' => 'code error')));
            }
            // image if end
        } else {
            die(json_encode(array('status' => '3', 'msg' => 'Error Try Again ')));
        }

    }
    public function deleteParticularImageFromArraydeposit()
    {

        $imgIndex = $this->input->post('imgIndex');
        $imgString = $this->input->post('imgString');
        $imgArray = explode(',', $imgString);
        // print_r($imgArray);
        if (array_splice($imgArray, $imgIndex, 1)) {
            // print_r(print_r($imgArray));
            $newImageString = implode(',', $imgArray);
            die(json_encode(array("code" => 1, "newString" => $newImageString)));
        } else {
            // print_r($imgArray);
            die(json_encode(array("code" => 0)));
        }
    }
    public function DeleteDepositTransaction()
    {

        $data = array('transactions_id' => $this->input->post('transactions_id'));

        $results = $this->Transaction->DeleteDepositData($data);
        die(json_encode($results));

    }
    public function DeleteTranferTransaction()
    {

        $data = array('transfer_id' => $this->input->post('transactions_id'));

        $results = $this->Transaction->DeleteTransferData($data);
        die(json_encode($results));

    }
    public function UpdateTransferData()
    {
        $type = 'Transfer';
        $data = array();
        if (!empty($_FILES['files']['name'])) {
            $filesCount = count($_FILES['files']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
                $_FILES['file']['name'] = "transfer-image" . date("Y-m-d-H-i-s") . $i . "." . $ext;
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                // File upload configuration
                $uploadPath = './uploads/transfer/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|csv|xlsx';

                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Upload file to server
                if ($this->upload->do_upload('file')) {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                }
                $attach[] = $_FILES['file']['name'];

            }
            $tranferFiles = implode(",", $attach);
            // $videos=implode(",",$images);

            // Insert files data into the database
            $uploadDate = date("Y-m-d H:i:s");
            $transId = $this->input->post('trans_id');
            $data = array(
                'from_account_id' => $this->input->post('from_account'),
                'to_account_id' => $this->input->post('to_account'),
                'date' => $this->input->post('transdate'),
                'notes' => $this->input->post('short_note'),
                'amount' => $this->input->post('transfer_amount'),
                'payment_methods_id' => $this->input->post('payment_methods_id'),
                'reference' => $this->input->post('transferreference'),
                'permission' => $this->input->post('permission'),
                // 'added_by'=>$users_seesion_id,
                // 'total_balance'=>$total_balance,
                'type' => $type,
                'attachement' => $tranferFiles,
            );

        } else {
            $data = array(
                'from_account_id' => $this->input->post('from_account'),
                'to_account_id' => $this->input->post('to_account'),
                'date' => $this->input->post('transdate'),
                'notes' => $this->input->post('short_note'),
                'amount' => $this->input->post('transfer_amount'),
                'payment_methods_id' => $this->input->post('payment_methods_id'),
                'reference' => $this->input->post('transferreference'),
                'permission' => $this->input->post('permission'),
                // 'added_by'=>$users_seesion_id,
                // 'total_balance'=>$total_balance,
                'type' => $type,
            );
        }
        $results = $this->Transaction->UpdateTransferData($data, $transId);
        switch ($results) {
            case 0:$this->session->set_flashdata('msg', 'Error');
                break;
            case 1:$this->session->set_flashdata('msg', 'update Transfer Successfully');
                break;

            default:$this->session->set_flashdata('default', 'Error');
                break;
        }
        redirect('Transaction/transfer');

    }

}
