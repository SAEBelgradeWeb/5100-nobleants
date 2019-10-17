<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 7 - Variable Data Types</title>
</head>
<body>
    <h1>Variable Data Types</h1>
    <p></p>


<?php
    $whatsit = "This is a string";
    echo "Value is " . gettype($whatsit);
    echo "<p>";

    $whatsit = 7.1;
    echo "Value is " . gettype($whatsit);
    echo "<p>";

    $whatsit = true;
    echo "Value is " . gettype($whatsit);
    echo "<p>";

    $whatsit = 2018;
    echo "Value is " . gettype($whatsit);
    echo "<p>";

    $whatsit = null;
    echo "Value is " . gettype($whatsit);


?>
</body>
</html>