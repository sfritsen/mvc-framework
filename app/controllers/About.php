<?php

class About extends Controller {

    public function test1()
    {
        $data['var1'] = "variable 1 loaded in controller";
        $data['var2'] = "variable 2 loaded in controller";
        Load::view("about", $data);
    }

    public function test2()
    {
        $seg1 = URI::get('1');
        echo $seg1;
    }

}

?>