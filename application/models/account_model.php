<?php
class Account_Model extends CI_Model {
 
	public function getAccounts(){
		
	   $this->db->select('id,name, reference_table,reference_id');
// 	   $query = $this->db->get('user' array('username' => $username, 'password' => $password),1);
	   $this->db->from('account');
// 	   $this->db->where('username', $username);
// 	   $this->db->where('password', $password);
// 	   $this->db->restrict(1);
	 
	   $query = $this->db->get();
	 
	   if($query->num_rows() > 0){
	 
	     return $query->result();
	 
	   }
	 
	     return false;
	}
	
	public function getTransaction(){
		$this->db->select_sum('journal.amount');
		$this->db->select('account.name');
		$this->db->select('journal.type');
		$this->db->from('journal');
		$this->db->join('account', 'journal.acc_id = account.id');
		$this->db->group_by('acc_id, type');
		$query = $this->db->get();
		
		return ($query->num_rows() > 0) ? $query->result() : false;
		
	}
}
