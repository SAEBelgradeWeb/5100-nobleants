<?php

class Request {
    public static function prepare()
    {
        return trim($_SERVER['REQUEST_URI'], "/");
    }
}