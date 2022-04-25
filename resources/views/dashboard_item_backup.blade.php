<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>Dashboard</title>
</head>
<body>
@include('layouts.navbar')
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="container">
  <h3>Total order:156</h3>
</div>

@if(sizeof($items))
<table class="table table-hover">
    <thead class="bg-primary text-white">
      <tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Item Code</th>
        <th>Price</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>PHOTO</th>
        <th>ADD TO CART</th>
        @can('isAdmin')
        <th>EDIT</th>
        <th>DELETE</th>
        @endcan
      </tr>
    </thead>
  <tbody > 
@foreach($items as $item)
  <tr>
    <th scope="row">{{$item['id']}}</th>
    <td>{{$item['item_name']}}</td>
    <td>{{$item['item_code']}}</td>
    <td>{{$item['price']}}</td>
    <td>{{$item['category']}}</td>
    <td>{{$item['available_piece']}}</td>
    <td><img src="{{asset('storage/images/'.$item['image_url'])}}" alt="Not available" width="50%" height="100px" /></td>
    <td><button class="btn btn-success"><a href={{"cart-item/".$item['id']}} class="text-decoration-none text-dark">Add To CART</a></button></td>
    @can('isAdmin')
    <td><a href={{"update-item/".$item['id']}} class="text-decoration-none"><i class="fa fa-edit"style="font-size:25px;"></i> Update</a>
    <td><a href={{"delete-item/".$item['id']}} class="text-decoration-none">Delete<i class="fa fa-trash-o" style="font-size:25px;"></i>  </a> 
    @endcan
    </tr>

@endforeach 
  </tbody>
</table>
@else
<div class="m-0 container text-success text-center">Not Found Any Data </div>
@endif
</body>
</html>