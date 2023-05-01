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
  width: 40%;
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
    <img src="{{asset('./imgs/wedding1.jpg')}}" alt="">
    <!-- <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/overlay.jpg" id="bgvid" playsinline autoplay muted loop> -->
        <!-- 
      - Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
      WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" a  -->
      <!-- <source src="http://thenewcode.com/assets/videos/overlay.webm" type="video/webm"> -->
      <!-- <source src="http://thenewcode.com/assets/videos/overlay.mp4" type="video/mp4"> -->
      
      <!-- </video> -->
      <div id="overlay">
      <h1>WEDDING</h1>
     

    
      <p>Wedding time! Whether it’s your wedding day or you’re planning the bridal party, stylish transportation is critical to a successful wedding day. Plan your memorable day and forget about the transportation worries with Bright Empire limousine!
        We offer premier, reliable wedding limo service. Our experienced team provides comfortable and efficient transportation that helps everyone get to and from the venue in comfort and style.When you plan your wedding, there are many details to consider, such as finding the right venue, hiring a band, renting a tux or buying a wedding dress, sending out invitations, and arranging the rehearsal dinner. However, you can’t forget about the transportation. At Bright Empire limousine, we offer convenient and reliable wedding limo rental services in NY area, and the surrounding states. Get in touch with us or request a quote and let us handle your ground transportation needs.
        
        Book in Advance
        Usually, you should schedule your limo transportation service at least two months before your big day. Our wide range of services is in high demand during prom and graduation season, so you may expect everything to be booked if your wedding falls within this period. It is best to call as soon as possible and make sure that you have a wedding checklist.
        When planning your wedding transportation, here are some transportation events you may want to keep in mind:
          <ul>
            <li>  	Engagement party
               </li>
               <li>Bachelor party</li>
               <li>Bridal shower</li>
               <li>Rehearsal dinner  </li>
              <li>Bride and groom “Getaway” vehicle</li>
              <li>Airport drop-off for the honeymoon</li>
              <li>Airport pick-up after the honeymoon</li>
          </ul>
        
        It is essential to know where you’re going, as our limo company can offer suggestions on what we think the best route would be to optimize your wedding day timeline and save you precious time. 
        <h2>Add a 20-30 Minute Time Cushion</h2> 
        If your wedding is in the city, you may want to add an extra 20 to 30 minutes to get around traffic. If the ceremony and the reception are not at the same location, you should take notes of any special events happening within this area. Concerts, festivals, sporting events, or parades will contribute to increased traffic or might block the roads altogether.
       <br>
        *All reservations require a 100% non-refundable deposit upon reservation booking.*</p>
      <a href=""> Make a Reservation</a>
      </div>
</body>
<script src="../js/bootstrap.bundle.min.js"></script>

</html>