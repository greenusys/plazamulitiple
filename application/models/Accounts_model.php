<?php
class Accounts_model extends CI_Model
{
public function addAccountData($data)
	{
	       // print_r($data);
	  
		if($this->db->insert('tbl_accounts',$data))
		{
			return 1;
			
		}else{
			return 0;
		}
	}
	public function AllAccountData()
	{
	    return $this->db->get('tbl_accounts')->result();
	    
	}
	public function fetchBalanceBy_id($data)
	{
	    $this->db->where($data);
	    return $this->db->get('tbl_accounts')->result();
	}
}