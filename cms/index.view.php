<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            padding: 30px;
            text-align: center;
            background-color: gainsboro;
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <?php if ($task->isCompleted()): ?>
                <li><strike><?= $task->description ?></strike></li>
            <?php else: ?>
                <li><?= $task->description ?></li>
            <?php endif; ?>
        <?php endforeach;?>
    </ul>
</body>
</html>