<?php

/**
 * Description of Project_Model
 *
 * @author NaYeM
 */
class Transactions_model extends MY_Model
{

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function get_deposit($filterBy = null, $type = null)
    {
        $deposits = array();
        $all_deposits = array_reverse($this->get_permission('tbl_transactions', array('type' => 'Income')));
        if (empty($filterBy)) {
            return $all_deposits;
        } else {
            foreach ($all_deposits as $v_deposits) {
                if ($type == 'by_account' && $v_deposits->account_id == $filterBy) {
                    array_push($deposits, $v_deposits);
                }
                if ($type == 'by_category' && $v_deposits->category_id == $filterBy) {
                    array_push($deposits, $v_deposits);
                }
            }
        }
        return $deposits;
    }

    public function fetch_transactions(){
        $this->db->select('*');
        $this->db->from('tbl_transactions');
        $this->db->join('tbl_account_details', 'tbl_transactions.account_id=tbl_account_details.user_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_expense($filterBy = null, $type = null)
    {
        $expense = array();
        $all_expense = array_reverse($this->get_permission('tbl_transactions', array('type' => 'Expense')));
        if (empty($filterBy)) {
            return $all_expense;
        } else {
            foreach ($all_expense as $v_expense) {
                if ($type == 'by_account' && $v_expense->account_id == $filterBy) {
                    array_push($expense, $v_expense);
                }
                if ($type == 'by_category' && $v_expense->category_id == $filterBy) {
                    array_push($expense, $v_expense);
                }
            }
        }
        return $expense;
    }


    public function get_transfer($filterBy = null, $type = null)
    {
        $transfer = array();
        $all_transfer = array_reverse($this->get_permission('tbl_transfer'));
        if (empty($filterBy)) {
            return $all_transfer;
        } else {
            foreach ($all_transfer as $v_transfer) {
                if ($type == 'to_account' && $v_transfer->to_account_id == $filterBy) {
                    array_push($transfer, $v_transfer);
                } elseif ($type == 'from_account' && $v_transfer->from_account_id == $filterBy) {
                    array_push($transfer, $v_transfer);
                }
            }
        }
        return $transfer;
    }

    public function get_transactions_report($filterBy = null)
    {
        $transactions_report = array();
        $all_transactions_report = array_reverse($this->get_permission('tbl_transactions'));
        if (empty($filterBy)) {
            return $all_transactions_report;
        } else {
            foreach ($all_transactions_report as $v_transactions_report) {
                if ($v_transactions_report->account_id == $filterBy) {
                    array_push($transactions_report, $v_transactions_report);
                }
            }
        }
        return $transactions_report;
    }
     public function fetchAllTransactionData()
    {
        $company_id=$this->session->userdata('logged_user')[0]->company_id;
        $company_id=$company_id?$company_id:'""';
        return $this->db->query("select tbl_transactions.*,tbl_accounts.*,tbl_accounts.account_name as accountholdername,tbl_expense_category.*,tbl_client.*,tbl_payment_methods.*,tbl_transactions.account_id as account_name,tbl_transactions.category_id as expense_category,tbl_transactions.name as transname from tbl_transactions join tbl_accounts on tbl_accounts.account_id=tbl_transactions.account_id  join  tbl_expense_category on tbl_expense_category.expense_category_id=tbl_transactions.category_id join tbl_client on tbl_client.client_id=tbl_transactions.paid_by join tbl_payment_methods on tbl_payment_methods.payment_methods_id=tbl_transactions.payment_methods_id where tbl_transactions.company_id=$company_id and tbl_transactions.type='Expense'")->result();
    }
    public function fetchAllDepositTransactionData()
    {
        $company_id=$this->session->userdata('logged_user')[0]->company_id;
        $company_id=$company_id?$company_id:'""';
        return $this->db->query("select  tbl_transactions.*,tbl_accounts.*,tbl_accounts.account_name as accountholdername,tbl_expense_category.*,tbl_client.*,tbl_client.name as client_name,tbl_payment_methods.*,tbl_transactions.account_id as account_name,tbl_transactions.category_id as expense_category,tbl_transactions.name as depo_name from tbl_transactions join tbl_accounts on tbl_accounts.account_id=tbl_transactions.account_id  join  tbl_expense_category on tbl_expense_category.expense_category_id=tbl_transactions.category_id join tbl_client on tbl_client.client_id=tbl_transactions.paid_by join tbl_payment_methods on tbl_payment_methods.payment_methods_id=tbl_transactions.payment_methods_id where tbl_transactions.company_id=$company_id and tbl_transactions.type='Income'")->result();
    }
    public function DeleteTransaction($data)
    {
        $this->db->where($data);
         $results=$this->db->delete('tbl_transactions');
         if($results)
            {
                return 1;
            }
    
            else
            {
                return 0;
            }
    }
    public function DeleteDepositData($data)
    {
        $this->db->where($data);
         $results=$this->db->delete('tbl_transactions');
         if($results)
            {
                return 1;
            }
    
            else
            {
                return 0;
            }
    }
    public function fetchTransactionDataByIdToModal($transid)
    {
        return $this->db->query("select tbl_transactions.*,tbl_accounts.*,tbl_accounts.account_name as accountholdername,tbl_expense_category.*,tbl_expense_category.expense_category as expense_name,tbl_client.*,tbl_client.name as clientname,tbl_payment_methods.*,tbl_transactions.account_id as account_name,tbl_transactions.category_id as expense_category,tbl_transactions.date as transactiondate,tbl_transactions.name as transname,tbl_transactions.status as transaction_status,tbl_transactions.amount as transamount from tbl_transactions join tbl_accounts on tbl_accounts.account_id=tbl_transactions.account_id  join  tbl_expense_category on tbl_expense_category.expense_category_id=tbl_transactions.category_id join tbl_client on tbl_client.client_id=tbl_transactions.paid_by join tbl_payment_methods on tbl_payment_methods.payment_methods_id=tbl_transactions.payment_methods_id where tbl_transactions.type='Expense' && tbl_transactions.transactions_id='$transid'")->result();
    }
    public function fetchDepositTransactionDataByIdToModal($transid)
    {
        return $this->db->query("select tbl_transactions.*,tbl_accounts.*,tbl_accounts.account_name as accountholdername,tbl_expense_category.*,tbl_expense_category.expense_category as expense_name,tbl_client.*,tbl_client.name as clientname,tbl_payment_methods.*,tbl_transactions.account_id as account_name,tbl_transactions.category_id as expense_category,tbl_transactions.date as transactiondate,tbl_transactions.name as transname,tbl_transactions.status as transaction_status,tbl_transactions.amount as transamount from tbl_transactions join tbl_accounts on tbl_accounts.account_id=tbl_transactions.account_id  join  tbl_expense_category on tbl_expense_category.expense_category_id=tbl_transactions.category_id join tbl_client on tbl_client.client_id=tbl_transactions.paid_by join tbl_payment_methods on tbl_payment_methods.payment_methods_id=tbl_transactions.payment_methods_id where tbl_transactions.type='Income' && tbl_transactions.transactions_id='$transid'")->result();
    }
     public function fetchDepositDataById($id)
    {
        return $this->db->query("select tbl_transactions.*,tbl_accounts.*,tbl_accounts.account_name as accountholdername,tbl_expense_category.*,tbl_client.*,tbl_payment_methods.*,tbl_transactions.account_id as account_name,tbl_transactions.category_id as expense_category,tbl_transactions.date as transactiondate,tbl_transactions.name as transname from tbl_transactions join tbl_accounts on tbl_accounts.account_id=tbl_transactions.account_id  join  tbl_expense_category on tbl_expense_category.expense_category_id=tbl_transactions.category_id join tbl_client on tbl_client.client_id=tbl_transactions.paid_by join tbl_payment_methods on tbl_payment_methods.payment_methods_id=tbl_transactions.payment_methods_id where tbl_transactions.type='Income' && tbl_transactions.transactions_id='$id'")->result();
    }
    public function fetchTransactionDataById($id)
    {
        return $this->db->query("select tbl_transactions.*,tbl_accounts.*,tbl_accounts.account_name as accountholdername,tbl_expense_category.*,tbl_client.*,tbl_payment_methods.*,tbl_transactions.account_id as account_name,tbl_transactions.category_id as expense_category,tbl_transactions.date as transactiondate,tbl_transactions.name as transname from tbl_transactions join tbl_accounts on tbl_accounts.account_id=tbl_transactions.account_id  join  tbl_expense_category on tbl_expense_category.expense_category_id=tbl_transactions.category_id join tbl_client on tbl_client.client_id=tbl_transactions.paid_by join tbl_payment_methods on tbl_payment_methods.payment_methods_id=tbl_transactions.payment_methods_id where tbl_transactions.type='Expense' && tbl_transactions.transactions_id='$id'")->result();
    }
    public function fetchAllTransferData()
    {
        return $this->db->query("select tbl_accounts.*,tbl_payment_methods.*,tbl_transfer.*,tbl_transfer.to_account_id as transferTo,tbl_transfer.from_account_id as transferfrm from tbl_transfer join tbl_accounts on tbl_accounts.account_id=tbl_transfer.to_account_id && tbl_transfer.from_account_id join tbl_payment_methods on tbl_payment_methods.payment_methods_id=tbl_transfer.payment_methods_id ")->result();
        
    }
     public function addTransferData($data)
    {
        if($this->db->insert('tbl_transfer',$data))
        {
            return 1;
            
        }else{
            return 0;
        }
    }
    public function DeleteTransferData($data)
    {
        $this->db->where($data);
         $results=$this->db->delete('tbl_transfer');
         if($results)
            {
                return 1;
            }
    
            else
            {
                return 0;
            }
    }
    public function fetchTransferDataById($id)
    {
         return $this->db->query("select tbl_accounts.*,tbl_payment_methods.*,tbl_transfer.*,tbl_transfer.to_account_id as transferTo,tbl_transfer.from_account_id as transferfrm from tbl_transfer join tbl_accounts on tbl_accounts.account_id=tbl_transfer.to_account_id && tbl_transfer.from_account_id join tbl_payment_methods on tbl_payment_methods.payment_methods_id=tbl_transfer.payment_methods_id where tbl_transfer.transfer_id='$id'")->result();
        // return $this->db->query("select tbl_transfer.*,tbl_accounts.*,tbl_accounts.account_name as accountholdername,tbl_payment_methods.*,tbl_transfer.to_account_id as toaccount_name,tbl_transfer.from_account_id as fromaccount_name from tbl_transfer join tbl_accounts on tbl_accounts.account_id=tbl_transfer.toaccount_name join  tbl_expense_category on tbl_expense_category.expense_category_id=tbl_transactions.category_id join tbl_client on tbl_client.client_id=tbl_transactions.paid_by join tbl_payment_methods on tbl_payment_methods.payment_methods_id=tbl_transactions.payment_methods_id where tbl_transactions.type='Expense' && tbl_transactions.transactions_id='$id'")->result();
    }
    public function UpdateTransferData($data,$transId)
    {
        $this->db->where('transfer_id',$transId);
         $results=$this->db->update('tbl_transfer',$data);
        
            if($results)
            {
                return 1;
            }
    
            else
            {
                return 0;
            }
    }
    public function CheckPermission($designation_id)
    {
        $this->db->where('designations_id',$designation_id);
        return $this->db->get('tbl_designations')->result();
    }
    
}
