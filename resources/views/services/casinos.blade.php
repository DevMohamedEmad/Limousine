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
  color: #fff;
  border-radius: 3px; 
  cursor: pointer;
  transition: .3s background;
}
#overlay a:hover { 
   background: #1a1f35;
   color:#e0b145 ;
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
    <img src="{{asset('./imgs/casinoo.jpg')}}" alt="">
    <!-- <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/overlay.jpg" id="bgvid" playsinline autoplay muted loop> -->
        <!-- 
      - Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
      WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" a  -->
      <!-- <source src="http://thenewcode.com/assets/videos/overlay.webm" type="video/webm"> -->
      <!-- <source src="http://thenewcode.com/assets/videos/overlay.mp4" type="video/mp4"> -->
      
      <!-- </video> -->
      <div id="overlay">
      <h1>CASINOS</h1>
     

    
      <p>If you are looking for a luxury Limo service in NY, look no further than ours. We offer the best in luxury transportation, and our limos are some of the most stylish and well-maintained in the city. In addition, our drivers are professionally trained and experienced, so you can rest assured that you are in good hands.
        We offer different quality services at market competitive prices, so whether you are looking for a simple transfer from one point to another within the city or more elaborate event transportation, we can accommodate your needs.
        So why should you hire Bright Empire limousine service? Simply put, we offer the best in luxury transportation. If you are looking for a stylish and well-maintained limo, professional drivers, and a wide range of services, look no further than us. CONTACT US to learn more about what we can do for you.
        Regarding luxury limousine services, New York is one of the best places in the world to find them. This was one of the very reasons why we launched our best limo service in NY area, to provide our clients with the best possible experience.
        We offer a wide range of luxury services, including wedding transportation, corporate events, destination wedding, birthday venue traveling, and many more. We also offer various limousines to choose from, so you can find the perfect one for your needs and as per the suitability of your budget.
        
        
        
        ABOUT US:
        Professional chauffeurs
        Travel confidently with expert chauffeurs delivering industry-leading quality, reliability, discretion, and more.
        
        Door-to-door convenience
        Rest easy with door-to-door pick-up and drop-off — no waiting in lines or change of transportation needed.
        
        Set your own schedule
        Schedule your pickup whenever you want, and leave departure boards and timetables in the rear-view mirror.
        
        
        
        
        
        What makes us different from the others is:
        We treat our drivers as a family and not just as partners and we share an excellent personalized relationship with them. We always listen to our drivers and our customers to ensure that all parties (customers and drivers) are happy with our service. 
       <br>
        *All reservations require a 100% non-refundable deposit upon reservation booking.*</p>
      <a href=""> Make a Reservation</a>
      </div>
</body>
<script src="../js/bootstrap.bundle.min.js"></script>

</html>