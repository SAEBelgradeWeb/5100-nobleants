<?php

/**
 * Dumps the data on the screen
 * @param $data
 */
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}