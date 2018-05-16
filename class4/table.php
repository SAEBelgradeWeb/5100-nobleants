<?php

$user = [
    'name' => 'John',
    'lastname' => 'Doe',
    'age' => 15
];

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <?php for($i = 0; $i < 2; $i++): ?>
    <tr>
    <?php foreach ($user as $key => $value): ?>
        <?php
        echo ($i == 0) ? "<th>" . $key . "</th>" : "<td>" . $value . "</td>";
        ?>
    <?php endforeach; ?>
    </tr>
    <?php endfor; ?>

</table>
</body>
</html>
