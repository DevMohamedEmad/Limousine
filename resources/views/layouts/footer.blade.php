@php
use App\Models\Category;
  $categories = Category::all()
@endphp
<!-- footer -->
<footer class="pt-2 mt">
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="row">
          <!-- start -->
          <div class="col-md-7 col-12 ">
            <div class="">
  
              <h1 class="logo-font">Bright Empire</h1>
  
              <p class="mt-2">
              Whatever your transportation needs, Bright Empire limousine stands ready with reliable, professional chauffeured ground transportation services for any occasion. Bright Empire limousine fleet covers all your executive and leisure ground transportation needs in NYC , and the TRI state area . That makes us ideal for all your travel needs. We feature an elegant fleet of late model sedans, SUVs, Mercedes Sprinter vans, limousines, corporate black limos, super stretch SUV party limos and party buses, and our professional chauffeurs are courteous and highly experienced. all our services will exceed your highest expectations.
              </p>
            </div>
          </div><!-- end -->
  
          <!-- start -->
          <div class="col-md-3  px-3">
            <div class="footer_list">
              <h5>OUR SERVICES</h5>
              <ul class="footer_down-list mt-2 " style="color: white">
                <li> <a href="{{route('airportService')}}"style="color: white">Airport Service</a></li>
                <li> <a href="{{route('vipService')}}"style="color: white">VIP Service</a></li>
                <li><a href="{{route('nightToTown')}}" style="color: white">Night To Town</a> </li>
                <li> <a href="{{route('pointToPointService')}}" style="color: white">Point to point</a></li>
                <li> <a href="{{route('casinos')}}" style="color: white">Casinos</a></li>
                <li><a href="{{route('luxuryLimoService')}}"style="color: white" >Luxury Limo Service</a></li>
                <li> <a href="{{route('bookByArea')}}" style="color: white">Book By Area</a></li>
                <li><a href="{{route('promsService')}}"style="color: white">Proms service</a> </li>
                <li><a href="{{route('travelingWithKids')}}"style="color: white">Traveling with kids</a> </li>
                <li><a href="{{route('weddingService')}}"style="color: white">Wedding service</a> </li>
              </ul>
            </div>
          </div><!-- end -->
          <!-- start -->
          <div class="col-md-2 px-3 ">
            <div class="footer_list">
              <h5>FLEET</h5>
              <ul class="footer_down-list mt-2">
                @foreach ($categories as $category)
                <li> <a href="">{{ $category->name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div><!-- end -->
  
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
  
  
  
  
  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <script src="main.js"></script>
  </body>
  
  </html>