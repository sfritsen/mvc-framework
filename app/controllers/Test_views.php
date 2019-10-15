<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');

class Test_views extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "Base index route of controller";
    }

    public function data_in_view()
    {
        $this->model('test_model');
        $data['records'] = $this->test_model->get_users();

        $data['mytestvars'] = array('var1' => 'myvar1', 'var2' => 'myvar2');
        $data['mytestarray'] = 'arrayVar';
        $data['badstuff'] = '<script>alert("ohgod");</script>';
        // $this->load->view('test_view', $data);
        $this->view('test_view', $data);
    }

    public function constant_variable()
    {
        $data['var1'] = "Variable 1 sent from controller";
        $data['constant'] = TEST_GLOBAL;
        $this->load->view("test_variables_view", $data);
    }

    public function multipleviews()
    {
        $data['var1'] = "Var1 in controller with new views";
        $data['constant'] = TEST_GLOBAL;
        $files = array(
            'partials/header',
            'test_variables_view',
            'partials/footer'
        );
        $this->view($files, $data);
    }

}