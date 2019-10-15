<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');

class Test_helpers extends Controller {

    public function __construct()
    {
        parent::__construct();

        $this->helper('time');
    }

    public function epoch()
    {
        $a = date('U');
        echo epoch2human($a, '24hr');
    }

    public function date2epoch()
    {
        $a = '1975-10-06 08:09:10';
        $b = human2epoch($a);
        $c = epoch2human($b);
        echo $b.'<br>';
        echo $c;
    }

    public function baseurltest()
    {
        echo base_url();
    }

    public function mytesthelper()
    {
        $this->helper('myhelper');
        echo mytesthelper();
    }

}