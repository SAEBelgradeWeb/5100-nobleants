<?php

$cars = ['mazda', 'honda', 'toyota'];
//
//echo $cars[0] . "<br>";
//echo $cars[1] . "<br>";
//echo $cars[2] . "<br>";

foreach ($cars as $car) {
    echo $car . "<br>";
    if($car == "honda") break;
}


foreach ($cars as $car) {
    if($car == "honda") continue;
    echo $car . "<br>";

}


$user = [
  'name' => 'John',
  'lastname' => 'Doe',
  'age' => 15
];

echo "<ul>";
foreach ($user as $key => $value) {
    echo "<li>" . ucfirst($key)  . ": " . $value . "</li>";
}
$something = 1;
echo "</ul>";
if($something == 1):
    echo "<table border='1'>";
    foreach ($user as $key => $value) : ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
        <?php
    endforeach;
    echo "</table>";
endif;

