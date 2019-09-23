<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');

class Test_forms extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function csrf_test()
    {
        $views = array(
            'partials/header',
            'forms/token_test',
            'partials/footer'
        );
        $this->view($views);
    }

    public function csrf_test_submit()
    {
        echo 'SESSION: '.$_SESSION['csrf_token'].'<br>';
        echo 'FORM TOKEN: '.$_POST['csrf_token'];
    }

}