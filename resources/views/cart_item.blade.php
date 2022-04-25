<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script><title>Dashboard</title>
</head>
<style>
  /* .container{
    margin-left:30%;
  } */
</style>
<body>

@include("layouts.navbar")
{{-- <div class="bg-success container justify-content-between">dgfdfdf</div> --}}
{{-- for form tag style --}}
{{-- style="margin-left: auto;margin-right: auto;" --}}
<div class="container mx-auto">
<form  action="/my-order" method="post">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNAme">ITEM NAME</label>
      <input type="tetx" readonly value="{{$item->item_name}}" name="item_name" class="form-control">
    </div>
    <br>
    <div class="form-group col-md-6">
      <label for="inputPassword4">ITEM CODE</label>
      <input type="tetx" readonly value="{{$item->item_code}}"name="item_code" class="form-control">
    </div>
    <br>
    <div class="form-group col-md-6">
      <label for="input">PRICE</label>
      <input type="number" readonly value="{{$item->price}}" name="item_price"class="form-control" >
    </div>
    <br>
    <div class="form-group col-md-6">
      <label for="inputPassword4">NUMBER OF ITEM</label>
      <input type="number" required value="1" class="form-control" name="item_quantity" id="inputPassword4" placeholder="Password">
    </div>
    <br>
    <div class="form-group col-md-6">
      <label for="inputForaddress">Address For Receiv Order</label>
      <input type="text" required  minlength=20 class="form-control" name="address" id="inputForAddress" placeholder="Address">
    </div>
    <br>
    <div class="form-group col-md-6">
     <input type="hidden" value="{{$item->category}}"  name="item_category" id="image" required>
    </div>
    <div class="form-group col-md-6">
      <input type="hidden" value="{{$item->image_url}}" placeholder="Select File for Upload" name="image" id="image" required>
    </div>
  </div>
  <br>
   <button type="submit" class="btn btn-primary">PLACE ORDER</button>
   </form>
  </div>
{{-- </div> --}}
{{-- <form action="/my-order" method="post">

  @csrf
    <div class="container">
    <h1>ORDER ITEM</h1>
    <hr>
    
    <label for="item_name"><b>Item Name</b></label>
    <input type="text" readonly value="{{$item->item_name}}" placeholder="Enter Item Name" name="item_name" id="name" required>
    
    <label for="item_code"><b>Item Code</b></label>
    <input type="text" readonly value="{{$item->item_code}}"placeholder="Enter Item Code" name="item_code" id="name" required>

    <label for="item_price"><b>Price</b></label>
    <input type="number" readonly value="{{$item->price}}" placeholder="Enter Price" name="item_price" id="name" required>

    <label for="quantity"><b>Number Of Item</b></label>
    <input type="number"  value="1" placeholder="Enter Quantity" name="item_quantity" id="name" required>

    <label for="category"><b>Category</b></label>
    
     <select name="item_category" readonly value="{{$item->category}}"id="name">
       <option value="Regrigerator">Refrigerator</option>
       <option value="Ac">AC</option>
       <option value="Mobile">Mobile</option>
       <option value="Washing Machine">Washing Machine</option>
     </select>
     <input type="hidden" value="{{$item->image_url}}" placeholder="Select File for Upload" name="image" id="image" required>
   
    <hr>

    <button type="submit" class="registerbtn">Click To Place order</button>
  </div>
</form>
</div> --}}
</body>
</html>


  
  