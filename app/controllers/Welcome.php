<?php

class Welcome extends Controller {

    public function index()
    {
        Load::view('welcome_view');
    }

}