<?php

// class About extends Controller {
    class About {

    public function test()
    {
        $data = "variable loaded in controller";
        Load::file()->view("about.php", $data);
    }

}

?>