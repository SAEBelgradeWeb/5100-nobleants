<?php


$query = require "core/bootstrap.php";

Router::load("routes.php")->direct(Request::prepare());





