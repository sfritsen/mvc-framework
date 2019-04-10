<?php

class Test extends Controller {

    public function index()
    {
        echo "Echo'd = Base application route";
    }

    public function test1()
    {
        $data['var1'] = "Variable 1 sent from controller";
        $data['constant'] = TEST_GLOBAL;
        Load::view("test_variables_view", $data);
    }

    public function test2()
    {
        Load::view("test_view");
    }

    public function test3()
    {
        $seg = URI::get('1');
        echo 'Simple echo with Segment: '.$seg;
    }

    public function session_test()
    {
        $data = array(
            'sess_1' => 'sess_1_value',
            'sess_2' => 'sess_2_value'
        );
        Session::setData($data);

        echo $_SESSION['sess_1'].' loaded from session!<br>';

        echo '<p>Using helper! >>> ';
        $val = Session::get('sess_2');
        echo $val;
        echo '</p>';

        echo '<pre>ENTIRE SESSION<br>';
        print_r($_SESSION);
        echo '</pre>';

    }

}