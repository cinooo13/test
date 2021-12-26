<?php 
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session ;
$total =0; 
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link orders" aria-current="page" href="#">Orders</a>
          </li>
         
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a class ="nav-link active" href="#">Cart({{$total}})</a></li>
            @if(Session::has('user'))
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="\logout">Logout</a></li>
                
              </ul>
            </li>
            @else
                
            <li class="nav-item"><a class ="nav-link active" href="\login">Login</a></li>
                
            @endif
                
            
        </ul>    

      </div>
    </div>
  </nav>