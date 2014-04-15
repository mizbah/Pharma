<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Journal extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->populateDataforView();
		$this->load->view('journal_view', $this->data);
	}
	private function populateDataforView(){
		$this->load->model('Account_Model');
	
		$this->data['account'] = $this->Account_Model->getAccounts();
	
	}
	
	
}
