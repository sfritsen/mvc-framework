<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');

class Test_uri extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function seg_test1()
    {
        echo 'Segment 1: '.$this->uri->segment('1').'<br>';
        echo 'Segment 2: '.$this->uri->segment('2').'<br>';
        echo 'Segment 3: '.$this->uri->segment('3').'<br>';
    }

}