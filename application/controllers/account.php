<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Account extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->setDataForView();
		$this->load->view('account_view', $this->data);
	}
	
	private function setDataForView(){
		$this->load->model('account_model');
		$this->data['accounts'] = $this->account_model->getTransaction();
		
		$this->data['extrajs'] = array('accounts.js');
		$this->data['extracss'] = array('jquery.dataTables.css');
	}
}
