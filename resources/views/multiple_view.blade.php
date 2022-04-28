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
{{-- <div class="container">
  <h3>Total order:156</h3>
</div> --}}

@if(sizeof($items))
<section class="h-100" style="background-color: rgb(206, 241, 255);">
  <div class="container h-100 py-2">
    {{-- <img src="/storage/slider3.jpeg" class="d-block w-100" alt="..."> --}}
                               
    @foreach($items as $item)
        <div class="card rounded-3 mb-2">
          <div class="card-body p-2">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <?php
                  $array=json_decode($item['image_url']);
                  ?>
                  {{-- {{dd($array)}} --}}
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{'/storage/images/'.$array[0]}}" class="d-block w-100" alt="path not found">
                    </div>
                  
                    <div class="carousel-item">
                      <img src="{{'/storage/images/'.$array[1]}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{'/storage/images/'.$array[2]}}" class="d-block w-100" alt="...">
                    </div>
                    {{-- <div class="carousel-item">
                      <img src="{{'/storage/images/'.$array[2]}}" class="d-block w-100" alt="...">
                    </div> --}}
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
               
                {{-- <img src="{{asset('storage/images/'.$item['image_url'])}}" alt="Not available"
                  class="w-100" height=200px alt="Not Avilable"> --}}
              </div>
             <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">{{$item['item_name']}}</p>
                <p><span class="text-muted">Item Code:</span>{{$item['item_code']}}<br><span class="text-muted">Category: </span>{{$item['category']}}<br><span class="text-muted">Available Piece: </span>{{$item['available_piece']}}</p>
                <p><a href="{{'/update-item/'.$item['id']}}">Update</a></p>
            @can('isAdmin')
                <span><a href={{"update-item/".$item['id']}} class="text-decoration-none"><i class="fa fa-edit"style="font-size:25px;"></i></a></span>
                <span><a href={{"delete-item/"}} class="text-decoration-none"><i class="fa fa-trash-o" style="font-size:25px;"></i></a></span> 
                @endcan
                </div> 
              
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <p class="lead fw-normal mb-2">Price Per Piece</p>
                <h5 class="mb-0">₹.{{$item['price']}}</h5>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-success">
                <a href={{"/cart-item/".$item['id']}}  class="text-decoration-none text-white">Add To Cart</a>
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
</html>