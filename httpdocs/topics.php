<?php
	/** 
	 * @author Robert Twelves
	 * @created 24/02/2025
     * 
	 */

	require_once('../configs/common.php');

	use BtecBytes\Common;
	
	class Topics extends Common {
	
		public function __construct() {
			parent::__construct(); // Ensure Common constructor runs
			$this->init();
			$this->proccess();
		}
	
		public function init() {

		}
	
		public function proccess() {
			$this->display('topics/topics.tpl'); 
		}
	}
	
	new Topics();