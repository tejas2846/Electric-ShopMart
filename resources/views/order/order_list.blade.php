{{-- <!DOCTYPE html>
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
@if(sizeof($orders))
<table class="table table-hover">
    <thead class="bg-primary text-white">
      <tr>
        <th>Customer Name</th>
        <th>Item Name</th>
        <th>Item Code</th>
        <th>Price</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>PHOTO</th>
        <th>Order At</th>
        <th>Total</th>
        <th>DELETE</th>
       </tr>
    </thead>
  <tbody > 
@foreach($orders as $item)
  <tr>
    <td>{{$item->user->name}}</td>
    <td>{{$item['item_name']}}</td>
    <td>{{$item['item_code']}}</td>
    <td>{{$item['price']}}</td>
    <td>{{$item['category']}}</td>
    <td>{{$item['quantity']}}</td>
    <td><img src="{{asset('storage/images/'.$item['image_url'])}}" alt="Not available" width="50%" height="100px" /></td>
    <td>{{$item['updated_at']}}</td>
    <td>{{$item['Total_Price']}}</td>
    <td><a href={{"delete-item/".$item['id']}} class="text-decoration-none">Delete<i class="fa fa-trash-o" style="font-size:25px;"></i>  </a> 
    </tr>
@endforeach 
  </tbody>
</table>
@else
<div class="m-0 container text-success text-center">Not Found Any Data </div>
@endif
</body>
</html> --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>Dashboard</title>
<style>
  body{
    background-color: rgb(206, 241, 255);
  }
</style>
</head>
<body>
@include('layouts.navbar')
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="container">
  <h3>Total order:{{sizeof($orders)}}</h3>
</div>

@if(sizeof($orders))
<section class="h-100" style="background-color: rgb(206, 241, 255);">
  <div class="container h-100 py-2">
    @foreach($orders as $item)
        <div class="card mb-2" style="border-radius:22px;">
          <div class="card-body p-2">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="{{asset('storage/images/'.$item['image_url'])}}" alt="Not available"
                  class="w-100" height=200px alt="Not Avilable">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">{{$item['item_name']}}</p>
                <p><span class="text-muted">Item Code:</span>{{$item['item_code']}}<br><span class="text-muted">Category: </span>{{$item['category']}}<br><span class="text-muted">Quantity:</span>{{$item['quantity']}}<br>
                <span class="text-muted">Placed At:</span>{{$item['created_at']}}<br>
                <span class="text-muted">User Name:</span>{{$item->user->name}}  
              </p>
                {{-- <p class="lead fw-normal mb-2">Price:{{$item['price']}}</p> --}}
                
              {{-- </div>
              
              <div class="col-md-3 col-lg-3 col-xl-2">
                <span class="text-muted">Placed At:</span>{{$item['created_at']}}<br>
                <span class="text-muted">Price:</span>{{$item['price']}}<br> 
                <span class="text-muted">Status:</span>
                @if($item['received']==1)
                <span class="text-success">Received</span>
                @else
                <span class="text-danger">Pending</span>
                @endif --}}
{{--             
{{--               
                <p class="lead fw-normal mb-2">Price Per Piece</p>
                <h5 class="mb-0">₹.{{$item['price']}}</h5> --}}
              {{-- </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-primary">
                Total Price:₹.{{$item['Total_Price']}}
                </button>
              </div>
            </div>
          </div>
        </div>
      @endforeach
  </div>
      </div>
    </div>
  </div>
</section>
 
@else
<div class="m-0 container text-success text-center">Not Found Any Data </div>
@endif
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
     <style>
      @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
  </style>
    <title>Dashboard</title>
</head>

<body>
    @include('layouts.navbar')
   
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if (sizeof($orders))
                    <table class="table table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Image</th>
                                <th>User Name</th>
                                <th>Item Name</th>
                                <th>Itwm Code</th>
                                <th>Price</th>
                                <th>Total Item</th>
                                <th>Total Price</th>
                                <th>Placed At</th>
                                <th>Placed At</th>
                                <th>Status</th>
                              </tr>
                        </thead>
                        <tbody class="table-striped">
                            <?php
                            $counter = 0;
                            ?>
                            @foreach ($orders as $item)
                                <tr>
                                  <td style="width:10%;"><img src="{{asset('storage/images/'.$item['image_url'])}}"
                                    width="100%" height=200px alt="Not Avilable"></td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item['item_name'] }}</td>
                                    <td>{{ $item['item_code'] }}</td>
                                    <td>{{ $item['price'] }}</td>
                                    <td>{{ $item['quantity'] }}</td>
                                    <td>{{ $item['Total_Price'] }}</td>
                                    <td>{{ $item['created_at'] }}</td>
                                    <td>{{ $item['updated_at'] }}</td>
                                    @if($item['received'])
                                    <td><span class="text-success">Received</span></td>
                                    @else
                                    <td><span class="text-primary">Pending</span></td>
                                    @endif
                                  </tr>
                            @endforeach
                        </tbody>
    
@else
    <div class="m-0 container text-success text-center">Not Found Any Data </div>
    @endif
</body>

</html>
