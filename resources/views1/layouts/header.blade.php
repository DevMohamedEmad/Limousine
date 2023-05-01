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
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">  
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <title>Bright Empire</title>
  </head>
  <body>
   <!-- Start Header -->
   <div class="nav_top contaier-fluid">
    <div class="container ">
        <div class="row pt-3">
            <div class="col-lg-6 ">
                <div class="nav_top-info d-flex justify-content-start row">
                    <!-- email -->
                    <a class="col-md-7 col-8" href="mailto:info@brightempirelimonyc.com"><i class="fa fa-envelope"></i> <span>info@brightempirelimonyc.com</span></a>
                    <!-- phone -->
                    <a class="col-md-5 col-4 " href="tel:+1 646-750-7006" class=""> <i class="fa fa-phone"></i> <span>+1 646-750-7006</span> </a>
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
                <a href="{{ route('login') }}"> <i style="color:#d7b65d" class="fas fa-sign-in-alt"></i> <span></span></a>
            </div>
        </div>
    </div>
    <hr>
</div>
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
             About Us
           </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
          </div>
        </li>
        <li> 
          <div class="dropdown">
           <button
              class="btn bg-transparent"
              type="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
           >
           <a href="{{ route('contact') }}" style="color: white">Contact Us</a>
             
           </button>
            
          </div>
        </li>
      </ul>
     
    </div>
   </div>
  <!-- End Header -->
    @yield('content')
    <footer class="pt-2">
      <div class="container-fluid pt-5">
        <div class="container">
          <div class="row">
            <!-- start -->
            <div class="col-md-7 col-12 ">
              <div class="">
                <h1 class="logo-font">Bright <span style="color: white">Empire</span> </h1>
                <p class="mt-2" style="color: white">
                  Whatever your transportation needs, Bright Empire limousine stands ready with reliable, professional chauffeured ground transportation services for any occasion. Bright Empire limousine fleet covers all your executive and leisure ground transportation needs in NYC , and the TRI state area . That makes us ideal for all your travel needs. We feature an elegant fleet of late model sedans, SUVs, Mercedes Sprinter vans, limousines, corporate black limos, super stretch SUV party limos and party buses, and our professional chauffeurs are courteous and highly experienced. all our services will exceed your highest expectations.
                </p>
              </div>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="col-md-3  px-3">
              <div class="footer_list">
                <h5>OUR SERVICES</h5>
                <ul class="footer_down-list mt-2 " style="color: white">
                  <li> <a href=""style="color: white">Corporate</a></li>
                  <li> <a href=""style="color: white">Transportation</a></li>
                  <li><a href="" style="color: white">Airport</a> </li>
                  <li> <a href="" style="color: white">Transportation</a></li>
                  <li> <a href="" style="color: white">Limo Service</a></li>
                  <li><a href=""style="color: white" >Point to Point Service</a></li>
                  <li> <a href="" style="color: white">Party Limousine</a></li>
                  <li><a href=""style="color: white">Private Transfer</a> </li>
                </ul>
              </div>
            </div><!-- end -->
            <!-- start -->
            <div class="col-md-2 px-3 ">
              <div class="footer_list">
                <h5>FLEET</h5>
                <ul class="footer_down-list mt-2">
                  <li> <a href="" style="color: white">Luxury Sedan</a></li>
                  <li> <a href="" style="color: white">Preemium Sedan</a></li>
                  <li><a href="" style="color: white">Mini SUV</a> </li>
                  <li> <a href="" style="color: white">Luxury SUV</a></li>
                  <li> <a href="" style="color: white">Premium SUV</a></a></li>
                </ul>
              </div>
            </div>
            <!-- end -->
          </div>
        </div>
      </div>
      <!-- down footer -->
      <div class="container-fluid  footer_down">
        <hr style="background:white">
        <div class="container">
          <div class="px-sm-3 py-2">
            <div class="row justify-content-between align-items-center">
              <div class="col-md-8 col-12 p-1">
                <span class=" ">©Since We Are Started, All Rights Reserved.</span>
              </div>
              <div class="col-md-4 col-12 ">
                <ul class="footer_down-list d-flex justify-content-between p-1">
                  <li><a href="https://www.facebook.com/brightempirelimo"> <i class="fa-brands fa-facebook fs-3"> </i></a></li>
                  <li><a href="https://twitter.com/BrightEmpirenyc"> <i class="fa-brands fa-twitter fs-3"></i> </a></li>
                  <li><a href="https://www.instagram.com/brightempirelimo/"> <i class="fa-brands fa-instagram fs-3"></i> </a></li>
                  <li><a href="https://wa.me/+1 646-750-7006"> <i class="fa-brands fa-whatsapp fs-3"></i> </a></li>
                  <li><a href=""> <i class="fa-brands fa-pinterest fs-3"></i> </a></li>
                  <li><a href=""> <i class="fa-brands fa-reddit fs-3"></i> </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="https://book.mylimobiz.com">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>