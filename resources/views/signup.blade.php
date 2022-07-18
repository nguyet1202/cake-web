<!DOCTYPE html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
</head>
<body>
    <form method="POST" style="width: 600px;margin-left:500px;">
@csrf
<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name">
</div>
<div class="form-group">
    <label>Age</label>
    <input type="text" class="form-control" name="age">
</div>
<div class="form-group">
    <label>Date</label>
    <input type="text" class="form-control" name="date">
</div>
<div class="form-group">
    <label>Phone</label>
    <input type="text" class="form-control" name="phone">
</div>
<div class="form-group">
    <label>Web</label>
    <input type="url" class="form-control" name="web">
</div>
<div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address">
</div>
<div>
    @include ('error')
</div>
<button type="submit" class="btn btn-primary" style="left:200px;">OK</button>
<div class="display-infor">
    @if( isset($user))
    <p>Name:{{$user['name']}}</p>
    <p>Age:{{$user['age']}}</p>
    <p>Date:{{$user['date']}}</p>
    <p>Phone:{{$user['phone']}}</p>
    <p>Website:{{$user['web']}}</p>
    <p>Address:{{$user['address']}}</p>
    @endif


</div>
</form>
</body>