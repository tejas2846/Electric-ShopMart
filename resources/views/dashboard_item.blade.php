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
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if (sizeof($items))
            <section class="h-100" style="background-color: rgb(206, 241, 255);">
                <div class="container h-100 py-2">
                    @foreach ($items as $item)
                        <div class="card rounded-3 mb-2">
                            <div class="card-body p-2">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{ asset('storage/images/' . $item['image_url']) }}" alt="Not available"
                                            class="w-100" height=200px alt="Not Avilable">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">{{ $item['item_name'] }}</p>
                                        <p><span class="text-muted">Item
                                                Code:</span>{{ $item['item_code'] }}<br><span
                                                class="text-muted">Category: </span>{{ $item['category'] }}<br><span
                                                class="text-muted">Available Piece:
                                            </span>{{ $item['available_piece'] }}</p>
                                        @can('isAdmin')
                                            <span><a href={{ 'update-item/' . $item['id'] }} class="text-decoration-none"><i
                                                        class="fa fa-edit" style="font-size:25px;"></i></a></span>
                                            <span><a href={{ 'delete-item/' }} class="text-decoration-none"><i
                                                        class="fa fa-trash-o" style="font-size:25px;"></i></a></span>
                                        @endcan
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <p class="lead fw-normal mb-2">Price Per Piece</p>
                                        <h5 class="mb-0">₹ {{ $item['price'] }}</h5>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2">
                                        @can('user')
                                   
                                        <button class="btn btn-primary mt-2">
                                            <a href={{ '/add-cart/' . $item['id'] }}
                                                class="text-decoration-none text-white">Add To Cart</a>
                                        </button><br><br>
                                        <button class="btn btn-success">
                                            <a href={{ '/order-item/' . $item['id'] }}
                                                class="text-decoration-none text-white">Place Order</a>
                                        </button>
                                        @endcan    
                                   
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
        <script>
        </script>
    </body>
</html>
