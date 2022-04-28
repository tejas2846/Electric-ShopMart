<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <style>
        .d-block {
            height: 250px;

        }

        .img-fluid {
            height: 100px;
        }

    </style>

    <body>
        @include('layouts.home_navbar')
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner text-center">
                <div class="carousel-item active text-center">
                    <img class="d-block w-90 rounded mx-auto d-block" src="/storage/slider1.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-90 rounded mx-auto d-block" src="/storage/slider2.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-90 rounded mx-auto d-block" src="/storage/slider3.jpeg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                <span class="sr-only text-dark">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only text-dark">Next</span>
            </a>
        </div>
        <h4 class="text-center">Category</h4>
        <div class="container mt-4">
            <div class="flex flex-row shadow p-1 mb-3 bg-white rounded">
                <div class="d-flex justify-content-between flex-column-5">
                    <a class="text-decoration-none" href="/category/Refrigerator">
                        <div>
                            <img src="/storage/refrigerator.jpeg" class="img-fluid">
                            <p class="text-center">Refrigerator</p>
                        </div>
                    </a>
                    <a class="text-decoration-none" href="/category/Washing_Machine">
                        <div>
                            <img src="/storage/washing_machine.jpeg" class="img-fluid">
                            <p class="text-center">Washing Machine</p>
                        </div>
                    </a>
                    <a class="text-decoration-none" href="/category/Mobile">
                        <div>
                            <img src="/storage/mobile.jpeg" class="img-fluid">
                            <p class="text-center">Mobile</p>
                        </div>
                    </a>
                    <a class="text-decoration-none" href="/category/Air_Conditioner">
                        <div>
                            <img src="/storage/air_conditioner.jpeg" class="img-fluid">
                            <p class="text-center">Air Conditioner</p>
                        </div>
                    </a>
                    <a class="text-decoration-none" href="/category/Music_System">
                        <div>
                            <img src="/storage/music_system.png" class="img-fluid">
                            <p class="text-center">Music System</p>
                        </div>
                    </a>
                </div>
                <div class="d-flex justify-content-between flex-column-5">
                    <a href="/category/Television" class="text-decoration-none">
                        <div>
                            <img src="/storage/tv.jpeg" class="img-fluid">
                            <p class="text-center">Television</p>
                        </div>
                    </a>
                    <a href="/category/Cooler" class="text-decoration-none">
                        <div>
                            <img src="/storage/cooler.jpeg" class="img-fluid">
                            <p class="text-center">Cooler</p>
                        </div>
                    </a><a class="text-decoration-none" href="/category/Fan">
                        <div>
                            <img src="/storage/fan.jpeg" class="img-fluid">
                            <p class="text-center">Fan</p>
                        </div>
                    </a>
                    <a class="text-decoration-none" href="/category/Geyser">
                        <div>
                            <img src="/storage/Geyser.jpeg" class="img-fluid">
                            <p class="text-center">Geyser</p>
                        </div>
                    </a>
                    <a class="text-decoration-none" href="/category/Microwave">
                        <div>
                            <img src="/storage/Microwave.jpeg" class="img-fluid">
                            <p class="text-center">Microwave</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </body>

</html>
