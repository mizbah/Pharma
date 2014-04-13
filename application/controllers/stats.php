<?php
session_start();
class Stats extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('account_view', $this->getData());
	}
}
