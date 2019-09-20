<?php

class Test_errors extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function error1()
    {
        // Call non static method statically.  Should show depreciated error
        // Toggling enviorment to production gets rid of the error
        Load::view('welcome_view');
    }

    public function dbtest()
    {
        $this->model('test_model');
        
        // include('./app/models/test_model.php');
        // $this->test_model = new Test_model();

        // $ret = $this->db->query1("
        //     SELECT * FROM users WHERE username = 'dfritsen'
        // ");

        // $ret = $this->test_model->get_users();

        // while ($row = $ret->fetch()) {
        //     echo $row['first_name'].' '.$row['last_name']."<br>";
        // }

        $data['records'] = $this->test_model->get_users();
        $this->view('dbtest', $data);
    }

    public function testconfig()
    {
        $this->configz();
    }

}