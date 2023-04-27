@extends('layouts.index')
@section('content')
<!-- start fleet -->
<section class="fleet">
  <div class="container ">
    <div class="row ">
      <header class="fteel_header mb-5">
        <h1 class="text-center">Our Fleet</h1>
      </header>
      <!-- start filter -->
      <div class=" col-12 row justify-content-center mb-3">
        <div class="d-flex  justify-content-center aligin-item-center fleet-filter ">
          <a href="">All <span>|</span></a>
          <a href="">Luxury Sedan<span>|</span></a>
          <a href="">Premium Sedan<span>|</span></a>
          <a href="">Premium SUV<span>|</span></a>
          <a href="">Mini SUV<span>|</span></a>
          <a href="">Luxury AUV <span></span></a>
        </div>
      </div><!-- end filter -->
      @foreach ( $cars as $car)
         <!-- start card -->
      <div class="col-lg-3 col-md-6 col-12 p-2">
        <div class="fleet_card   ">
          <figure class="fleet_img ">
            <img src="{{ $car->photos[0]->photo }}" alt="" srcset="" class="w-100">
          </figure>
          <div class="fleet_content ps-2">
            <div class="txt2">{{ $car->name }}</div>
            <ul class="fleet_list pt-2">
              <li> <i class="fa-solid fa-person me-2"></i><span>{{ $car->features[0]->feature }}</span> </li>
              <li><i class="fa-solid fa-person-walking-luggage me-2"></i><span>{{ $car->features[1]->feature }}</span> </li>
              <li> <i class="fa-solid fa-car-side me-2"></i><span>{{ $car->features[2]->feature }}</span> </li>
              <li> <i class="fa-solid fa-car me-2"></i><span>{{ $car->features[3]->feature }}</span> </li>

            </ul>
            <div class="text-center">
              <div class="link"><a href="details.html" class="btn-default btn4"><span>READ MORE</span></a></div>

            </div>
          </div>
        </div>
      </div>
      <!-- end card -->
      @endforeach
      @foreach ( $cars as $car)
      <!-- start card -->
   <div class="col-lg-3 col-md-6 col-12 p-2">
     <div class="fleet_card   ">
       <figure class="fleet_img ">
         <img src="{{ $car->photos[0]->photo }}" alt="" srcset="" class="w-100">
       </figure>
       <div class="fleet_content ps-2">
         <div class="txt2">{{ $car->name }}</div>
         <ul class="fleet_list pt-2">
           <li> <i class="fa-solid fa-person me-2"></i><span>{{ $car->features[0]->feature }}</span> </li>
           <li><i class="fa-solid fa-person-walking-luggage me-2"></i><span>{{ $car->features[1]->feature }}</span> </li>
           <li> <i class="fa-solid fa-car-side me-2"></i><span>{{ $car->features[2]->feature }}</span> </li>
           <li> <i class="fa-solid fa-car me-2"></i><span>{{ $car->features[3]->feature }}</span> </li>

         </ul>
         <div class="text-center">
           <div class="link"><a href="details.html" class="btn-default btn4"><span>READ MORE</span></a></div>

         </div>
       </div>
     </div>
   </div>
   <!-- end card -->
   @endforeach
   @foreach ( $cars as $car)
   <!-- start card -->
<div class="col-lg-3 col-md-6 col-12 p-2">
  <div class="fleet_card   ">
    <figure class="fleet_img ">
      <img src="{{ $car->photos[0]->photo }}" alt="" srcset="" class="w-100">
    </figure>
    <div class="fleet_content ps-2">
      <div class="txt2">{{ $car->name }}</div>
      <ul class="fleet_list pt-2">
        <li> <i class="fa-solid fa-person me-2"></i><span>{{ $car->features[0]->feature }}</span> </li>
        <li><i class="fa-solid fa-person-walking-luggage me-2"></i><span>{{ $car->features[1]->feature }}</span> </li>
        <li> <i class="fa-solid fa-car-side me-2"></i><span>{{ $car->features[2]->feature }}</span> </li>
        <li> <i class="fa-solid fa-car me-2"></i><span>{{ $car->features[3]->feature }}</span> </li>
      </ul>
      <div class="text-center">
        <div class="link"><a href="details.html" class="btn-default btn4"><span>READ MORE</span></a></div>
      </div>
    </div>
  </div>
</div>
<!-- end card -->
@endforeach
    </div>
  </div>
</section>
<!-- end fleets -->
@endsection