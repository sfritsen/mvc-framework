<?php

class Test_errors extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function error1()
    {
        // Call non static method statically.  Should show depreciated error
        // Toggling enviorment to production gets rid of the error
        Load::view('welcome_view');
    }

}