
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
  <fieldset>Update Item
    <form  action="/save-update-item" method="post">
        @csrf
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputNAme">ITEM NAME</label>
              <input type="tetx" value="{{$item->item_name}}" name="item_name" class="form-control">
              <input type="hidden" value="{{$item->id}}" name="id" class="form-control">
            </div>
            <br>
            <div class="form-group col-md-6">
              <label for="inputPassword4">ITEM CODE</label>
              <input type="tetx" value="{{$item->item_code}}"name="item_code" class="form-control">
            </div>
            <br>
            <div class="form-group col-md-6">
              <label for="input">PRICE</label>
              <input type="number" value="{{$item->price}}" name="item_price"class="form-control" >
            </div>
            <br>
            <div class="form-group col-md-6">
              <label for="inputPassword4">QUANTITY</label>
              <input type="number" value="{{$item->available_piece}}" class="form-control" name="item_quantity" id="inputPassword4">
            </div>
            <br>
            <div class="form-group col-md-6">
            </div>
            <div class="form-group col-md-6">
                <label for="inputForQuantity4">CAtEGORY</label>
                <select class="form-select" name="item_category" aria-label="Default select example">
                <option>Refrigerator</option>
                <option>Ac</option>
                <option>Washing Machine</option>
                <option>Mobile</option>
              </select>
            </div>
                  
        <br>
        <button type="submit" class="btn btn-primary">UPDATE item</button>
        </form>
      </fieldset>



        {{-- <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputNAme">ITEM NAME</label>
          <input type="tetx" value="" name="item_name" class="form-control">
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
          <label for="inputForQuantity4">CAtEGORY</label>
          <select class="form-select" name="item_category" aria-label="Default select example">
          <option>Refrigerator</option>
          <option>Ac</option>
          <option>Washing Machine</option>
          <option>Mobile</option>
        </select>
      </div>
      <br>
      <div class="form-group col-md-6">
        <label for="formFile" class="form-label">IMAGE OF ITEM</label>
        <input class="form-control" type="file" name="image" id="formFile">
      </div>  
    <br>
    <button type="submit" class="btn btn-primary">ADD ITEM</button>
    </form> --}}
  </div>    
</body>
</html>


  
  