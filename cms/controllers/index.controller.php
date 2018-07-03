<?php

$tasks = $query->getAll("tasks", "Task");

$tasks[0]->complete();

require "views/index.view.php";