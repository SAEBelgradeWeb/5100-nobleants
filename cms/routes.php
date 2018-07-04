<?php

$router->get('', 'controllers/index.controller.php');
$router->get('about-us', 'controllers/about.controller.php');
$router->get('contact', 'controllers/contact.controller.php');
$router->post('task/add', 'controllers/add-task.controller.php');
