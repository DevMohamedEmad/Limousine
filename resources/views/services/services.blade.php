
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">

<style>
  *{
    margin: 0%;
    padding: 0;
    box-sizing: border-box;
    --color:#2e375f;

  }
  body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #1a1f35;
  }
  .container{
    /* position: relative; */
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 50px 0;
    gap: 80px;
  }
  .title{
    font-size: 3rem;
  text-transform: uppercase;
  margin-top: 0;
  letter-spacing: .1rem;
  color:#e0b145 ;
  }
  .box{
    position: relative ;
    /* background-color:  rgb(32, 32, 62); */
    /* display: flex; */
    justify-content: center;
    align-items: center;
    border-radius: 1rem;
    font-size: 1rem;
    padding: 50px 0;
    gap: 80px;
  }
  
  .box .content {
    position: relative;
     display: flex;
     justify-content: center;
    align-items: center;
    text-align: center;
    flex-direction: column;
    gap: 20px;
    padding: 10px;
   width: 100%;
   height: 100%;
   overflow: hidden;
   transition: 0.5s ease-in-out;
  }
  .box .content .icon {
    color: var(--color);
    width: 100px;
    height: 80px;
    font-size: 3rem;
    box-shadow: 0 0 0 1px;
    border-radius: 50%;
    height: 5rem;
    width: 6rem;
    transition: 0.5s ease-in-out;

  }
  .box:hover .content .icon {
    box-shadow: 0 0 0 4px  #242426 ,
    0 0 0 400px var(--color) ;
    border-radius: 1rem;
    /* background: var(--color);
    color: rgb(32, 32, 62) ; */
    /* width: 100%; */
    
  }
  .box .content .icon img {
    width: 100px;
    height: 80px;
    font-size: 3rem;
 
    border-radius: 50%;
    height: 6rem;
    width: 6rem;
    transition: 0.5s ease-in-out;
  }
  .box:hover .content img {
    border-radius: 1rem;
  }
  .box .content .text h3{
    font-size: 1.5em;
    color: bisque;
    font-weight: 500;
    transition: 0.5s ease-in-out;
  }
  .box:hover .content .text h3 {
    /* color: #20203e; */
    color:#e0b145;
  }
  .box .content .text p{
    color: #777;
    transition: 0.5s ease-in-out;

  }
  .box:hover .content .text p {
    /* color: #20203e; */
    color: #dadae4;
  }
  .box .content .text a{
    position: relative;
    background: var(--color);
    color: #afafb5;
    padding: 8px 15px;
    display: inline-block;
    text-decoration: none;
    font-weight: 500;
    margin-top: 10px;
    border-radius: 1rem;
    transition: 0.5s ease-in-out;
  }
  .box:hover .content .text a{
    /* background: #20203e; */
    background: #e0b145;
    color: var(--color)
  }
  .sub-title{
    color: #e8d19d;
    text-align: center;
    padding-top: 1rem;
    justify-content: space-around;
    letter-spacing: .1rem;
  }

</style>
</head>
<body>

  {{-- @extends('layouts.master')
  @section('content') --}}
  
  {{-- @extends('layouts.header')
@section('content') --}}
  <div class="container">
    <div >
    

  <h1 class="text-center title">Our Services</h1>
<h5 class="sub-title">We treat our drivers as a family and not just as partners and we share an excellent personalized relationship with them. We always listen to our drivers and our customers to ensure that all parties (customers and drivers) are happy with our service. </h5>
    </div>
      
