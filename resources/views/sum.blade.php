<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form method="post">
    @csrf 
    <div class="form-group">
        <input type="number" class="form-control" placehodel="number a" name="soA">
    </div>
    <div class="form-group">
        <input type="number" class="form-control" placehodel="number b" name="soB">
    </div>
    <button type="submit" class="btn-btn-primary">Tinh</button>
    <div class="form-group">
        <input type="number" class="form-control"disabled="" value="<?php if(isset($sum)) echo $sum ?>">
    </div>
    </form>
</body>
</html>