<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><i class="bi bi-shop"></i> Electric Mart</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ml-lg-5 mb-lg-0">
              <li class="nav-item pl-5">
                <a class="nav-link active" aria-current="page" href="/login"><i class="bi bi-house-door"></i> Home</a>
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
                  <li><a class="dropdown-item" href="/category/Washing_Machine">Washing Machine</a></li>
                  <li><a class="dropdown-item" href="/category/Air_Conditioner">Air Conditioner</a></li>
                  <li><a class="dropdown-item" href="/category/Music_System">Music System</a></li>
                  <li><a class="dropdown-item" href="/category/Microwave">Microwave</a></li>
                  <li><a class="dropdown-item" href="/category/Television">Television</a></li>
                  <li><a class="dropdown-item" href="/category/Cooler">Cooler</a></li>
                  <li><a class="dropdown-item" href="/category/Geyser">Geyser</a></li>
                  <li><a class="dropdown-item" href="/category/Fan">Fan</a></li>
                 </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/update-user"><i class="bi bi-person"></i> Edit User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/show-cart"><i class="bi bi-minecart"></i> Show Cart</a>
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
                                     document.getElementById('logout-form').submit();"><i class="bi bi-door-closed"></i>
                        {{ __('Logout') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                   </a>
            </li>
                </ul>
              </li>
            
                <form class="d-flex"  method="get" action="{{route('finditem')}}">
              {{-- @csrf --}}
                <input class="form-control me-2" name="name" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>     
</div>  
<div class="mt-3"></div>