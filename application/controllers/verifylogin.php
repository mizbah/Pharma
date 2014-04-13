<?php if  ( !defined('BASEPATH')) exit('No direct script access allowed');
 
class VerifyLogin extends CI_Controller {
 
	function __construct() {
	 
	   parent::__construct();
// 	   $this->load->adaptation('individual','',authentic);
	   $this->load->model('user_model');
	}
	
	public function index() {
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
	   //this manner can havecallback_check_database');
	 
	   if($this->form_validation->run() == FALSE) {
	     //container validation failed.  person redirected to login web page
	     redirect('login', 'refresh');
	   }else{
	 
	     //Go to non-public area
	     if($this->check_database()){
	     	redirect('dashboard', 'refresh');
	     }
	     	
	   }
	}
 
	public function  check_database() {
		
		$this->load->helper('user');
 
	   	//container validation succeeded.  Validate in opposition to database
	   	$username = $this->input->post('username');
	   	$password = getPassword($username, $this->input->post('password'));
 
	   	//query the database
	   	$finish_result = $this->user_model->login($username, $password);
		if($finish_result) {
			$sess_array = array();
			foreach($finish_result as $row) {
				$sess_array = array(
						'user_id' => $row->id,
						'username' => $row->username
				);
			}
			$this->session->set_userdata('logged_in', $sess_array);
			return true;
		}else {
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
}
 
     
     
