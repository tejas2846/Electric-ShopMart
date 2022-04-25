<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
     <p>Thanks For Placing Order</p>
     <p>Order Details:</p>
     <p>Item Order Date::{{$body->created_at}}</p>  
     <p>Item Name::{{$body->item_name}}</p>  
     <p>Item Code::{{$body->item_code}}</p>  
     <p>Item Price::{{$body->price}}</p>  
     <p>Total Item Number::{{$body->quantity}}</p>  
     <hr>
     <p>Total Price::{{$body->Total_Price}}</p>  
     <p>Thanks For Using Our App</p>   
     
</div>
</body>
</html>