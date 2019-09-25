<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');

class Test_uri extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function seg_test1()
    {
        echo 'Segment 1: '.$this->uri->segment(1).'<br>';
        echo 'Segment 2: '.$this->uri->segment(2).'<br>';
        echo 'Segment 3: '.$this->uri->segment(3).'<br>';
    }

    public function seg_pass1()
    {
        echo '<a href="'.$this->config['base_url'].'seg_pass2/sendingvar">send</a>';
    }

    public function seg_pass2()
    {
        echo 'I got: '.$this->uri->segment('1');
    }

    public function redirect_helper()
    {
        // $this->helper('URL');
        redirect('redirect_landing');
    }

    public function redirect_landing()
    {
        echo "YOU MADE IT!";
    }

}