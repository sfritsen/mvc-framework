<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');

class Test_model extends Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_users()
    {
        $ret = $this->db_query("
            SELECT * FROM users
        ");

        return $ret;
    }

}