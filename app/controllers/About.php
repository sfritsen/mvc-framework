<?php

class About extends Controller {

    function __construct()
    {

    }

    public function test1()
    {
        $data['var1'] = "variable 1 loaded in controller";
        $data['var2'] = "variable 2 loaded in controller";
        Load::file()->view("about", $data);
    }

    public function test2()
    {
        echo "Test2!!!";
    }

    public function test3()
    {
        echo "Test3!!!";
    }

    public function test4()
    {
        echo "Test4!!!";
    }

}

?>