<?php

class Test extends Controller {

    public function test1()
    {
        $data['var1'] = "variable 1 loaded in controller";
        $data['var2'] = "variable 2 loaded in controller";
        Load::view("about", $data);
    }

    public function test2()
    {
        Load::view("about");
    }

    public function test3()
    {
        $seg = URI::get('1');
        echo 'Segment: '.$seg;
    }

}