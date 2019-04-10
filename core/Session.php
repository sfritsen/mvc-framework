<?php

class Session {

    /**
     * Sets data into session
     * 
     * @param array $data
    */
    public static function setData($data) {
        // Sets the session_id into the current entity
        $_SESSION['session_id'] = session_id();

        // Loop through supplied array
        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }

    /**
     * Sets data into session
     * 
     * @param array $data
    */
    public static function unsetData($key) {
        unset($_SESSION[$key]);
    }

    /**
     * Retrieve session value
     * 
     * @param string $key
     * @return string $value
    */
    public static function get($key) {
        $value = $_SESSION[$key];
        return $value;
    }

    /**
     * Retrieves the entire session
     * 
     * @return array
    */
    public static function all() {
        $value = $_SESSION;
        return $value;
    }

    /**
     * Destroys the session
    */
    public static function destroy() {
        session_destroy();
    }

}