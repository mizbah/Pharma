<?php
class User_Model extends CI_Model {
 
	public function login($username, $password){
		
		$this->db->select('id,username, password');
// 		$query = $this->db->get('user' array('username' => $username, 'password' => $password),1);
	 	$this->db->from('user');
	   $this->db->where('username', $username);
	   $this->db->where('password', $password);
// 	   $this->db->restrict(1);
	 
	   $query = $this->db->get();
	 
	   if($query->num_rows() > 0){
	 
	     return $query->result();
	 
	   }
	 
	     return false;
	}
}
