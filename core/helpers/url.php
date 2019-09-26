<?php defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 * Returns the base_url set in /config/config.php
 * @param string route
 * @return string url
 */
function base_url($route = null) {
    require('./config/config.php');
    return $config['base_url'].$route;
}

/**
 * Redirects to the supplied route
 * @param string route 
 */
function redirect($url = null) {
    header("Location: $url");
}