<?php
$month = date('F', time());
$sentence = ($month == "April") ? "April arrived! Happy spring!" : "It is not April yet, but it will be soon....";
$img =  ($month == "April") ? "http://www.fabuloussavers.com/new_wallpaper/Beautiful_Spring_Yellow_Flowers_freecomputerdesktopwallpaper_p.jpg" : "http://data.whicdn.com/images/17730189/tumblr_luo9u8Sim21qmejd3o1_400_large.jpg";

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p><?= $sentence ?></p>
<img src="<?= $img ?>" alt="">

</body>
</html>