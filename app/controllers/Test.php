<?php

class Test extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "Echo'd = Base application route";
    }

    public function test1()
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
        Load::view("test_variables_view", $data);
    }

    public function test3()
    {
        $seg = URI::segment('1');
        echo 'Simple echo with Segment: '.$seg;
    }

    public function session_test()
    {
        $data = array(
            'sess_1' => 'sess_1_value',
            'sess_2' => 'sess_2_value',
            'is_logged_in' => true
        );

        PYT_Core::setData($data);

        echo $_SESSION['sess_1'].' loaded from session!<br>';

        echo '<p>Using helper! >>> ';
        $val = PYT_Core::get('sess_2');
        echo $val;
        echo '</p>';

        echo '<pre>ENTIRE SESSION<br>';
        print_r($_SESSION);
        echo '</pre>';

    }

    public function session_test2()
    {
        echo '<pre>ENTIRE SESSION<br>';
        print_r (Session::all());
        echo '</pre>';
    }

    public function session_test3()
    {
        Session::destroy();
        echo 'Session gone';
    }

}