
<?php
class Expense_model extends CI_Model
{
    public function addExpenseCategoryData($data)
	{
		if($this->db->insert('tbl_expense_category',$data))
		{
			return 1;
			
		}else{
			return 0;
		}
	}
	public function fetchExpensesCategory()
	{
	    return $this->db->get('tbl_expense_category')->result();
	}
	  public function addExpenseData($data)
	{
		
		if($this->db->insert('tbl_transactions',$data))
		{
			return 1;
			
		}else{
			return 0;
		}
	}
	public function UpdateExpense($data,$transId)
	{
		$this->db->where('transactions_id',$transId);
		 $results=$this->db->update('tbl_transactions',$data);
		
			if($results)
			{
				return 1;
			}
	
			else
			{
				return 0;
		    }
	}
	public function UpdateDeposit($data,$transId)
	{
		$this->db->where('transactions_id',$transId);
		 $results=$this->db->update('tbl_transactions',$data);
		
			if($results)
			{
				return 1;
			}
	
			else
			{
				return 0;
		    }
	}
	
}