<?php

    if(!isset($_GET['color'])) {
        $color = 'yellow';
    } else {
        $color = $_GET['color'];
    }
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: <?= $color ?>">

<ul>
    <li><a href="?color=red">Red</a></li>
    <li><a href="?color=blue">Blue</a></li>
</ul>

</body>
</html>

