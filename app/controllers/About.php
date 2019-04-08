<?php

class About {

    function __construct()
    {

    }

    public function test1()
    {
        $data = "variable loaded in controller";
        Load::file()->view("about.php", $data);
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