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
//Task 7
echo "<br>";
$whatsit = ["a string", 2.34, true, 22, NULL];
foreach ($whatsit as $value) {
    echo "Value is " . gettype($value);
    echo "<br>";
}

?>
</body>
</html>