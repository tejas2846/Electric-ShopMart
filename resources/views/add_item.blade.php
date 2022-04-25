
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 


<style>

</style>
</head>
<body>
   @include('layouts.navbar')
   <div class="container mt-0"> 
   <form action="/add-item" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputNAme">ITEM NAME</label>
          <input type="tetx" name="item_name" class="form-control">
        </div>
        <br>
        <div class="form-group col-md-6">
          <label for="inputPassword4">ITEM CODE</label>
          <input type="tetx" name="item_code" class="form-control">
        </div>
        <br>
        <div class="form-group col-md-6">
          <label for="input">PRICE</label>
          <input type="number" name="item_price"class="form-control" >
        </div>
        <br>
        <div class="form-group col-md-6">
          <label for="inputForQuantity4">QUANTITY</label>
          <input type="number"  class="form-control" name="item_quantity" >
        </div>
        <br>
        <div class="form-group col-md-6">
          <label for="inputForQuantity4">CATEGORY</label>
          <select class="form-select" name="item_category" aria-label="Default select example">
          <option>Refrigerator</option>
          <option>Air_Conditioner</option>
          <option>Washing_Machine</option>
          <option>Mobile</option>
          <option>Music_System</option>
          <option>Microwave</option>
          <option>Television</option>
          <option>Cooler</option>
          <option>Fan</option>
          <option>Geyser</option>
        </select>
      </div>
      <br>
      <div class="form-group col-md-6">
        <label for="formFile" class="form-label">IMAGE OF ITEM</label>
        <input class="form-control" type="file" name="image" id="formFile">
      </div>  
    <br>
    <button type="submit" class="btn btn-primary">ADD ITEM</button>
    </form>
  </div>    
{{-- <form action="/add-item" method="post" enctype="multipart/form-data">
  @csrf
    <div class="container">
    <h1>ADD ITEM</h1>
    <hr>
    
    <label for="item_name"><b>Item Name</b></label>
    <input type="text" placeholder="Enter Item Name" name="item_name" id="name" required>
    
    <label for="item_code"><b>Item Code</b></label>
    <input type="text"  placeholder="Enter Item Code" name="item_code" id="name" required>

    <label for="item_price"><b>Price</b></label>
    <input type="number" step="0.01" placeholder="Enter Price" name="item_price" id="name" required>

    <label for="quantity"><b>Quantity</b></label>
    <input type="number" placeholder="Enter Quantity" name="item_quantity" id="name" required>

    <label for="category"><b>Category</b></label>
    
     <select name="item_category" id="name">
       <option value="Regrigerator">Refrigerator</option>
       <option value="Ac">AC</option>
       <option value="Mobile">Mobile</option>
       <option value="Washing Machine">Washing Machine</option>
     </select>
    
     <label for="File Upload"><b>Image Of Item</b></label>
    <input type="file" placeholder="Select File for Upload" name="image" id="image" required>
   
    <hr>

    <button type="submit" class="registerbtn">Click To Add Item</button>
  </div>
</form> --}}

</body>
</html>


  
  