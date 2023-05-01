@php  
use App\Models\Car;
$cars = Car::all()
@endphp
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&family=Sofia+Sans+Extra+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <!-- fontwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&family=Sofia+Sans+Extra+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="@yield('style')">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">  
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <title>Bright Empire</title>
  </head>
  <body>
   <!-- Start Header -->
   <div class="header" id="header">
    <div class="container">
      <img src="{{ asset('images/logo.png') }}" alt="" srcset="" id="logo">  
      <a href="{{ route('Bright Empire') }}" class="logo"> <span style="color:white">Bright</span>  Empire</a>
      <ul class="main-nav">
        <li> 
          <div class="dropdown">
            <a 
             class="btn  bg-transparent"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
             href="{{ route('home-fleet') }}"
             >Fleets</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              @foreach ($cars as $car)
              <li><a class="dropdown-item" href="{{ route('fleet.show' , $car->id) }}">{{ $car->name }}</a></li>
              @endforeach
            </ul>
          </div>
        </li>
        <li> 
          <div class="dropdown">
           <button
              class="btn dropdown-toggle bg-transparent"
              type="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
           >
             Services
           </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">service</a></li>
            </ul>
          </div>
        </li>
        
        <li> 
          <div class="dropdown">
           <button
              class="btn dropdown-toggle bg-transparent"
              type="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
           >
             Reservation
           </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">resercva</a></li>
            </ul>
          </div>
        </li>
        <li> 
          <div class="dropdown">
           <button
              class="btn dropdown-toggle bg-transparent"
              type="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
           >
             Reservation
           </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
          </div>
        </li>
        <li> 
          <div class="dropdown">
           <button
              class="btn dropdown-toggle bg-transparent"
              type="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
           >
             Reservation
           </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
          </div>
        </li>
        <li> 
          <div class="dropdown">
           <button
              class="btn dropdown-toggle bg-transparent"
              type="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
           >
             Reservation
           </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
          </div>
        </li>
      </ul>
      @guest
      @if (Route::has('login'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
      @endif
  @else
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <a class="dropdown-item" href="{{ route('fleets') }}">
                  {{ __('Fleets') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        
          </div>
      </li>
  @endguest
    </div>
   </div>
  <!-- End Header -->
    @yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>