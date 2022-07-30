<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>
    <style>
        #pro{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #pro td, #pro th{
            border: 1px solid #ddd;
            padding: 8px;
        }
        #pro tr:nth-child(even){
            background-color: #0bfdfd;
        }
        #pro th{
            padding-top: 12px 0px;
            text-align: left;
            background-color: #4CAF50;
            color:#fff;
        }
        .pull-right a{
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="pull-right">
<br>
    <a href="{{route('export')}}" class="btn btn-primary">
      Xuất ra PDF
    </a>
  </div>
  <br> <br>
    <table id="pro">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Unit Price</th>
                <th>Promotion Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->unit_price}}</td>
                    <td>{{$product->promotion_price}}</td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</body>
</html>