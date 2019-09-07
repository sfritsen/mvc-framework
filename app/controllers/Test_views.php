<?php

class Test_views extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "Echo'd = Base application route";
    }

    public function data_in_view()
    {
        $data['mytestvars'] = array('var1' => 'myvar1', 'var2' => 'myvar2');
        $data['mytestarray'] = 'arrayVar';
        $data['badstuff'] = '<script>alert("ohgod");</script>';
        $this->load->view('test_view', $data);
    }

    public function test2()
    {
        $data['var1'] = "Variable 1 sent from controller";
        $data['constant'] = TEST_GLOBAL;
        $this->load->view("test_variables_view", $data);
    }

}