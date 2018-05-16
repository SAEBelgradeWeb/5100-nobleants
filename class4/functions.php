<?php

function one() {

}

/**
 * This fumnction returns second parameter
 * @param $one
 * @param string $two
 * @return string
 */
function two($one, $two="somethibng") {
    return $two;
}

$property1 = "name";
$property2 = "lastname";

echo strtoupper(two($property1, "nothing"));

$name = "Vladimir";
function something() {
    global $name;

    $lastname = "Lelicanin";
    echo $name;

    return compact('name', 'lastname');
}
echo "<br><br><br><br><br>";


//list($lastname, $name) = something();
extract(something());
echo $lastname;


/**********************************************?
 *
 */


$username = "John";
$age = 14;
$gender = "male";

$userArray = compact('username', 'age', 'gender');

var_dump($userArray);

$school = [
  'type' => 'elementary',
  'location' => 'Kiev',
  'bulding_age' => 50
];

extract($school);


echo $location;

$variable_name = "bla";

$$variable_name = "value of bla";

echo $bla;
















