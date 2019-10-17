<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 4</title>
</head>
<body>
<?php
    $Value = 8;
    echo "Value is now 8.";
    echo "<p>";
    $Value += 2;
    echo "Add 2. Value is now " . $Value . ".";
    echo "<p>";
    $Value -= 4;
    echo "Subtract 4. Value is now " . $Value . ".";
    echo "<p>";
    $Value *= 5;
    echo "Multiply by 5. Value is now " . $Value . ".";
    echo "<p>";
    $Value /= 3;
    echo "Divide by 3. Value is now " . $Value . ".";
    echo "<p>";
    $Value = ++$Value;
    echo "Increment value by one. Value is now " . $Value . ".";
    echo "<p>";
    $Value = --$Value;
    echo "Decrement value by one. Value is now " . $Value . "." . "```";
?>
</body>
</html>