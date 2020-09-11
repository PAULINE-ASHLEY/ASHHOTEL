<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ASH HOTEL</title>
    <style>
    /* Slideshow container */
    .slideshow-container {
      max-width:100%;
      position: relative;
      margin: auto;
      padding-bottom: 60px;
      padding-top: 60px;
    }

    /* Hide the images by default */
    .mySlides {
      display: none;
    }
    button{
      background-color:white;
      width: 140px;
      height: 35px;
      font-size: 14px;
      color:green;
      border: 1px solid green;
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
  <img src="images/contact.jpg" alt="contact" style="width:100%;height:520px;">
  <div class="content">
    <h1>TWO BEDS</h1>
  </div>
</div>


    <p style="font-size:16px;text-align:center;color:grey;padding-top:100px">Rooms are furnished with a rain shower,
      300 thread-count sheets, king or twin beds, 40 inch LED Smart television, and a work station.</p>
    <div style="padding-top:60px" class="row">
      <h1 style="color:green;font-size:22px;padding-bottom:30px;text-align:center">360 Panoramic Images</h1>
     <div class="col-4 col-s-4 menu">
     <img src="images/room.jpg" alt="room" style="max-width:100%;height:auto;">
     </div>
     <div class="col-4 col-s-8 menu">

       <img src="images/room1.jpg" alt="room1" style="max-width:100%;height:auto;">
     </div>
     <div class="col-4 col-s-12 menu">
       <img src="images/contact.jpg" alt="contact" style="max-width:100%;height:auto;">
     </div>
    </div>

    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="images/room.jpg" alt="room" style="max-width:100%;height:auto;">
      </div>

      <div class="mySlides fade">
        <img src="images/contact.jpg" alt="room1" style="max-width:100%;height:auto;">
      </div>

      <div class="mySlides fade">
        <img src="images/contact.jpg" alt="contact" style="max-width:100%;height:auto;">
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
