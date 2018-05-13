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
$first_word = "Twinkle";
$second_word = "Star";
$song = "{$first_word},{$first_word}, little {$second_word}!";

echo $song;
echo "<br>";

$first_word = "Star";
$second_word = "Twinkle";
$song = "{$first_word},{$first_word}, little {$second_word}!";
echo $song;

?>
</body>
</html>