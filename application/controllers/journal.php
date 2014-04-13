<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Journal extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('journal_view', $this->data);
	}
	
	
}
