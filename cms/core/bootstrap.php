<?php
$app = [];
$app['config'] = require "config.php";

require 'core/functions.php';
require "database/Connection.php";
require "database/QueryBuilder.php";
require 'core/Task.php';
require "core/Router.php";
require "core/Request.php";

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
