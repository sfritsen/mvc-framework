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

}