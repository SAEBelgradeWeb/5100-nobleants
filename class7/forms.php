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
<form action="https://www.google.com/search" method="GET">
    <input type="text" name="q">
    <button>Search</button>
</form>


<form action="processform.php" method="POST">
    <label for="name">Enter your name:</label>
    <input type="text" placeholder="Do type some name" id="name" name="name" value="<?= !isset($_GET['name']) ? "" : $_GET['name']?>">
    <br>
    <label for="lastname">Enter your lastname:</label>
    <input type="password" placeholder="Do type some name" id="lastname" name="lastname" value="<?= !isset($_GET['lastname']) ? "" : $_GET['lastname']?>">

    <input type="hidden" name="something" value="value of something">

    <button type="submit">Submit</button>
</form>


</body>
</html>