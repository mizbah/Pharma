<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class  Login extends CI_Controller {
 

	function __construct(){
		parent::__construct();
	}
	 
   
 
	public function index(){
		 
		$this->load->helper('user');
		
	   	$this->load->helper(array('form', 'url','user'));
	   	$this->load->library('form_validation');
	   	
	   	$this->form_validation->set_rules('username', 'Username', 'required');
	   	$this->form_validation->set_rules('password', 'Password', 'required');
	   	$data = array('page_title' => 'Login | Sbinco Pharma');
	   	
	   	if ($this->form_validation->run() == FALSE)	{
	   		$this->load->view('login_view', $data);
	   	}else
	   	{
	   		$this->load->view('login_view', $data);
	   	}
	}
	
	public function  logout() {
		$this->session->unset_userdata('logged_in');
		if (isset($_SESSION)){
			session_destroy();
		}
		
		redirect('login', 'refresh');
	}
	
	

}
 
   
