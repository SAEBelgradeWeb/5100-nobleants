<?php

echo time();
echo "<br>";
echo $birthday =  mktime(12, 30, 0, 4, 11, 2000);

echo "<br>";

echo "Time passed until day of birth: " . ((time() - $birthday ) / (60 * 60 * 24 * 12));

echo "<br>";

echo strtotime("04/01/1950");
echo "<br>";
echo date('d. m. Y. H:i:s');

$dt = getdate($birthday);

echo $dt['weekday'];
echo "<pre>";
var_dump($dt);