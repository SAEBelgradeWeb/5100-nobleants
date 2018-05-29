User name is: <?= $_REQUEST['name'] ?><br>
Hidden field: <?= $_POST['something'] ?><br>
User lastname is: <?= $_POST['lastname'] ?>


<?php

foreach ($_REQUEST as $key => $value) {

    echo $key . ": " . $value;
}


