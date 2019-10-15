<?php defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 * Converts epoch time to human readable
 * @param string epoch time
 * @param array options
 * @return string date/time
 */
function epoch2human($epoch, $option = null) {

    if ($option === 'full') {
        $date = date("M jS Y h:i:s a", $epoch);
    } elseif ($option === 'date') {
        $date = date("M jS Y", $epoch);
    } elseif ($option === 'time') {
        $date = date("h:i:s a", $epoch);
    } elseif ($option === '24hr') {
        $date = date("H:i:s", $epoch);
    } else {
        $date = date("Y-m-d H:i:s", $epoch);
    }

    return $date;
}

/**
 * Takes supplied date/time and makes epoch time
 * @param string date/time
 * @return string epoch time
 */
function human2epoch($datetime) {
    $epoch = strtotime($datetime);
    return $epoch;
}