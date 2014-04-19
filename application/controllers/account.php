<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Account extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->setDataForAccountView();
		$this->load->view('account_view', $this->data);
	}
	
	private function setDataForAccountView(){
		$this->load->model('account_model');
		$this->data['accounts'] = $this->account_model->getTransaction();
		
		$this->data['extrajs'] = array('jquery.dataTables.min.js','accounts.js');
		$this->data['extracss'] = array('jquery.dataTables.css');
	}
	function displayAccountsinfo(){
		$id = $this->input->post('acc_id');
		$this->load->model('account_model');
		$this->data['account_details'] =  $this->account_model->getAccount($id);
		$this->load->view('accoun_info_modal.php',$this->data);
// 		$result = array('status' => 1, 'message' => $html);
// 		echo json_encode($result);
	}
}
