<?php

/**
 * @author Robert Twelves
 * @created 05/02/2025
**/

namespace BtecBytes;

require_once __DIR__ . '/../inc/smarty/libs/Smarty.class.php';
use Smarty\Smarty;

class Common {
    protected $smarty;

    public function __construct() {
        $this->smarty = new Smarty();

        // Set Smarty directories
        $this->smarty->setTemplateDir(__DIR__ . '/../templates/');  // Root templates folder
        $this->smarty->setCompileDir(__DIR__ . '/../templates_c/');
        $this->smarty->setCacheDir(__DIR__ . '/../cache/');
        $this->smarty->setConfigDir(__DIR__ . '/../configs/');
    }

    public function __set($name, $value) {
        $this->smarty->assign($name, $value);
    }

    public function display($template) {
        $this->smarty->display($template);
    }
}