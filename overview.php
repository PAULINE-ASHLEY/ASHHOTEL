<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ASH HOTEL</title>
    <style >
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
  <img src="images/restaurant2.jpg" alt="restaurant2" style="width:100%;height:520px;">
  <div class="content">
    <h1>EAT & DRINK</h1>
  </div>
</div>

    <div style="padding-top:60px;padding-bottom:60px" class="row">
      <div class="col-1 col-s-2 menu">
      </div>

     <div class="col-6 col-s-9 menu">
       <img src="images/food.jpg" alt="food" style="max-width:100%;height:auto;">
     </div>
     <div class="col-3 col-s-12 menu">
     <h1 style="color:green;font-size:22px;padding-top:100px">ASH RESTAURANT</h1><br>
     <p style="font-size:16px;color:grey;padding-bottom:10px">Inspired by the open flame grill, the seasonal
       menu is a tribute to local farmers; paying homage to crisp flavors and fresh, organic ingredients.</p>
         <a href="restaurant.php"><button type="button" name="button">FIND OUT MORE ></button></a>
     </div>
     <div class="col-2 col-s-2 menu">
     </div>
    </div>

    <?php include 'footer.php'; ?>
  </body>
</html>
