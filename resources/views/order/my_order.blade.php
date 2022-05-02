<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.link')
  <title>Dashboard</title>
  <style> 
  body {
            background-color: rgb(206, 241, 255);
        }
  </style>
</head>
<body>
@include('layouts.navbar')
@if(sizeof($orders))
<table class="table table-hover bg-white">
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
        <th>Received At</th>
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
    <td>{{$item['updated_at']}}</td> 
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

