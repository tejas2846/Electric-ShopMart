<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body style="background-color: rgb(206, 241, 255);">
  
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/dashboard-item">Electric Mart</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ml-lg-5 mb-lg-0">
              <li class="nav-item pl-5">
                <a class="nav-link active" aria-current="page" href="/login">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/myitem">MY ORDER</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/myitem">ADD ITEM</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  CATEGORY
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/refrigerator">Refrigerator</a></li>
                  <li><a class="dropdown-item" href="/mobile">Mobile</a></li>
                  <li><a class="dropdown-item" href="/washingmachine">Washing Machine</a></li>
                  <li><a class="dropdown-item" href="/ac">Air Conditioner</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                   </a></li>
                </ul>
            <form class="d-flex" action="/find-item" method="post">
              @csrf
                <input class="form-control me-2" name="name" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>     
</div>  
      
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<section class="h-100" style="background-color: rgb(206, 241, 255);">
  <div class="container h-100 py-2">
   
    @foreach($items as $item)
        <div class="card rounded-3 mb-2">
          <div class="card-body p-2">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="{{asset('storage/images/'.$item['image_url'])}}" alt="Not available"
                  class="w-100" height=200px alt="Not Avilable">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">{{$item['item_name']}}</p>
                <p><span class="text-muted">Item Code:</span>{{$item['item_code']}}<br><span class="text-muted">Category: </span>{{$item['category']}}<br><span class="text-muted">Available Piece: </span>{{$item['available_piece']}}</p>
              </div>
              
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <p class="lead fw-normal mb-2">Price Per Piece</p>
                <h5 class="mb-0">₹.{{$item['price']}}</h5>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-primary">
                <a href="/my-order" class="text-decoration-none text-white">Add To Cart</a>
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
 


{{-- <table class="table table-hover w-50"> --}}
    {{-- <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Item Code</th>
        <th>Price</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>PHOTO</th>
        <th>ORDER AT</th>
        <th>TOTAL PRICE</th>
            
    </tr>
    </thead> --}}
    {{-- <table class="w-30">
    <tbody > 

      @foreach($items as $item)
<tr class="ml-3">
  <td rowspan="2" ><img src="{{asset('storage/images/'.$item['image_url'])}}" alt="Not available" width="100%" height="200px" /></td>
  <td rowspan="2" >
    <p>{{$item['item_name']}}</p>
    <p>{{$item['item_name']}}</p>
    <p>{{$item['item_name']}}</p>
    <p>{{$item['item_name']}}</p>
  </td>
</tr> --}}
{{-- <tr>
  <td><p>{{$item['item_name']}}</p>
    <p>{{$item['item_name']}}</p></td>

</tr> --}}
  {{-- <tr><td>{{$item['item_name']}}</td>
   </tr>
   <tr><td>{{$item['item_code']}}</td>
   </tr>
   <tr><td>{{$item['price']}}</td>
</td>
</tr>     --}}
    {{-- <td>{{$item['item_name']}}</td>
    <td>{{$item['item_code']}}</td>
    <td>{{$item['price']}}</td>
    <td>{{$item['category']}}</td>
    <td>{{$item['quantity']}}</td>
    <td><img src="{{asset('storage/images/'.$item['image_url'])}}" alt="Not available" width="50%" height="100px" /></td>
    <td>{{$item['created_at']}}</td> 
    <td>{{$item['Total_Price']}}</td> 
    
    </tr> --}}
    {{-- @endforeach  --}}
    
    {{-- </tbody></table> --}}
</body>
</html> 
