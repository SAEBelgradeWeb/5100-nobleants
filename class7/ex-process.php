<?php

foreach ($_POST as $key => $item) {
    if($key == "music") {
     echo ucfirst($key).": ". implode(', ', $item). "<br>";
    } else {
        echo ucfirst($key).": ".$item."<br>";
    }
}