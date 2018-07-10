<?php

$router->get('', 'PagesController@home');
$router->get('about-us', 'PagesController@aboutUs');
$router->get('contact', 'PagesController@contact');

$router->post('task/add', 'PagesController@storeTask');



