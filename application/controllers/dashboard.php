<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to name PHP's session object to get right of entry to it thru CI
class Dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
		if (!$this->session->userdata('logged_in') && $this->ctrl != 'login'){
			redirect('login', 'refresh');
		}
	}
	
	 
	public function index() {
     	$this->load->view('home_view', $this->data);
	}
	 
	   
	 
	     
	 
	  
	     
	 
	
 
   
}