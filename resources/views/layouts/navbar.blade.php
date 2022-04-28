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
                <a class="nav-link active" aria-current="page" href="/login">Home</a>
              </li>
            @cannot('isAdmin')
              <li class="nav-item">
                <a class="nav-link active" href="/my-order">My order</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/category/Refrigerator">Refrigerator</a></li>
                  <li><a class="dropdown-item" href="/category/Mobile">Mobile</a></li>
                  <li><a class="dropdown-item" href="/category/Washing_Machine">Washing_Machine</a></li>
                  <li><a class="dropdown-item" href="/category/Air_Conditioner">Air_Conditioner</a></li>
                  <li><a class="dropdown-item" href="/category/Music_System">Music_System</a></li>
                  <li><a class="dropdown-item" href="/category/Microwave">Microwave</a></li>
                  <li><a class="dropdown-item" href="/category/Television">Television</a></li>
                  <li><a class="dropdown-item" href="/category/Cooler">Cooler</a></li>
                  <li><a class="dropdown-item" href="/category/Geyser">Geyser</a></li>
                  <li><a class="dropdown-item" href="/category/Fan">Fan</a></li>
                 </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/update-user"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>Edit User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/show-cart">Show Cart</a>
              </li>
              
             @endcannot 
              @can('isAdmin')
              <li class="nav-item">
                <a class="nav-link active" href="/add-item">Add item</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/user-list">User List</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="/orders">Total Order</a>
              </li> --}}
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Order
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/pending-order">Pending Order</a></li>
                  <li><a class="dropdown-item" href="/deliver-order">Delivered Order</a></li>
                  <li><a class="dropdown-item" href="/orders">Total Order</a></li>
                
                </ul> 
                </li>
              @endcan
              
              <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link active"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                   </a>
            </li>
                </ul>
              </li>
              @cannot('isAdmin')
              <li class="nav-item">
                <a class="nav-link active" href="/show-cart">Cart{{$cart}}</a>
              </li>
              @endcannot
                <form class="d-flex"  method="post" action="{{route('finditem')}}">
              @csrf
                <input class="form-control me-2" name="name" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>     
</div>  
<div class="mt-3"></div>