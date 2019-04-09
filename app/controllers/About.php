<?php

class About extends Controller {

    public function test1()
    {
        $data['var1'] = "variable 1 loaded in controller";
        $data['var2'] = "variable 2 loaded in controller";
        Load::view("about", $data);

        // About::CreateView("partials/header", $data);
        // About::CreateView("about", $data);
        // About::CreateView("partials/footer");
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