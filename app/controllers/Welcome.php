<?php

class Welcome extends Controller {

    public function index()
    {
        $data['testing'] = 'just test text';
        $this->load->view('welcome_view', $data);
    }

}