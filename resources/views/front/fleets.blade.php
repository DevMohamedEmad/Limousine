@extends('layouts.header')
@section('content')

<!-- start fleet -->
<section class="fleet">
    <div class="container ">
       <div class="row ">
            <header class="fteel_header mb-5">
               <h2 class="text-center">Our Fleet</h2>        
            </header>
            <div class="filter col-12 row justify-content-center mb-3">
             <ul class="d-flex justify-content-between w-50 px-5 text-center ">
                <li>
                    <div class="link"><a href="details.html" class="btn-default btn5 text-center"><span classs="px-5 py-3">All</span></a></div>                
                </li>
                <li>
                    <div class="link"><a href="details.html" class="btn-default btn5 text-center"><span classs="px-5 py-3">check rats</span></a></div>       
                </li>
                <li>
                    <div class="link"><a href="details.html" class="btn-default btn5 text-center"><span classs="px-5 py-3">check rats</span></a></div>
                </li>
                <li>
                    <div class="link"><a href="details.html" class="btn-default btn5 text-center"><span classs="px-5 py-3">check rats</span></a></div>
                 </li>
             </ul>
            </div>
            <!-- start card -->
            <div class="col-lg-3 col-md-6 col-12 p-2">
                <div class="fleet_card  ">
                    <figure class="fleet_img ">
                        <img src="./2019-Ford-Transit-A.jpg" alt="" srcset="" class="w-100">
                    </figure>
                    <div class="fleet_content ps-2">
                        <div class="txt2">
                            2010 Nord Bistang / YELLOW 
                        </div>
                        <ul class="fleet_list pt-2">
                              <li> <i class="fa-solid fa-person me-2"></i><span>1-4 passengers</span> </li>
                              <li><i class="fa-solid fa-person-walking-luggage me-2"></i><span>Luggage 1-2 Large or 2-3 Small</span> </li>
                              <li> <i class="fa-solid fa-car-side me-2"></i><span>Plus leather seating</span> </li>
                              <li> <i class="fa-solid fa-car me-2"></i><span>Dual Illuminating Vanity Mirrors</span> </li>
                        </ul>
                        <div class="text-center" >
                            <div class="link"><a href="details.html" class="btn-default btn4"><span>READ MORE</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->   
            <!-- start card -->
            <div class="col-lg-3 col-md-6 col-12 p-2">
                <div class="fleet_card  ">
                    <figure class="fleet_img ">
                        <img src="./2019-Ford-Transit-A.jpg" alt="" srcset="" class="w-100">
                    </figure>
                    <div class="fleet_content ps-2">
                        <div class="txt2">
                            2010 Nord Bistang / YELLOW 
                        </div>   
                        <ul class="fleet_list pt-2">
                            <li> <i class="fa-solid fa-person me-2"></i><span>1-4 passengers</span> </li>
                            <li><i class="fa-solid fa-person-walking-luggage me-2"></i><span>Luggage 1-2 Large or 2-3 Small</span> </li>
                            <li> <i class="fa-solid fa-car-side me-2"></i><span>Plus leather seating</span> </li>                   
                            <li> <i class="fa-solid fa-car me-2"></i><span>Dual Illuminating Vanity Mirrors</span> </li>
                        </ul>
                        <div class="text-center" >
                            <div class="link"><a href="details.html" class="btn-default btn4"><span>READ MORE</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->        
            <!-- start card -->
            <div class="col-lg-3 col-md-6 col-12 p-2">
                <div class="fleet_card  ">
                    <figure class="fleet_img ">
                        <img src="./2019-Ford-Transit-A.jpg" alt="" srcset="" class="w-100">
                    </figure>
                    <div class="fleet_content ps-2">
                        <div class="txt2">
                            2010 Nord Bistang / YELLOW 
                        </div>   
                        <ul class="fleet_list pt-2">
                            <li> <i class="fa-solid fa-person me-2"></i><span>1-4 passengers</span> </li>
                            <li><i class="fa-solid fa-person-walking-luggage me-2"></i><span>Luggage 1-2 Large or 2-3 Small</span> </li>
                            <li> <i class="fa-solid fa-car-side me-2"></i><span>Plus leather seating</span> </li>                   
                            <li> <i class="fa-solid fa-car me-2"></i><span>Dual Illuminating Vanity Mirrors</span> </li>
                        </ul>
                        <div class="text-center" >
                            <div class="link"><a href="details.html" class="btn-default btn4"><span>READ MORE</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->      
        </div>
    </div>
</section>    
    <!-- end fleets -->
@endsection