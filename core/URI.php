<?php

class URI {

    public function __construct()
    {
        //Thou shalt not construct that which is unconstructable!
    }

    /**
     * Gets the uri segement value
     * 
     * @param string $section - segment wanted
     * @return string 
    */
    public static function get($section) 
    {
        // Retrieves the current URI and explodes it into $get_uri
        $get_uri = isset($_SERVER['REQUEST_URI']) ? explode('/', ltrim($_SERVER['REQUEST_URI'],'/')) : '/';

        // Find the requested section from $section
        if($section === '1') {
            $seg = isset($get_uri[3])? $get_uri[3] : ''; // segment 1
        }elseif($section === '2') {
            $seg = isset($get_uri[4])? $get_uri[4] : ''; // segment 2
        }elseif($section === '3') {
            $seg = isset($get_uri[5])? $get_uri[5] : ''; // segment 3
        }

        // Returns the value found
        return $seg;
    }

}
