<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//Task 5
$t5variable = "Harry";
var_dump($t5variable);
echo "<br>";

print $t5variable;
echo "<br>";

$t5variable = 28;
var_dump($t5variable);
echo "<br>";

//unset($t5variable); This gets the job done but also gives an error
$t5variable = NULL;
var_dump($t5variable);
echo "<br>";
echo "<br>";

?>
</body>
</html>