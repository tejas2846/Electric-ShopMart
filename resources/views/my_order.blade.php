<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>Dashboard</title>
</head>
<body>
@include('layouts.navbar')
@if(sizeof($orders))
<table class="table table-hover">
  <thead class="bg-primary text-white">      <tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Item Code</th>
        <th>Price</th>
        <th>Category</th>
        <th>Address</th>
        <th>Quantity</th>
        <th>Photo</th>
        <th>Order At</th>
        <th>Total Price</th>
       <th>Recieved</th>
      </tr>
    </thead>
  <tbody > 
@foreach($orders as $item)
  <tr>
    <th scope="row">{{$item['id']}}</th>
    <td>{{$item['item_name']}}</td>
    <td>{{$item['item_code']}}</td>
    <td>{{$item['price']}}</td>
    <td>{{$item['category']}}</td>
    <td>{{$item['address']}}</td>
    <td>{{$item['quantity']}}</td>
    <td><img src="{{asset('storage/images/'.$item['image_url'])}}" alt="Not available" width="50%" height="100px" /></td>
    <td>{{$item['created_at']}}</td> 
    <td>{{$item['Total_Price']}}</td> 
    @if($item['received']==1)
    <td class="text-success">Received</td> 
    @else
    <td><button class="btn btn-primary"><a href="{{'/receive-order/'.$item['id']}}" class="text-decoration-none text-white">Received</a></button></td> 
    @endif
  </tr>
@endforeach 
  </tbody>
</table>
@else
<div class="m-0 container text-success text-center">No Have Not Placed Order </div>
@endif
</body>
</html>

