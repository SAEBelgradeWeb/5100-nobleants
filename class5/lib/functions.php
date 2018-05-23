<?php

function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}


function greeting() {
    echo "Hello";
}

function connectToDatabase() {
    echo "connecting";
}