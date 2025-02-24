<?php
	/** 
	 * @author Robert Twelves
	 * @created 24/02/2025
	 */

	require_once('../configs/common.php');

	use BtecBytes\Common;
	
	class Login extends Common {
	
		public function __construct() {
			parent::__construct(); // Ensure Common constructor runs
			$this->init();
			$this->proccess();
		}
	
		public function init() {

		}
	
		public function proccess() {
			$this->display('login/login.tpl'); 
		}
	}
	
	new Login();