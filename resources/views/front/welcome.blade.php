@extends('layouts.header')
@section('content')
  <div class="landing" id="landing">
    <div class="discribtion">
      <h2> The best limousine company with professionals drivers proudly serving Bright Empire and the TRI state area for decades</h2>
      <a class="btn elementor-button-text" href="">Quickly Reservation</a>
      <div class="links">
        <a href="https://wtsi.me/201210382986" target="_blank">
          <i class="fab fa-4x fa-twitter"></i>
        </a>
        <a href="https://wtsi.me/201210382986" target="_blank">
        <i class="fa-brands fa-4x fa-square-instagram"></i> 
        </a>
        <a href="https://wtsi.me/201210382986" target="_blank">
          <i class="fab fa-4x fa-whatsapp"></i>
        </a>
        <a href="https://www.facebook.com/brightempirelimo">
            <i class="fab fa-4x fa-facebook-square"></i>
        </a>
      </div>
    </div>
  </div>
  <div style="background-color: white">
    <div class="fleets container">
      <h3 class="main-title">FLEETS</h3>
      <div class="line"></div>
      <div class="fleet-description">
       <div class="img">
         <img src="{{ asset('images/lann.png') }}" alt="" srcset="">
       </div>
       <h6 class="text">
         Welcome to Bright Empire United Limo, your premier luxury car service provider in New York City. We specialize in Bright Empire limousine services, offering a wide range of options to meet all your transportation needs, from corporate travel to wedding transportation and beyond.
         Our dedicated chauffeurs are available 26 class="text"/7 to provide exceptional service with a smile. With us, you can expect nothing but the best in customer satisfaction. Choose us for all your airport transportation needs, with ample space for luggage and accommodating multiple passengers.
       </h6>
      </div>
      <div class="cards container">
       <div class="card" style="width: 18rem;">
         <img src="{{ asset('images/cars/Cadillac XT6/jdp_2023 cadillac xt6 premium luxury black front quarter view.webp') }}" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">Cadillac XT6</h5>
         </div>
       </div>
       <div class="card" style="width: 18rem;">
         <img src="{{ asset('images/cars/lincoln continental/maxresdefault.jpg') }}" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">lincoln continental</h5>
         </div>
       </div>
       <div class="card" style="width: 18rem;">
         <img src="{{ asset('images/cars/Lincoln Navigator/ezgif.com-webp-to-jpg.jpg') }}" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">Lincoln Navigator</h5>
   
         </div>
       </div>
       <div class="card" style="width: 18rem;">
         <img src="{{ asset('images/cars/Mercedes S class/Mercedes S-Class 2020 (10).jpg') }}" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">Mercedes S class</h5>
         </div>
       </div>
       <div class="card" style="width: 18rem;">
         <img src="{{ asset('images/cars/luxury SUV/best-luxury-suvs1.jpg') }}" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">luxury SUV</h5>
   
         </div>
       </div>
       <div class="card" style="width: 18rem;">
         <img src="{{ asset('images/cars/luxury SUV/luxury-suvs0.jpg') }}" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">luxury SUV</h5>
         </div>
       </div>
      </div>
     </div>
  </div>

  <div class="service">
  </div>
@endsection