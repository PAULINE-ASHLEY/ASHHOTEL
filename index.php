<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ASH HOTEL</title>
    <style>
body, html {
  height: 100%;
  font-family: 'quicksand', sans-serif;
}
* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("images/contact.jpg");

  min-height: 520px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 200px;
  padding: 16px;
  background-color: white;
}
select {
  width:100%;
  padding:5px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color: #f2f2f2;
}
/* Set a style for the submit button */
.btn {
  background-color:green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.mapWrapper{
  position: relative;
  padding-bottom:40%;
}
.mapWrapper iframe{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height:100%;
}
button{
  background-color:white;
  width: 140px;
  height: 35px;
  font-size: 14px;
  color:green;
  border: 1px solid green;
}
/* Slideshow container */
.slideshow-container {
  max-width:100%;
  position: relative;
  margin: auto;
  height: 600px;
}

/* Hide the images by default */
.mySlides {
  display: none;
}
label{
  color:grey;
  text-align: center;
  font-weight: bolder;
}
input[type=date]{
  width: 100%;
  display: inline-block;
  border: 1px solid grey;
  box-sizing: border-box;
}
</style>
  </head>
  <body>
    <?php include 'nav.php'; ?>

    <div class="bg-img">
      <form action="" class="container">
        <h1 style="color:green;font-size:24px;text-align:center;text-decoration:underline">Book Now</h1>
<p style="font-size:14px;color:green;font-weight:bold">Booking direct via our hotel website is the best way to book.</p><br>
          <label for="from">ARRIVAL DATE</label><br>
        <input type="date" id="birthday" name="birthday">
        <label for="to">DEPARTURE DATE</label><br>
        <input type="date" id="ends" name="ends">
        <label for="to">ADULTS</label><br>
        <select id="or" name="or">
        <option value="adults">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>
      <label for="to">CHILDREN</label><br>
      <select id="or" name="or">
      <option value="children">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>
<button style="background-color:black;color:white;font-weight:bold;width:170px;margin-top:20px" type="button" name="button">
  BOOK NOW</button>
      </form>
    </div>
    <div class="row">
      <div class="col-3 col-s-3 menu">
      </div>
      <div class="col-3 col-s-6 menu">
    <img src="images/logo.png" alt="logo" style="max-width:100%;height:100px;">
      </div>
      <div class="col-3 col-s-9 menu">
        <img src="images/hotel.jpg" alt="hotel" style="max-width:100%;height:100px;">
      </div>
      <div class="col-3 col-s-12 menu">
      </div>
      </div>

    <h1 style="color:green;font-size:22px;text-align:center;">ASH HOTEL</h1><br>
      <p style="font-size:16px;color:grey;text-align:center">Ash Hotel. A hotel like no other.
        All your agendas are taken care of.It brings you  close to your home. </p>

  <div style="padding:60px">
    <div class="row">
      <div class="col-1 col-s-2 menu">
      </div>

     <div class="col-6 col-s-9 menu">
       <img src="images/room.jpg" alt="room" style="max-width:100%;height:auto;">
     </div>
     <div class="col-3 col-s-12 menu">
     <h1 style="color:green;font-size:22px;padding-top:100px">ASH IS A PHILOSOPHY</h1><br>
     <p style="font-size:16px;color:grey;padding-bottom:10px">Ash welcomes guests to a
       luxurious experience. The hotel maintains a benchmark of excellence in every aspect of its offerings.
       The guestrooms and suites excite and soothe at the same time.</p>
      <a href="overview1.php"><button type="button" name="button">FIND OUT MORE ></button></a>
     </div>
     <div class="col-2 col-s-2 menu">
     </div>
    </div>

    <div class="row">
      <div class="col-1 col-s-2 menu">
      </div>
     <div class="col-3 col-s-12 menu">
     <h1 style="color:green;font-size:22px;padding-top:100px">UNIQUE DINING EXPERIENCE</h1><br>
     <p style="font-size:16px;color:grey;padding-bottom:10px">Inspired by the open flame grill,
       the seasonal menu is a tribute to local farmers; paying homage to crisp flavors and fresh, organic ingredients.
       Ash authentically uplifts its inspirations while offering guests the delights of whimsy and fantasy through a
       playful approach to presentation.
</p>
         <a href="overview.php"><button type="button" name="button">FIND OUT MORE ></button></a>
     </div>
     <div class="col-6 col-s-9 menu">
       <img src="images/event.jpg" alt="event" style="max-width:100%;height:auto;">
     </div>
     <div class="col-2 col-s-2 menu">
     </div>
    </div>

    <div class="row">
      <div class="col-1 col-s-2 menu">
      </div>
     <div class="col-6 col-s-9 menu">
       <img src="images/event3.jpg" alt="event3" style="max-width:100%;height:auto;">
     </div>
     <div class="col-3 col-s-12 menu">
     <h1 style="color:green;font-size:22px;padding-top:100px">ESCAPE TO ASH</h1><br>
<p style="font-size:16px;color:grey;padding-bottom:10px">Resource rich, mystical and often enchanted,forests
  have provided solace for tribes for generations.</p>
         <a href="event.php"><button type="button" name="button">FIND OUT MORE ></button></a>
     </div>
     <div class="col-2 col-s-2 menu">
     </div>
    </div>
</div>

    <div style="padding-bottom:30px;background-color:#DCDCDC" class="row">
      <div class="col-3 col-s-3 menu">
      </div>
     <div class="col-6 col-s-9 menu">
       <h1 style="color:green;text-align:center;font-size:20px;padding-top:100px">THE WARMTH OF AFRICA</h1><br>
       <p style="font-size:16px;text-align:center;color:grey;padding-bottom:30px">From the hotel’s inspired architecture
         and interiors to the staff’s singular focus on exemplary service, a common vision pervades: the unity of form and
         function celebrated within the diversity of cultures, styles and materials.
   </p>
     </div>
     <div class="col-3 col-s-12 menu">
     </div>
    </div>

    <div style="padding:60px" class="row">
      <h1 style="color:green;text-align:center;font-size:22px;padding-bottom:20px">PLACES TO EXPLORE IN NAIROBI</h1>
      <div class="col-3 col-s-3 menu">
        <div style="background-color:white;border: 2px solid white;padding: 20px;box-shadow: 10px 10px 10px 10px #E0E0E0;">
        <img src="images/david.jpg" alt="david" style="max-width:100%;height:auto;">
        <h1 style="color:green;text-align:center;font-size:20px;padding-top:10px">DAVID SHELDRICK WILDLIFE TRUST</h1><br>
        <p style="font-size:16px;text-align:center;color:grey;padding-bottom:30px">At the heart of the DSWT’s conservation
          activities is the Orphans’ Project, which has achieved worldwide acclaim through its hugely successful elephant
          and rhino rescue and rehabilitation program. The Orphans’ Project exists to offer hope for the future of Kenya’s
          threatened elephant and rhino populations as they struggle against the threat of poaching for their ivory and horn,
          and the loss of habitat due to human population pressures and conflict, deforestation and drought.</p>
</div>
<div style="background-color:white;border: 2px solid white;padding: 20px;box-shadow: 10px 10px 10px 10px #E0E0E0;">
          <img src="images/giraffe.jpg" alt="giraffe" style="max-width:100%;height:auto;">
          <h1 style="color:green;text-align:center;font-size:20px;padding-top:10px">GIRAFFE CENTRE</h1><br>
          <p style="font-size:16px;text-align:center;color:grey;padding-bottom:30px">The Giraffe Centre is the creation
            of the African Fund for Endangered Wildlife (A.F.E.W. Kenya), a Kenyan non-profit organisation. Their main
            purpose is to educate Kenyan school children and youth on their country's wildlife and environment, as well
            as give local and international visitors an opportunity to come into close Rothschild Giraffe.</p>
</div>
      </div>
     <div class="col-3 col-s-6 menu">
  <div style="background-color:white;border: 2px solid white;padding: 20px;box-shadow: 10px 10px 10px 10px #E0E0E0;">
         <img src="images/karura.jpg" alt="karura" style="max-width:100%;height:auto;">
         <h1 style="color:green;text-align:center;font-size:20px;padding-top:10px">KARURA FOREST</h1><br>
         <p style="font-size:16px;text-align:center;color:grey;padding-bottom:30px">The Karura Forest Reserve is an urban
           upland forest on the outskirts of Nairobi, the capital of Kenya. This remarkable geographical location and natural
           resource is one of the largest gazetted forests in the world fully within a city limits. It covers an area of
           about 1,000 ha (2,500 ac) and today is a shining example of how country-based corporate social responsibility
           and individual philanthropy can serve to secure and protect a country’s natural resources.</p>
</div>
<div style="background-color:white;border: 2px solid white;padding: 20px;box-shadow: 10px 10px 10px 10px #E0E0E0;">
       <img src="images/kiambethu.jpg" alt="kiambethu" style="max-width:100%;height:auto;">
       <h1 style="color:green;text-align:center;font-size:20px;padding-top:10px">KIAMBETHU FARM</h1><br>
       <p style="font-size:16px;text-align:center;color:grey;padding-bottom:30px">Just a short drive from the heart of Nairobi,
         Kiambethu Farm at Limuru provides a tranquil insight into life on a settler farm. Situated at 7,200 ft., Kiambethu
         was bought and farmed by AB McDonell in 1910. He was the first person to grow, make and sell tea commercially in
         Kenya - now one of Kenya’s biggest exports. Five generations have lived on the farm and it is currently run by his
         granddaughter Fiona Vernon. The farm house is set within beautiful gardens surrounded by acres of tea and indigenous
         forest - home to the Colobus monkey and plenty of other wildlife.</p>
  </div>
     </div>
     <div class="col-3 col-s-9 menu">
    <div style="background-color:white;border: 2px solid white;padding: 20px;box-shadow: 10px 10px 10px 10px #E0E0E0;">
         <img src="images/leleshwa.jpg" alt="leleshwa" style="max-width:100%;height:auto;">
         <h1 style="color:green;text-align:center;font-size:20px;padding-top:10px">LELESHWA VINEYARD</h1><br>
         <p style="font-size:16px;text-align:center;color:grey;padding-bottom:30px">Enjoy the crisp, refreshing flavours
           that will enchant and tingle your taste buds from the wildly, mysterious Rift Valley. This fun and memorable
           Leleshwa vineyard tour will expose you to a world of wine making, wine tasting and so much more.</p>
</div>
<div style="background-color:white;border: 2px solid white;padding: 20px;box-shadow: 10px 10px 10px 10px #E0E0E0;">
         <img src="images/market.jpg" alt="market" style="max-width:100%;height:auto;">
         <h1 style="color:green;text-align:center;font-size:20px;padding-top:10px">MAASAI MARKET</h1><br>
         <p style="font-size:16px;text-align:center;color:grey;padding-bottom:30px">Whether you’re looking to spice up your
           wardrobe or get memorabilias for those special ones back at home, the maasai market is the best place to find a
           modern display of an indigenous people’s culture. For years Maasai women have catered to those in search of
           authentic African artifacts by creating a space where they could empower themselves as they share their heritage.
           Though the open air market moves from one location to another, you can take a stroll to the Village Market on
           Fridays and spoil yourself.</p>
  </div>
     </div>
     <div class="col-3 col-s-12 menu">
    <div style="background-color:white;border: 2px solid white;padding: 20px;box-shadow: 10px 10px 10px 10px #E0E0E0;">
         <img src="images/park.jpg" alt="park" style="max-width:100%;height:auto;">
         <h1 style="color:green;text-align:center;font-size:20px;padding-top:10px">NAIROBI NATIONAL PARK</h1><br>
         <p style="font-size:16px;text-align:center;color:grey;padding-bottom:30px">“The World’s Wildlife Capital”
        A short drive out of Nairobi’s central business district is the Nairobi National Park. Wide open grass plains
        and backdrop of the city scrapers, scattered acacia bush play host to a wide variety of wildlife including the
        endangered black rhino, lions, leopards, cheetahs, hyenas, buffaloes, giraffes and diverse birdlife with over
        400 species recorded. Visitors can enjoy the park’s picnic sites, three campsites and the walking trails for hikers.</p>
      </div>
  <div style="background-color:white;border: 2px solid white;padding: 20px;box-shadow: 10px 10px 10px 10px #E0E0E0;">
         <img src="images/village.jpg" alt="village" style="max-width:100%;height:auto;">
         <h1 style="color:green;text-align:center;font-size:20px;padding-top:10px">VILLAGE MARKET</h1><br>
         <p style="font-size:16px;text-align:center;color:grey;padding-bottom:30px">The Village Market is one of East
           Africa's largest Shopping, Recreation and Entertainment destination. The complex is home to over 150 outlets
           covering 210,000 square feet of retail space, 20,000 square feet of office space in addition to a host of
           recreation facilities. The mall essentially provides residents of the area with high-end shopping and
           entertainment, satisfying a niche that was not previously explored. As the name suggests, the complex
           embodies the spirit of the African market in an open-air setting.</p>
  </div>
    </div>
  </div>

<h1 style="color:green;text-align:center;font-size:22px;padding:60px;background-color:#DCDCDC">GALLERY</h1>
           <div class="slideshow-container">

             <div class="mySlides fade">
               <img src="images/board.jpg" alt="board" style="max-width:100%;height:auto;">
             </div>

             <div class="mySlides fade">
               <img src="images/event.jpg" alt="event" style="max-width:100%;height:auto;">
             </div>

             <div class="mySlides fade">
               <img src="images/event3.jpg" alt="event3" style="max-width:100%;height:auto;">
             </div>
           <div class="mySlides fade">
             <img src="images/room.jpg" alt="room" style="max-width:100%;height:auto;">
           </div>
         </div>


    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      slides[slideIndex-1].style.display = "block";
      setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
    </script>

    <div class="mapWrapper">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.256232723013!2d36.81483586904314!3d-1.285564082601941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d714b90b4d%3A0xf58d8f9b297c294c!2sCentral%20Business%20District%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1597665029235!5m2!1sen!2ske" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <?php include 'footer.php'; ?>
  </body>
</html>
