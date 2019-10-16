<?php defined('BASE_PATH') OR exit('No direct script access allowed');

class Welcome extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
       $files = array(
           'partials/header',
           'welcome_view',
           'partials/footer'
       );
        $this->view($files);
    }

    public function testdefault()
    {
        echo 'im a new default non index route!';
    }

}