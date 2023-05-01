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
    <img src="{{asset('./imgs/travelingwKids.jpg')}}" alt="">
    <!-- <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/overlay.jpg" id="bgvid" playsinline autoplay muted loop> -->
        <!-- 
      - Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
      WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" a  -->
      <!-- <source src="http://thenewcode.com/assets/videos/overlay.webm" type="video/webm"> -->
      <!-- <source src="http://thenewcode.com/assets/videos/overlay.mp4" type="video/mp4"> -->
      
      <!-- </video> -->
      <div id="overlay">
      <h1>TRAVELLING WITH KIDS</h1>
     

    
      <p>[Bright Empire] is a top-tier limousine service provider in New York City that specializes in offering safe and comfortable transportation for families with children. Our website provides a simple and convenient way for parents to book a ride with their children, knowing that their safety is our top priority.

        We understand that traveling with children can be stressful, which is why we offer a range of amenities designed to make the journey as smooth as possible. Our vehicles are spacious, with ample room for child seats and strollers, and our drivers are experienced and trained to handle all kinds of family travel needs.
        
        At [Bright Empire], we know that children have unique needs, which is why we provide age-appropriate entertainment options, such as iPads and games, to keep them occupied during the ride. We also provide booster seats and infant car seats for added safety, and all of our vehicles are equipped with first-aid kits and emergency supplies in case of any unforeseen situations.
        
        Booking a ride with [Bright Empire] is easy, with our user-friendly website that allows parents to specify their unique requirements and preferences. With our emphasis on safety, comfort, and convenience, parents can rest assured that their children are in good hands when they travel with us.
        
        
        
        
        
        
        
        
       
        
        
        
        What makes us different from the others is:
        We treat our drivers as a family and not just as partners and we share an excellent personalized relationship with them. We always listen to our drivers and our customers to ensure that all parties (customers and drivers) are happy with our service. 
        <br>
        *All reservations require a 100% non-refundable deposit upon reservation booking.*</p>
      <a href=""> Make a Reservation</a>
      </div>
</body>
<script src="../js/bootstrap.bundle.min.js"></script>

</html>