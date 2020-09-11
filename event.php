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
  <img src="images/event2.jpg" alt="event2" style="width:100%;height:520px;">
  <div class="content">
    <h1>EVENT</h1>
  </div>
</div>

    <div style="padding-top:60px;padding-bottom:60px" class="row">
      <div class="col-1 col-s-2 menu">
      </div>

     <div class="col-6 col-s-9 menu">

           <!-- Slideshow container -->
           <div class="slideshow-container">

             <!-- Full-width images with number and caption text -->
             <div class="mySlides fade">
               <img src="images/event.jpg" alt="event" style="max-width:100%;height:auto;">
             </div>

             <div class="mySlides fade">
               <img src="images/event1.jpg" alt="event1" style="max-width:100%;height:auto;">
             </div>

             <div class="mySlides fade">
               <img src="images/event2.jpg" alt="event2" style="max-width:100%;height:auto;">
             </div>

             <div class="mySlides fade">
               <img src="images/event3.jpg" alt="event3" style="max-width:100%;height:auto;">
             </div>

             <div class="mySlides fade">
               <img src="images/event4.jpg" alt="event4" style="max-width:100%;height:auto;">
             </div>
           </div>
     </div>
     <div class="col-3 col-s-12 menu">
     <p style="font-size:16px;text-align:center;color:grey;padding-top:100px">Ash's event spaces provide a seamless setting for
       impressive private events including intimate cocktails, lavish dinners, private parties and fashion shows.
       Our Ash is sure to tailor, design and style the occasion to meet your specific needs and style.</p>
     </div>
     <div class="col-2 col-s-2 menu">
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
