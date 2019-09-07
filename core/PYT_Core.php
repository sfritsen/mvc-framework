<?php
/**
 * =========================================================
 * Master Controller
 * =========================================================
*/
require_once('./core/PYT_Config.php');
require_once('./config/config.php');
require_once('./config/constants.php');

class PYT_Core {

    public function __construct() 
    {
        $this->load = new Load();
        $this->session = new Session();
        $this->uri = new URI();
    }

}