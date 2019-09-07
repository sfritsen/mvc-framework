<?php

class Welcome extends Controller {

    public function index()
    {
        $this->load->view('welcome_view');
    }

}