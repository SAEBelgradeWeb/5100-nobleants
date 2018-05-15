We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. Then came sunshine with a few clouds and some rain. At least we didn't get any hail or sleet.


<?php
//Create array.
$weather=array(
"rain",
  "sunshine",
  "clouds",
  "hail",
  "sleet",
  "snow",
  "wind"
  );

//Use array in a sentence.
echo "<p>We've seen all kinds of weather this month. At the beginning of the month, ";
echo "we had $weather[5] and $weather[6]. Then came $weather[1] with a few $weather[2] ";
echo "and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].</p>";
?>

2. Create a function that will check if the word is palindrome and return true/false by using arrays knowledge.
<br>
<br>
<br>
<br>
<br>
<br>
<?php

if($name === $nameFromForm && 1 == 2) {
    echo "Hello Nikola";

}

function check_palindrome($word) {
    $word = strtolower($word);
    $word = str_replace(" ", "", $word);
    $arrayWord = str_split($word);
    $arrayWord = array_reverse($arrayWord);
    $reversedString = implode("", $arrayWord);
    return $word == $reversedString;
}

$res = check_palindrome("Ana voli Milovana");

var_dump($res);