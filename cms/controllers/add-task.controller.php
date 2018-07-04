<?php
$app['database']->addNew("tasks", $_POST);
header("Location: /");
