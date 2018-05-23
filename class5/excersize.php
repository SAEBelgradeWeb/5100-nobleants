<?php
$weeks = 16;
echo '<table border="1">';

for ($i = 0; $i< $weeks; $i++) {
    echo "<tr>";
    echo "<td>";
    echo date('d. m. Y l',strtotime("1st March 2018 Tuesday +{$i} week"));
    echo "</td></tr><tr><td>";
    echo date('d. m. Y l', strtotime("1st March 2018 Wednesday +{$i} week"));
    echo "</td>";
    echo "</tr>";
}

echo "</table>";