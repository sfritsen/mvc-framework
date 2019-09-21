<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');

class Welcome extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('welcome_view');
    }

}