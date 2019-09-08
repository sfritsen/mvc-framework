<?php

class Test_model {

    public function __construct()
    {

    }

    public function get_users()
    {
        $ret = $this->db->query1("
            SELECT * FROM users WHERE username = 'dfritsen'
        ");
    }

}