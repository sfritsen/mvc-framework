<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');

class CSRF {

    protected $csrf_length;
    protected $csrf_token;
    protected $csrf_expire;

    public function __construct()
    {
        $csrf_length = 32;
        $csrf_expire_time = 3600;
        $this->csrf_token = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $csrf_length);
        $this->csrf_expire = time() + $csrf_expire_time;
    }

    public function token($csrf_status)
    {
        if ($csrf_status === true) {
            
            if (isset($_SESSION['csrf_token'])) {
            
                // Check expire against current time
                if (time() >= $_SESSION['csrf_expire']) {
                    // EXPIRED
                    $this->_create_token();
                }
            } else {
                $this->_create_token();
            }

        } elseif ($csrf_status === false){
            unset($_SESSION['csrf_token']);
            unset($_SESSION['csrf_expire']);
        }
    }

    public function _create_token()
    {
        $_SESSION['csrf_token'] = $this->csrf_token;
        $_SESSION['csrf_expire'] = $this->csrf_expire;
    }

}