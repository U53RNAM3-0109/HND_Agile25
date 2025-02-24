<?php
	/** 
	 * @author Robert Twelves
	 * @created 05/02/2025
	 */

    require_once('../configs/common.php');

    use BtecBytes\Common;
    
    class Index extends Common {
    
        public function __construct() {
            parent::__construct(); // Ensure Common constructor runs
            $this->init();
            $this->proccess();
        }
    
        public function init() {

        }
    
        public function proccess() {
            $this->display('index/dashboard.tpl'); 
        }
    }
    
    new Index();