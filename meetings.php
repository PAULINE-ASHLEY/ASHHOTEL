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
  <img src="images/board.jpg" alt="board" style="width:100%;height:520px;">
  <div class="content">
    <h1>MEETINGS</h1>
  </div>
</div>

    <div style="padding-top:60px" class="row">
      <div class="col-1 col-s-2 menu">
      </div>

     <div class="col-6 col-s-9 menu">
       <img src="images/board1.jpg" alt="board1" style="max-width:100%;height:auto;">
     </div>
     <div class="col-3 col-s-12 menu">
     <h1 style="color:green;font-size:22px;padding-top:100px">FUNCTIONALITY AND TECHNOLOGY</h1><br>
     <p style="font-size:16px;color:grey">Ash’s conference facilities offer the highest level of functionality, design and
       technology making it an ideal choice for those craving private meeting spaces with an
       added dose of personal service. Executive boardrooms specialize in banqueting for
       intimate events and conferences; a fully operational business center and well
       positioned to support every need and fulfill every requirement of a discerning clientele.</p>
     </div>
     <div class="col-2 col-s-2 menu">
     </div>
    </div>

    <div class="row">
      <div class="col-1 col-s-2 menu">
      </div>
     <div class="col-3 col-s-12 menu">
     <p style="font-size:16px;text-align:center;color:grey;padding-top:100px">Executive boardrooms offer the highest level of
       functionality and technology of any in the city and specialize in banqueting for intimate events and
       conferences; a fully-operational business center and well versed business concierge are positioned to
       support every need and fulfill every requirement of a discerning clientele.</p>
     </div>
     <div class="col-6 col-s-9 menu">
       <img src="images/board2.jpg" alt="board2" style="max-width:100%;height:auto;">
     </div>
     <div class="col-2 col-s-2 menu">
     </div>
    </div>


    <?php include 'footer.php'; ?>
  </body>
</html>
