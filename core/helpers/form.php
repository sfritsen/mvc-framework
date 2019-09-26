<?php defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 * Adds hidden csrf_token input to the form
 */
function csrf_input() {
    return '<input type="hidden" name="csrf_token" id="csrf_token" value="'.$_SESSION['csrf_token'].'" />';
}