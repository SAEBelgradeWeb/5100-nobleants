<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<form action="ex-process.php" method="POST">

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <select name="city" id="city" class="form-control">
            <option value="Belgrade">Belgrade</option>
            <option value="Nis">Nis</option>
            <option value="New York">New York</option>
        </select>
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
        Male <input type="radio" name="gender" class="form-control" value="male">
        Female <input type="radio" name="gender" class="form-control" value="female">
    </div>

    <div class="form-group">
        <label for="">Music you like</label>
        Folk <input type="checkbox" name="music[]" class="form-control" value="folk">
        Classical <input type="checkbox" name="music[]" class="form-control" value="classical">
        Trance <input type="checkbox" name="music[]" class="form-control" value="trance">
    </div>

    <div>
        <label for="comment">Comment</label>
        <textarea name="comment" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <button type="submit">Submit</button>
    <button type="reset">Reset</button>



</form>
</div>
</body>
</html>