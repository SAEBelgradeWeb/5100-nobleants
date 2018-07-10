<?php
require 'core/functions.php';
App::put('config', $config = require "config.php" );

App::put('database', new QueryBuilder(
    Connection::make($config['database'])
));
