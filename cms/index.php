<?php
require 'functions.php';
require 'Task.php';

$pdo = connectDb();

$tasks = getAll('tasks', $pdo);

$tasks[0]->complete();

//TODO: Something

require 'index.view.php';

