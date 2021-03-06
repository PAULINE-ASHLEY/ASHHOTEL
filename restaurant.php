<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ASH HOTEL</title>
    <style>
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
      padding-bottom: 60px;
    }
    /* Hide the images by default */
    .mySlides {
      display: none;
    }
    .container {
  position: relative;
  max-width:100%;
  margin: 0 auto;
}
.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 30px;
  font-size: 22px;
}
    </style>
  </head>
  <body>

    <?php include 'nav.php'; ?>

    <div class="container">
  <img src="images/restaurant.jpg" alt="restaurant" style="width:100%;height:520px;">
  <div class="content">
    <h1>ASH RESTAURANT</h1><br>
    <p style="font-size:20px">Opening Hours:06h00 to 22h30</p>
  </div>
</div>

    <div style="padding-top:60px;padding-bottom:60px" class="row">
      <div class="col-3 col-s-3 menu">
      </div>

     <div class="col-6 col-s-9 menu">
       <p style="font-size:16px;text-align:center;color:grey">Inspired by the open flame grill, the seasonal
         menu is a tribute to local farmers; paying homage to crisp flavors and fresh, organic ingredients.
         Ash authentically uplifts its inspirations while offering guests the delights of whimsy and fantasy
         through a playful approach to presentation.</p>
     </div>
     <div class="col-3 col-s-12 menu">
     </div>
    </div>

    <div style="padding-bottom:100px" class="row">
      <div class="col-3 col-s-3 menu">
      </div>
     <div class="col-3 col-s-6 menu">
         <button style="width:180px" type="button" name="button">DOWNLOAD MENU ></button>
     </div>
     <div class="col-3 col-s-9 menu">
       <button style="width:180px" type="button" name="button">ENQUIRE ></button>
     </div>
     <div class="col-3 col-s-12 menu">
     </div>
    </div>

    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="images/food1.jpg" alt="food1" style="max-width:100%;height:auto;">
      </div>

      <div class="mySlides fade">
        <img src="images/food2.jpg" alt="food2" style="max-width:100%;height:auto;">
      </div>

      <div class="mySlides fade">
        <img src="images/food3.jpg" alt="food3" style="max-width:100%;height:auto;">
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
    <?php include 'footer.php'; ?>
  </body>
</html>
