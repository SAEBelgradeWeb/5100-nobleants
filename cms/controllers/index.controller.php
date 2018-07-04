<?php

$tasks = $app['database']->getAll("tasks", "Task");

$tasks[0]->complete();

require "views/index.view.php";