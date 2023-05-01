<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>
    <link rel="stylesheet" href="{{asset('../css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/all.min.css')}}">
    <style>
     body {
  margin: 0;
  background: #000; 
}
img { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 background: url('//demosthenes.info/assets/images/overlay.jpg') no-repeat;
  background-size: cover;
  transition: 1s opacity;
}
.stopfade { 
   opacity: .5;
}

#overlay { 
  font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
  font-weight:100; 
  background: rgb(46, 55, 95,0.3);
  color: white;
  /* color: black; */
  padding: 1.5rem;
  width: 49%;
  margin:2rem;
  float: right;
  font-size: 1.2rem;
}
h1 {
  font-size: 3rem;
  text-transform: uppercase;
  margin-top: 0;
  letter-spacing: .1rem;
  color:#e0b145 ;
  text-align: center;
}
#overlay a { 
  display: block;
  width: 80%;
  padding: .4rem;
  border: none; 
  margin: 1rem auto; 
  font-size: 1.3rem;
  background: #2e375f;
  /* color: #fff; */
  color:#e0b145 ;
  border-radius: 3px; 
  cursor: pointer;
  transition: .3s background;
}
#overlay a:hover { 
   background: #1a1f35;
 
}

a {
  display: inline-block;
  /* color: #fff; */
  color:#e0b145 ;
  text-decoration: none;
  background:rgba(0,0,0,0.5);
  padding: .5rem;
  transition: .6s background;
  text-align: center; 
}
a:hover{
  background:rgba(0,0,0,0.9);


}
@media only screen and (max-width: 600px)  { 
  #overlay{width:85%;} 
  img{width:70%;}
}

@media screen and (max-device-width: 800px) {
  html { background: url(https://thenewcode.com/assets/images/overlay.jpg) #000 no-repeat center center fixed; }
  #bgvid { display: none; }
}
    </style>
</head>
<body>
    <img src="{{asset('./imgs/vip4.jpg')}}" alt="">
    <!-- <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/overlay.jpg" id="bgvid" playsinline autoplay muted loop> -->
        <!-- 
      - Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
      WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" a  -->
      <!-- <source src="http://thenewcode.com/assets/videos/overlay.webm" type="video/webm"> -->
      <!-- <source src="http://thenewcode.com/assets/videos/overlay.mp4" type="video/mp4"> -->
      
      <!-- </video> -->
      <div id="overlay">
      <h1>VIP TRANSPORTATION</h1>
     

    
      <p>
 <h2>Maximize your time</h2>
 With Bright Empire limousine City to City rides, the ease of long-distance travel is more comfortable than ever. You’ll save time by skipping the airports and train stations, and can instead use the travel time how you’d like — private phone calls, last-minute presentation prep, or even catching up on sleep. Our chauffeurs are bound by discretion and give you the space and privacy you need to deliver your best.
        
        
        
       <h2> Long-Distance travel </h2>
        Reach Philadelphia, Washington DC, Boston, Baltimore, Buffalo,
         or Another Location with Private Driver and 
         Luxurious Chauffeured Vehicle
        How does a long-distance limousine service work?
         Bright Empire limousine offers various chauffeur services in New York City. 
         You can book a black car hourly, choose point-to-point transportation,
          or hire a personal driver for the whole day and custom-tailor your trip.
           Flying can be time-wasting and stressful, with so much time spent at the 
           airport and all those lines and procedures. 
           If you have an important meeting or an event in another city and want the most convenient and accurate transportation, limousine service for long distances is the way to go.
        <h2>City-to-City Ground Transportation Service</h2>
        You can travel from New York to any nearby city, airport, town, or village. Some of the most popular destinations for long-distance travelers are:
        Boston, MA
        Philadelphia, PA
        Washington D.C.
        Atlantic City, NJ
        Baltimore, MD
        Providence, RI
        New Haven, CT
        Hartford, CT
        Pittsburgh, PA
        Niagara Falls, NY
        <br>
        *All reservations require a 100% non-refundable deposit upon reservation booking.*</p>
      <a href=""> Make a Reservation</a>
      </div>
</body>
<script src="../js/bootstrap.bundle.min.js"></script>

</html>