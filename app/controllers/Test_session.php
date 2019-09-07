<?php

class Test_session extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function session_test()
    {
        $data = array(
            'sess_1' => 'sess_1_value',
            'sess_2' => 'sess_2_value',
            'is_logged_in' => true
        );

        // PYT_Core::setData($data);
        $this->session->setData($data);

        echo $_SESSION['sess_1'].' loaded from session!<br>';

        echo '<p>Using get helper! >>> ';
        $val = $this->session->get('sess_2');
        echo $val;
        echo '</p>';

        echo '<pre>Array Output<br>';
        print_r($_SESSION);
        echo '</pre>';

    }

    public function set_single()
    {
        $data = array('single_param' => 'My Single Paramater!');
        $this->session->setData($data);
    }

    public function session_test2()
    {
        echo '<pre>ENTIRE SESSION<br>';
        print_r ($this->session->all());
        echo '</pre>';
    }

    public function session_test3()
    {
        $this->session->destroy();
        echo 'Session gone';
    }

}