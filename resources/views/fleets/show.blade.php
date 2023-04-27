@extends('layouts.index')

@section('style')
{{ asset('css/style.css') }}
@endsection
@section('content')
<div class="py-5 my-5"></div>
<section class="car">
      <div class="container">
            <div class="row">
                  <h1 class="text-center py-5"></h1>
                  <!-- left side -->
                  <div class="col-md-8 col-12  row">
                        <div class="car_big-img col-12 mb-2 ">
                              <img src="{{ asset($car->photos[0]->photo) }}" alt="" srcset="" class=" car_img h-100 w-100" id="big_img">
                              <div class="layer d-flex justify-content-between  ">
                                    <i class="fa-solid fa-angle-left fs-2" id="left"></i>
                                    <i class="fa-solid fa-angle-right fs-2" id="right"></i>
                              </div>
                        </div>
                        <div class="car_small-img row  col-12 justify-content-between pt-2 px-0">
                             @foreach ($car->photos as $photo)
                              <div class="col-3  ">
                                  <img src="{{ asset($photo->photo) }}" alt="" srcset="" class="w-100 car_img  h-100">
                              </div>   
                             @endforeach
                        </div>
                        <div class="col-12 ">
                              <p class=" pt-5">
                                    Whether you are on a business trip, vacation, or have a special occasion, Empire Limousine is at your service. We have a number of different fleet options, so you are sure to find a vehicle within your budget to meet your needs.<br><br>

                                    Our collection of executive sedans will definitely take your breath away.
                                    <br><br> They are well-maintained and come with highly professional and skilled chauffeurs. Our sedans provide a comfortable seating arrangement for up to 4 passengers. <br><br>
                                    Whether you are traveling with family or friends, booking one of our executive sedans will do the job for you.

                                    We respect your privacy and comfort and for those reasons, we provide tinted glass windows in all our vehicles and plush interiors that offer unbeatable comfort.<br><br>
                                    Our sedans have enough space in the trunks to keep your luggage so you don’t have to keep them on your seats or the ground. You can relax and read a book, enjoy some music or have drinks all while having peace of mind by traveling with our professional, experienced chauffeurs.<br><br>


                                    Our sedan services are available throughout the week at any hour of the day. If you want to get the details of our rates for different routes, you can go through our rate chart specifically designed for luxury sedan 1-4 passengers.

                                    Over the years, Empire Limousine has proved to be one of the leading contenders of providing luxury sedan services to thousands of happy customers all around the world. So if you are thinking of traveling in the future, then book an Empire Limousine sedan today!

                                    Check Rates
                              </p>
                              <div class="mt-5">
                                    <div class="link"><a href="details.html" class="btn-default btn4 "><span classs="px-5 py-3">check rats</span></a></div>
                              </div>
                        </div>
                  </div>
                  <!-- right side -->
                  <div class="col-md-4 col-12 pe-2 ">
                        <figure class="car_img-right-side">
                              <img src="./2019-Ford-Transit-A.jpg" alt="" srcset="" class="w-100">
                        </figure>
                        <div class="rigt_content  py-5 px-1">
                              <h5 class="">{{ $car->name }}</h5>
                              <ul class="right_list pt-3">
                                    <li class="py-2"> <i class="fa-solid fa-person me-2 "></i><span>{{ $car->features[0]->feature }}</span> </li>
                                    <li class="p-2"><i class="fa-solid fa-person-walking-luggage me-2 "></i><span>{{ $car->features[1]->feature  }}</span> </li>
                                    <li class="p-2"> <i class="fa-solid fa-car-side me-2 "></i><span>{{ $car->features[2]->feature  }}</span> </li>
                                    <li class="p-2"> <i class="fa-solid fa-car me-2 "></i><span>{{ $car->features[3]->feature  }}</span> </li>
                              </ul>
                              <div class="text-center mt-5">
                                    <div class="link"><a href="details.html" class="btn-default btn4 "><span classs="px-5 py-3">Book Now</span></a></div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</section>
@endsection