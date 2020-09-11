<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ASH HOTEL</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
*{
margin: 0;
padding: 0;
user-select: none;
box-sizing: border-box;
font-family: 'quicksand', sans-serif;
}
nav{
background:black;
}
nav:after{
content: '';
clear: both;
display: table;
}
nav .logo{
float: left;
color: green;
font-size: 25px;
font-weight: 600;
line-height: 70px;
padding-left: 60px;
}
nav ul{
float: right;
margin-right: 40px;
list-style: none;
position: relative;
}
nav ul li{
float: left;
display: inline-block;
background:black;
margin: 0 5px;
}
nav ul li a{
color: white;
line-height: 70px;
text-decoration: none;
font-size: 14px;
padding: 8px 15px;
}
nav ul li a:hover{
color: green;
border-radius: 5px;
box-shadow:  0 0 5px green,
             0 0 10px green;
}
nav ul ul li a:hover{
box-shadow: none;
}
nav ul ul{
position: absolute;
top: 90px;
border-top: 3px solid green;
opacity: 0;
visibility: hidden;
transition: top .3s;
}
nav ul ul ul{
border-top: none;
}
nav ul li:hover > ul{
top: 70px;
opacity: 1;
visibility: visible;
}
nav ul ul li{
position: relative;
margin: 0px;
width: 150px;
float: none;
display: list-item;
border-bottom: 1px solid rgba(0,0,0,0.3);
}
nav ul ul li a{
line-height: 50px;
}
nav ul ul ul li{
position: relative;
top: -60px;
left: 150px;
}
.show,.icon,input{
display: none;
}

@media all and (max-width: 968px) {
nav ul{
  margin-right: 0px;
  float: left;
}
nav .logo{
  padding-left: 25px;
  width: 100%;
}
.show + a, ul{
  display: none;
}
nav ul li,nav ul ul li{
  display: block;
  width: 100%;
}
nav ul li a:hover{
  box-shadow: none;
}
.show{
  display: block;
  color: white;
  font-size: 18px;
  padding: 0 20px;
  line-height: 70px;
  cursor: pointer;
}
.show:hover{
  color: green;
}
.icon{
  display: block;
  color: white;
  position: absolute;
  top: 0;
  right: 40px;
  line-height: 70px;
  cursor: pointer;
  font-size: 25px;
}
nav ul ul{
  top: 70px;
  border-top: 0px;
  float: none;
  position: static;
  display: none;
  opacity: 1;
  visibility: visible;
}
nav ul ul a{
  padding-left: 40px;
}
nav ul ul ul a{
  padding-left: 80px;
}
nav ul ul ul li{
  position: static;
}
[id^=btn]:checked + ul{
  display: block;
}
nav ul ul li{
  border-bottom: 0px;
}
span.cancel:before{
  content: '\f00d';
}
}
header{
font-size: 35px;
font-weight: 600;
padding: 10px 0;
}
p{
font-size: 30px;
font-weight: 500;
}
html{
  font-family: 'quicksand', sans-serif;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}
/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
.fa {
  padding: 10px;
  font-size: 14px;
  text-align: center;
  text-decoration: none;
}
.fa-facebook {
  color:white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
.fa-twitter {
  color:white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
.fa-instagram {
  color:white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
    </style>
  </head>
  <body>

    <div style="background-color:green;height:60px"class="row">
     <div class="col-3 col-s-3 menu">
    <a href="contact.php"><i class='fas fa-phone-alt' style="font-size:14px;color:white;">&nbsp;&nbsp;0700000000</i></a>
     </div>
     <div class="col-3 col-s-6 menu">
  <a href="index.php"><button style="background-color:white;color:green;font-weight:bold" type="button" name="button">BOOK NOW</button></a>
     </div>
     <div class="col-3 col-s-9 menu">
     </div>
     <div class="col-3 col-s-12 menu">
       <a target="_blank" href="#" style="border:2px solid white;border-radius:10%" class="fa fa-facebook"></a>
       <a target="_blank" href="#" style="border:2px solid white;border-radius:10%" class="fa fa-twitter"></a>
       <a target="_blank" href="#" style="border:2px solid white;border-radius:10%" class="fa fa-instagram"></a>
     </div>
    </div>

    <nav>
      <div class="logo">
 ASH HOTEL</div>
<label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn">
      <ul>
<li><a href="index.php">Home</a></li>
<li>
          <label for="btn-1" class="show">Rooms</label>
          <a href="overview1.php">Rooms</a>
          <input type="checkbox" id="btn-1">
          <ul>
<li><a href="overview1.php">Overview</a></li>
<li><a href="onebed.php">One Bed</a></li>
<li><a href="twobeds.php">Two Beds</a></li>
</ul>
</li>
<li>
          <label for="btn-2" class="show">Eat & Drink</label>
          <a href="overview.php">Eat & Drink</a>
          <input type="checkbox" id="btn-2">
          <ul>
<li><a href="overview.php">Overview</a></li>
<li><a href="restaurant.php">Restaurant</a></li>
</ul>
</li>
<li><a href="meetings.php">Meetings</a></li>
<li><a href="event.php">Events</a></li>
<li><a href="Neighbourhood.php">Neighbourhood</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="about.php">About</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</nav>



  </body>
</html>
