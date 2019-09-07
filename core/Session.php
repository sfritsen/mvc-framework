<?php

class Session {

    /**
     * Sets data into session
     * 
     * @param array $data
    */
    public function setData($data) {
        // Sets the session_id into the current entity
        $_SESSION['session_id'] = session_id();

        // Sets session update time
        $_SESSION['session_updated'] = date("U");

        // Loop through supplied array
        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }

    /**
     * Sets data into session
     * 
     * @param string $key
    */
    public function unsetData($key) {
        unset($_SESSION[$key]);
    }

    /**
     * Retrieve session value
     * 
     * @param string $key
     * @return string $value
    */
    public function get($key) {
        $value = $_SESSION[$key];
        return $value;
    }

    /**
     * Retrieves the entire session
     * 
     * @return array
    */
    public function all() {
        $value = $_SESSION;
        return $value;
    }

    /**
     * Destroys the session
    */
    public function destroy() {
        unset($_SESSION);
        session_destroy();
    }

}