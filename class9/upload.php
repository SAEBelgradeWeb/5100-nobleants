<?php

echo "<pre>";
if($_FILES['image']['error'] == 4) {
    // throw new Exception("No file uploaded");
}

if($_FILES['image']['size'] > 5 * 1024 * 1024) {
    throw new Exception("File too big: " . $_FILES['image']['size']);
}

if($_FILES['image']['type'] != 'application/pdf') {
    throw new Exception("File type not alowed");
}
$tmp = $_FILES['image']['tmp_name'];
$image_name = str_replace(" ", "_", $_FILES['image']['name']);
$dest = getcwd() . "/storage/" . time() . "_" . $image_name;


move_uploaded_file($tmp, $dest);

var_dump($_FILES['image']);