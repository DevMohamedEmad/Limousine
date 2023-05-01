

{{-- End Header --}}
@php
use App\Models\Category;
  $categories = Category::all()
@endphp

<section class="nav-section">
    <div class="nav_top contaier-fluid ">
        <div class="container ">
            <div class="row pt-3">
                <div class="col-lg-6 ">
                    <div class="nav_top-info d-flex justify-content-start row">
                        <!-- email -->
                    <a class="col-md-6 col-sm-8 col-12" href="mailto:info@brightempirelimonyc.com"><i class="fa fa-envelope"></i> <span>info@brightempirelimonyc.com</span></a>
                    <!-- phone -->
                    <a class="col-md-6 col-sm-4 col-12 " href="tel:+1 646-750-7006" class=""> <i class="fa fa-phone"></i> <span>+1 646-750-7006</span> </a>
                    </div>
                </div>
    
                <div class="col-lg-4 nav_top-media  text-center ">
                    <div>
                        <a href="https://www.facebook.com/brightempirelimo"> <i class="fa-brands fa-facebook fs-3"> </i></a>
    
                        <a class="mx-3" href="https://www.instagram.com/brightempirelimo/"> <i class="fa-brands fa-instagram fs-3"></i> </a>
                        <a href="https://wa.me/+1 646-750-7006"> <i class="fa-brands fa-whatsapp fs-3"></i> </a>
    
                    </div>
                </div>
    
                <div class="col-lg-2 text-end">
                    <a href="{{ route('login') }}"> <i style="color:#d7b65d" class="fas fa-sign-in-alt"></i> <span>Login</span></a>
                </div>
            </div>
        </div>
        <hr>
    </div>
    
    
    <!-- nav bar  -->
    
    
    
    
    <nav class="navbar navbar-expand-lg ">
      <div class="container">
        <a class="navbar-brand logo-font " href="{{ route('Bright Empire') }}">Bright Empire</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('Bright Empire') }}">Home</a>
            </li>
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="{{route('allServices')}}">All services</a></li>
                <li> <a class="dropdown-item" href="{{route('airportService')}}">Airport Service</a></li>
                <li> <a class="dropdown-item" href="{{route('vipService')}}">VIP Service</a></li>
                <li><a class="dropdown-item" href="{{route('nightToTown')}}" >Night To Town</a> </li>
                <li> <a class="dropdown-item" href="{{route('pointToPointService')}}" >Point to point</a></li>
                <li> <a class="dropdown-item" href="{{route('casinos')}}" >Casinos</a></li>
                <li><a class="dropdown-item" href="{{route('luxuryLimoService')}}" >Luxury Limo Service</a></li>
                <li> <a class="dropdown-item" href="{{route('bookByArea')}}" >Book By Area</a></li>
                <li><a class="dropdown-item" href="{{route('promsService')}}">Proms service</a> </li>
                <li><a class="dropdown-item" href="{{route('travelingWithKids')}}">Traveling with kids</a> </li>
                <li><a class="dropdown-item" href="{{route('weddingService')}}">Wedding service</a> </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Fleet
              </a>
              <ul class="dropdown-menu">
                @foreach ($categories as  $category)
                <li><a class="dropdown-item" href="{{ route('category.show' , $category->id) }}">{{ $category->name }}</a></li>                  
                @endforeach
              </ul>
            </li>
    
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Reservation
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Contactus</a>
            </li>
          </ul>
        
    
        </div>
      </div>
    </nav>
    </section