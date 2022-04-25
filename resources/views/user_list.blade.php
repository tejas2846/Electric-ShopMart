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
@if(sizeof($users))
<table class="table table-hover">
    <thead class="bg-primary text-white">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>DELETE</th>
        </tr>
    </thead>
  <tbody > 
    <?php 
    $counter=0;
    ?>
@foreach($users as $item)
  <tr>
   

    <th scope="row">{{++$counter}}</th>
    <td>{{$item['name']}}</td>
    <td>{{$item['email']}}</td>
    <td>{{$item['created_at']}}</td>
    <td>{{$item['updated_at']}}</td>
    <td><a href={{"delete-user/".$item['id']}} class="text-decoration-none"><i class="fa fa-trash-o" style="font-size:25px;"></i>  </a> 
    </tr>

@endforeach 
  </tbody>
</table>
@else
<div class="m-0 container text-success text-center">Not Found Any Data </div>
@endif
</body>
</html>