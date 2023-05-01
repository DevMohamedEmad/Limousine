@extends('layouts.master')
@section('content')
<div class="">
  <div class=" container-fluid wrapper mt-2  mt-5 d-flex justify-content-center align-item-center flex-column ">
    <div class=" d-flex justify-content-center align-item-center flex-coulumn ">
       <div class="content w-50">
        <h1 class="text-center  logo-font fw-bold"> <span class="text-white">Bright Empire</span></h1>
        <div class="d-flex justify-content-center"> <img src="{{ asset('./images/Asset 1.png') }}" width="50%" height="25%"></div>
               <h3 class=" text-center " style="">
               The best limousine company with professionals drivers proudly serving NYC and the TRI state area for decades
               </h3>
               <div class="text-center mt-4">
                <a href="" class="btn">Make Reservation</a>
               </div>
       </div>
    </div>
  </div>
</div>


  

  
  
  
<section class="our-fleet mt">
  
<div class="container">
      <div class="row">
  
  <div class="col-12 ">
      <h3 class="main-title">FLEETS</h3>
      <div class="title-line"></div>
  </div>
  {{-- <div class="fleet-description">
    <div class="img">
      <img src="{{ asset('images/lann.png') }}" alt="" srcset="">
    </div>
    <h6 class="text">
      Welcome to Bright Empire United Limo, your premier luxury car service provider in New York City. We specialize in Bright Empire limousine services, offering a wide range of options to meet all your transportation needs, from corporate travel to wedding transportation and beyond.
      Our dedicated chauffeurs are available 26 class="text"/7 to provide exceptional service with a smile. With us, you can expect nothing but the best in customer satisfaction. Choose us for all your airport transportation needs, with ample space for luggage and accommodating multiple passengers.
    </h6>
   </div> --}}
  
          <!-- start -->
          <div class="col-md-4 col-sm-6 p-2">
       <a href="">
       <div class="content">
  <figure class="mb-0">
      <img src="{{ asset('images/cars/luxury SUV/luxury-suvs0.jpg') }}" alt="" class="w-100" srcset="" height="300px">
  </figure>
  <h6 class="title text-center py-3 mt-0">Cadillac XT6</h6>
              </div>
       </a>
          </div>  
           <!-- end-->
           <!-- start -->
           <div class="col-md-4 col-sm-6 p-2">
       <a href="">
       <div class="content">
  <figure class="mb-0">
      <img src="{{ asset('images/cars/luxury SUV/best-luxury-suvs1.jpg') }}" alt="" class="w-100" srcset="" height="300px">
  </figure>
  <h6 class="title text-center py-3 mt-0">Cadillac XT6</h6>
              </div>
       </a>
          </div>   <!-- end-->
           <!-- start -->
           <div class="col-md-4 col-sm-6 p-2">
       <a href="">
       <div class="content">
  <figure class="mb-0">
      <img src="{{ asset('images/cars/Mercedes S class/Mercedes S-Class 2020 (5).jpg') }}" alt="" class="w-100" srcset="" height="300px">
  </figure>
  <h6 class="title text-center py-3 mt-0">Cadillac XT6</h6>
              </div>
       </a>
          </div>   <!-- end-->
           <!-- start -->
           <div class="col-md-4 col-sm-6 p-2">
       <a href="">
       <div class="content">
  <figure class="mb-0">
      <img src="{{ asset('images/cars/Lincoln Navigator/ezgif.com-webp-to-jpg.jpg') }}" alt="" class="w-100" srcset="" height="300px">
  </figure>
  <h6 class="title text-center py-3 mt-0">Cadillac XT6</h6>
              </div>
       </a>
          </div>   <!-- end-->
           <!-- start -->
           <div class="col-md-4 col-sm-6 p-2">
       <a href="">
       <div class="content">
  <figure class="mb-0">
      <img src="{{ asset('images/cars/lincoln continental/maxresdefault.jpg') }}" alt="" class="w-100" srcset="" height="300px">
  </figure>
  <h6 class="title text-center py-3 mt-0">Cadillac XT6</h6>
              </div>
       </a>
          </div>   <!-- end-->
           <!-- start -->
           <div class="col-md-4 col-sm-6 p-2">
       <a href="">
       <div class="content">
  <figure class="mb-0">
      <img src="{{ asset('images/cars/Cadillac XT6/jdp_2023 cadillac xt6 premium luxury black front quarter view.webp') }}" alt="" class="w-100" srcset="" height="300px">
  </figure>
  <h6 class="title text-center py-3 mt-0">Cadillac XT6</h6>
              </div>
       </a>
          </div>   <!-- end-->
          <div class="text-center mt-2">
                  <a href="" class="btn px-5">See More</a>
                 </div>
      </div>
  </div>
  </section>











      <section class="our-fleet mt " >
  
        <div class="container">
              <div class="row">
          
          <div class="col-12 ">
              <h3 class="main-title">SERVICES</h3>
              <div class="title-line"></div>
          </div>
          {{-- <div class="fleet-description">
 
            <h6 class="text">
              Welcome to Bright Empire United Limo, your premier luxury car service provider in New York City. We specialize in Bright Empire limousine services, offering a wide range of options to meet all your transportation needs, from corporate travel to wedding transportation and beyond.
              Our dedicated chauffeurs are available 26 class="text"/7 to provide exceptional service with a smile. With us, you can expect nothing but the best in customer satisfaction. Choose us for all your airport transportation needs, with ample space for luggage and accommodating multiple passengers.
            </h6>
           </div> --}}
          
          
                  <!-- start -->
                  <div class="col-md-4 col-sm-6 p-2">
               <a href="">
               <div class="content">
          <figure class="mb-0">

              <img src="{{asset('./imgs/nightInTown.jpg')}}" alt="" class="w-100" srcset="" height="300px">
          </figure>
          <h6 class="title text-center py-3 mt-0">Night in town</h6>
                      </div>
               </a>
                  </div>  
                   <!-- end-->
                             <!-- start -->
                             <div class="col-md-4 col-sm-6 p-2">
                              <a href="">
                              <div class="content">
                         <figure class="mb-0">
                             <img src="{{asset('./imgs/vip1.jpg')}}" alt="" class="w-100" srcset="" height="300px">
                         </figure>
                         <h6 class="title text-center py-3 mt-0">VIPs Services</h6>
                                     </div>
                              </a>
                                 </div> 
                                   <!-- end-->
                   <!-- start -->
                   <div class="col-md-4 col-sm-6 p-2">
               <a href="">
               <div class="content">
          <figure class="mb-0">
              <img src="{{asset('./imgs/casinoo.jpg')}}" alt="" class="w-100" srcset="" height="300px">
          </figure>
          <h6 class="title text-center py-3 mt-0">Casinos</h6>
                      </div>
               </a>
                  </div>   <!-- end-->
                   <!-- start -->
         {{-- <div class="col-md-4 col-sm-6 p-2">
               <a href="">
               <div class="content">
          <figure class="mb-0">
              <img src="{{asset('./imgs/bookByArea2.jpg')}}" alt="" class="w-100" srcset="" height="300px">
          </figure>
          <h6 class="title text-center py-3 mt-0">Book By Area</h6>
                      </div>
               </a>
        </div>    --}}
                  <!-- end-->
                   <!-- start -->
                   <div class="col-md-4 col-sm-6 p-2">
               <a href="">
               <div class="content">
          <figure class="mb-0">
              <img src="{{asset('./imgs/prom3.jpg')}}" alt="" class="w-100" srcset="" height="300px">
          </figure>
          <h6 class="title text-center py-3 mt-0">Proms Service</h6>
                      </div>
               </a>
                  </div>   <!-- end-->
                   {{-- <!-- start -->
                   <div class="col-md-4 col-sm-6 p-2">
               <a href="">
               <div class="content">
          <figure class="mb-0">
              <img src="{{asset('./imgs/travelingwKids.jpg')}}" alt="" class="w-100" srcset="" height="300px">
          </figure>
          <h6 class="title text-center py-3 mt-0">Traveling with kids</h6>
                      </div>
               </a>
                  </div>   <!-- end--> --}}
                   {{-- <!-- start -->
                   <div class="col-md-4 col-sm-6 p-2">
               <a href="">
               <div class="content">
          <figure class="mb-0">
              <img src="{{asset('./imgs/wedding2.jpg')}}" alt="" class="w-100" srcset="" height="300px">
          </figure>
          <h6 class="title text-center py-3 mt-0">Wedding</h6>
                      </div>
               </a>
                  </div>   <!-- end--> --}}
                   {{-- <!-- start -->
                   <div class="col-md-4 col-sm-6 p-2">
               <a href="">
               <div class="content">
          <figure class="mb-0">
              <img src="{{asset('./imgs/luxuryLimo.jpg')}}" alt="" class="w-100" srcset="" height="300px">
          </figure>
          <h6 class="title text-center py-3 mt-0">luxury Limo Service</h6>
                      </div>
               </a>
                  </div>   <!-- end--> --}}
                   <!-- start -->
                   <div class="col-md-4 col-sm-6 p-2">
               <a href="">
               <div class="content">
          <figure class="mb-0">
              <img src="{{asset('./imgs/airport2.jpg')}}" alt="" class="w-100" srcset="" height="300px">
          </figure>
          <h6 class="title text-center py-3 mt-0">Airport Services</h6>
                      </div>
               </a>
                  </div> 
                    <!-- end-->
                   <!-- start -->
                   <div class="col-md-4 col-sm-6 p-2">
               <a href="">
               <div class="content">
          <figure class="mb-0">
              <img src="{{asset('./imgs/point_to_point.jpeg')}}" alt="" class="w-100" srcset="" height="300px">
          </figure>
          <h6 class="title text-center py-3 mt-0">Point to point service</h6>
                      </div>
               </a>
                  </div> 
                    <!-- end-->
         
                  <div class="text-center mt-2">
                          <a href="{{route('allServices')}}" class="btn px-5">See More</a>
                         </div>
              </div>
          </div>
          </section>















      
     </div>
  </div>


@endsection