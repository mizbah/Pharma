<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		ExpressionEngine Dev Team, K. M. Mizbah-ul Ahsan.
 * @link		http://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {

	private static $instance;
	public $nav = array();
	public $ctrl  = false;
	public $data = array();
	public $ctrl_nav = array();

	/**
	 * Constructor
	 */
	public function __construct(){
		
		self::$instance =& $this;
		

		// Assign all the class objects that were instantiated by the
		// bootstrap file (CodeIgniter.php) to local class variables
		// so that CI can run as one big super object.
		foreach (is_loaded() as $var => $class)		{
			$this->$var =& load_class($class);
		}
		
		$this->load =& load_class('Loader', 'core');
		$this->load->initialize();
		log_message('debug', "Controller Class Initialized");
		
		$this->getCtrl();
		$this->getNav(); 
		$this->getCtrlNav();
		$this->getData();
		
	}

	public static function &get_instance()	{
		return self::$instance;
	}
	
	public function getData(){
	
		$this->data['nav'] = $this->nav;
		$this->data['ctrl'] = $this->ctrl;
	
		$session_data = $this->session->userdata('logged_in');
		$this->data['username'] = $session_data['username'];
// 		$this->data['active_side_nav'] = $this->getActiveSaidNav();
		$this->data['ctrl_nav'] = $this->ctrl_nav;
	}
	
	private function getNav(){
		$this->load->helper('xml');
		$nav = getArrayFromXML('conxml/nav.xml');
		$this->nav = $nav['parent'];
	}
	private function getCtrl(){
		$controller = $this->getPHPSelf();
		$this->ctrl = isset($controller[2]) ? $controller[2] : false;
	}
	
	
	private function getPHPSelf(){
		return  explode('/',$_SERVER['PHP_SELF']);
		
	}
	
	private function  getCtrlNav(){
		
		$ctrl = $this->ctrl;
		$nav = $this->nav;
		
		
		
		if ($nav !== false && is_array($nav) ){
			foreach ($nav as $k=>$v){
				if(false !== array_search($ctrl,$v)) {
					$this->ctrl_nav = $v;
				}else {
					if(isset($v['child']) && !empty($v['child'] )){
						foreach ($v['child'] as $key=>$val){
							if(false !== array_search($ctrl,$val)) {
								$this->ctrl_nav = $v;
							}
						}
					}
				}
			}
		}
		 
	}// end of getCtrlNav function
	
}// END Controller class

/* End of file Controller.php */
/* Location: ./system/core/Controller.php */