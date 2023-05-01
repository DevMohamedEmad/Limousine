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
  width: 50%;
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
  color: #e0b145;
  border-radius: 3px; 
  cursor: pointer;
  transition: .3s background;
}
#overlay a:hover { 
   background: #1a1f35;
}

a {
  display: inline-block;
  color: #fff;
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
    <img src="{{asset('./imgs/point_to_point.jpeg')}}" alt="">
    <!-- <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/overlay.jpg" id="bgvid" playsinline autoplay muted loop> -->
        <!-- 
      - Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
      WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" a  -->
      <!-- <source src="http://thenewcode.com/assets/videos/overlay.webm" type="video/webm"> -->
      <!-- <source src="http://thenewcode.com/assets/videos/overlay.mp4" type="video/mp4"> -->
      
      <!-- </video> -->
      <div id="overlay">
      <h1>POINT TO POINT TRANSFERS</h1>
     

    
      <p>If you’ve just stepped off a plane, tired and aching from a long flight, there can be no better antidote to your ailments than Bright Empire limousine airport transfer direct to your destination. Bright Empire limousine available 24/7 and offers a service that will take you to your destination directly from the airport. Wherever you go, our professional drivers can track your flight and adjust for any delays outside of your control. They’re hand-picked and locally knowledgeable, so feel free to ask them for tips or advice on what to do during your stay.

        Bright Empire limousine aims to achieve the very highest possible standards for all its passengers. Whether you’re stepping out of JFK, LGA ,EWR , HPN,TEB or any other airport around the TRI state area and its neighbors states as well   or you need to be dropped off at any airport of them after a holiday or a business trip we will get you there relaxed, recharged and ready with an airport transfer service. Traveling from airports to your hotel with family or colleagues? Bright Empire limousine Business Van can be shared by up to five people together, with plenty of room for luggage. For those after that little bit extra, consider our First Class service for the epitome of style and comfort - a great idea for special occasions.
        
        
        
        
        All-inclusive pricing
        Count on all-inclusive rates — that's all taxes, tips, and tolls — confirmed before booking, unless you made any changes to the reservation after you started your ride.
        
        Seamless airport travel 
        Relax with 1 hour of complimentary wait time and flight tracking for international flights, and 30 minutes of complimentary wait time and flight tracking for domestic flights.
        
        
        Travel on your terms
        Stay flexible and in charge of your schedule. It’s quick and easy for you to cancel or make changes to any ride.
     <br>
        *All reservations require a 100% non-refundable deposit upon reservation booking.*</p>
      <a href=""> Make a Reservation</a>
      </div>
</body>
<script src="../js/bootstrap.bundle.min.js"></script>

</html>