<div class="row ">
  <div class=" box col-lg-4 col-md-6 col-sm-12 " style=" --color: rgb(226, 169, 14);">
    <div class="content">
      <div class="icon"> <img src="{{asset('./imgs/airport2.jpg')}}" alt=""> </div>
      <div class="text">
        <h3>AIRPORT CAR SERVICES</h3>
        <p>Bright Empire limousine aims to achieve the 
          highest possible standards for all its passengers. 
          Whether you’re stepping out of JFK, LGA ,EWR , HPN,TEB or 
          any other airport around the TRI state area and its 
          neighbors states as well   or you need to be dropped off at any airport of them 
        </p>
        <a href="{{route('airportService')}}">Know More</a>
      </div>
    </div>
  </div>
  <div class="box col-lg-4 col-md-6 col-sm-12" style="--color: rgb(137, 137, 238);">
    <div class="content">
      <div class="icon"> <img src="{{asset('./imgs/vip1.jpg')}}" alt=""> </div>
      <div class="text">
        <h3>VIP TRANSPORTATION </h3>
        <p>With Bright Empire limousine City to City rides,
           the ease of long-distance travel is more comfortable
            than ever. You’ll save time by using our services,
            and can instead use the travel time how you’d like
           private phone calls, last-minute presentation prep,
            or even catching up on sleep. Our chauffeurs are bound by discretion and
             give you the space and privacy you need to deliver the best.</p>
        <a href="{{route('vipService')}}">Know More</a>
      </div>
    </div>
  </div>
  <div class="box col-lg-4 col-md-6 col-sm-12" style="--color: rgb(255, 47, 0);">
    <div class="content">
      <div class="icon"><img src="{{asset('./imgs/nightInTown.jpg')}}"  alt=""></div>
      <div class="text">
        <h3>NIGHT In TOWN</h3>
        <p>Hiring a private limo is convenient and a way to turn heads and make a bold statement
           when you arrive at a venue. If you believe in the power of first impressions, 
           then nothing is better than rolling in a suave and sophisticated limousine.
            The vehicle can accommodate large groups and offer a level of comfort that no other vehicle can. 
          If you are ready for a night out, then we are ready to take you wherever you want to go
          </p>
        <a href="{{route('nightToTown')}}">Know More</a>
      </div>
    </div>
  </div>
  <div class="box col-lg-4 col-md-6 col-sm-12" style="--color: rgb(176, 186, 204);">
    <div class="content">
      <div class="icon"><img src="{{asset('./imgs/point_to_point.jpeg')}}" alt=""></div>
      <div class="text">
        <h3>POINT TO POINT TRANSFERS</h3>
        <p> Our chauffeurs are trained professionals that are always respectful and know how to get to destinations in advance using the safest and most reliable routes.
          They will make sure to go an extra mile to make sure your ride is as comfortable and relaxing as possible.
          chauffeured luxury vehicles are equipped with state-of-the-art features,
          and we are ready to take you wherever you want to go </p>
        <a href="{{route('pointToPointService')}}">Know More</a>
      </div>
    </div>
  </div>
  <div class="box col-lg-4 col-md-6 col-sm-12" style="--color: rgb(0, 255, 174);">
    <div class="content">
      <div class="icon"><img src="{{asset('./imgs/wedding2.jpg')}}" alt=""></div>
      <div class="text">
        <h3>WEDDING</h3>
        <p>Our experienced team provides comfortable and efficient transportation 
          that helps everyone get to and from the venue in comfort and style
          .When you plan your wedding, there are many details to consider,
           such as finding the right venue, hiring a band, renting a tux or buying a wedding dress, 
           sending out invitations, and arranging the rehearsal dinner. 
           However, you can’t forget about the transportation. 
           At Bright Empire limousine, we offer convenient and 
          reliable wedding limo rental services in NY area</p>
        <a href="{{route('weddingService')}}">Know More</a>
      </div>
    </div>
  </div>
  <div class="box col-lg-4 col-md-6 col-sm-12" style="--color: rgb(241, 168, 22);">
    <div class="content">
      <div class="icon"><img src="{{asset('./imgs/travelingwKids.jpg')}}" alt=""></div>
      <div class="text">
        <h3>TRAVELLING WITH KIDS</h3>
        <p>Bright Empire limousine provides five-star limo services for you and your kids 
          you come ,your privacy and you will be safe you and your family don't forget 
          to tell about your needs to make it become true,
          Our chauffeurs are trained professionals that are always respectful and know how to get to destinations in advance using the safest and most reliable routes.
          They will make sure to go an extra mile to make sure your ride is as comfortable and relaxing as possible.
        </p>
        <a href="{{route('travelingWithKids')}}">Know More</a>
      </div>
    </div>
  </div>
  <div class="box col-lg-4 col-md-6 col-sm-12" style="--color: rgb(86, 22, 123);">
    <div class="content">
      <div class="icon"><img src="{{asset('./imgs/prom3.jpg')}}" alt=""></div>
      <div class="text">
        <h3>PROMS</h3>
        <p>Bright Empire limousine provides five-star limo services for special events
          , including homecoming, prom, graduation or 
          any other special school occasion. Our professionally chauffeured
           luxury vehicles are equipped with state-of-the-art features including GPS
            tracking system, flat screen TVs,
           and surround sound stereo.
           Our chauffeurs are trained professionals that are always respectful</p>
        <a href="{{route('promsService')}}">Know More</a>
      </div>
    </div>
  </div>
  <div class="box col-lg-4 col-md-6 col-sm-12" style="--color: rgb(37, 138, 205);">
    <div class="content">
      <div class="icon"><img src="{{asset('./imgs/bookByArea2.jpg')}}" alt=""></div>
      <div class="text">
        <h3>BOOK BY AREA</h3>
        <p> 
          The best choice to call us as soon as possible and 
          make sure that you have your required places.
          When planning your trip, whenever you needed us just tell us 
          Our chauffeurs are trained professionals that are always respectful and know how to get to destinations in advance using the safest and
           most reliable routes.
          They will make sure to go an extra mile to make sure your ride is as comfortable and relaxing as possible.
          chauffeured luxury vehicles are equipped with state-of-the-art features 
        <a href="{{route('bookByArea')}}">Know More</a>
      </div>
    </div>
  </div>
  <div class="box col-lg-4 col-md-6 col-sm-12" style="--color: rgb(10, 111, 20)">
    <div class="content">
      <div class="icon"><img src="{{asset('./imgs/casinoo.jpg')}}" alt=""></div>
      <div class="text">
        <h3>CASINOS</h3>
        <p>Bright Empire offers safe and reliable service to all casinos in New York.
           Bright Empire is there for you.
           We can give you a ride from the airport directly to your hotel or casino of choice.
          
          Our chauffeurs are trained professionals that are always respectful and know how to get to destinations in advance using the safest and most reliable routes.
           They will make sure to go an extra mile to make sure your ride is as comfortable and relaxing as possible.</p>
        <a href="{{route('casinos')}}">Know More</a>
      </div>
    </div>
  </div>
  <div class="box col-lg-4 col-md-6 col-sm-12" style="--color: rgb(0, 94, 255);">
    <div class="content">
      <div class="icon"><img src="{{asset('./imgs/luxuryLimo.jpg')}}" alt=""></div>
      <div class="text">
        <h3> LUXURY LIMOUSINE SERVICE </h3>
        <p>We offer different quality services at market 
          competitive prices, so whether you are looking for a simple transfer from one point to another within the city or more elaborate event transportation, we can accommodate your needs.
          we offer the best in luxury transportation. 
          If you are looking for a stylish and well-maintained
           limo, professional drivers, and a wide range of services, look no further than us. CONTACT US to learn more about what we can do for you</p>
        <a href="{{route('luxuryLimoService')}}">Know More</a>
      </div>
    </div>
  </div>
</div>

</div>
  </div>
  {{-- @endsection --}}
  {{-- @endsection --}}
</body>
<script src="../js/bootstrap.bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>