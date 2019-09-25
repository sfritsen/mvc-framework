<?php defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 * Redirects to the supplied route
 * @param string route 
 */
function redirect($url = null) {
    header("Location: $url");
}