<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
 <style>
 a{
  color:rgb(14, 13, 13);
}
button>a{
    color:black;
    text-decoration: none;
}
button>a:hover{
    color:black;
    text-decoration: none;
}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width:100%;
  background-color: #555;
  overflow: auto;
}
.navbar a {
  float: left;
  padding: 20px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  padding: 0px;
}


@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<body>
    <div class="navbar navbar-dark bg-dark">
        <a class="active" href="/dashboard-item"><i class="fa fa-fw fa-home"></i>Home</a> 
        <a href="/my-order"><i class="fa fa-address-card-o" aria-hidden="true"></i> My Order</a> 
        <a href="/search"><i class="fa fa-address-card-o" aria-hidden="true"></i> About Us</a> 
        <a href="/add-item"><i class="fa fa-plus" aria-hidden="true"></i> Add Item</a> 
        
        <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                   <i class="fa fa-fw fa-user"></i> {{ __('Logout') }}
                </a>
            
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              <form class="form-inline" action="/find-item" method="post">
            @csrf
            <input class="form-control mr-sm-2" name="name" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success text-white my-2 my-sm-0" type="submit">Search</button>
          </form>
    </div> 
   
    
    
    
    </div>
      
   
        
 

 @if(session()->has('message'))
  <div class="alert alert-success">
      {{ session()->get('message') }}
  </div>
@endif
<div class="shadow-lg p-3 mb-5 bg-white rounded">
<table class="table table-hover table-fixed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Item Code</th>
        <th>Price</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>PHOTO</th>
        <th>ADD TO CART</th>
        <th>EDIT</th>
        <th>DELETE</th>
        </tr>
    </thead>
    <tbody> 
@foreach($items as $item)
<tr>
    <th scope="row">{{$item['id']}}</th>
    <td>{{$item['item_name']}}</td>
    <td>{{$item['item_code']}}</td>
    <td>{{$item['price']}}</td>
    <td>{{$item['category']}}</td>
    <td>{{$item['available_piece']}}</td>
    <td><img src="{{asset('storage/images/'.$item['image_url'])}}" alt="Not available" width="100px" height=100px /></td>
    <td><button class="btn btn-primary"><a href={{"cart-item/".$item['id']}}>Add To CART</a></button></td>

    <td><a href={{"update/".$item['id']}}>Update</a>
    
    <td><a href={{"delete-item/".$item['id']}}>Delete</a> 
         {{-- @endcan --}}
    </tr>
   
    {{-- <div class="card-group">
    <div class="card" style="width: 18rem;">
      <img width=100px src="{{asset('storage/images/'.$item['image_url'])}}" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">{{$item['item_name']}}</p>
        <p class="card-text">{{$item['item_code']}}</p>
        <p class="card-text">{{$item['item_name']}}</p>
        <p class="card-text">{{$item['item_name']}}</p>
        <p class="card-text">{{$item['item_name']}}</p>
      </div>
    </div>
    </div> --}}
    @endforeach
    {{-- <tr class="table-info"> --}}
     
        
    
    {{-- </tbody>
    </table>
    
    <button class='btn btn-primary'><a href='/add'>ADDUSER</a></button>
   
    
    <button class='btn btn-primary'><a href='/logout'>LOGOUT</a></button>
    </div> --}}

</body>
</html> 
