<?php

class Test_model extends Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_users()
    {
        $ret = $this->db->query("
            SELECT * FROM users
        ");

        return $ret;
    }

}