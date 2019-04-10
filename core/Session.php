<?php

class Session {

    /**
     * Sets data into session
     * 
     * @param array $data
    */
    public static function setData($data) {
        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }

    /**
     * Retrieve session value
     * 
     * @param string $key
    */
    public static function get($key) {
        $value = $_SESSION[$key];
        return $value;
    }

}