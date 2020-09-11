<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ASH HOTEL</title>
    <style>
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
    input[type=text]{
  width: 100%;
  height: 70px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #f2f2f2;
  box-sizing: border-box;
  background-color:#f2f2f2;
}
input[type=email]{
width: 100%;
height: 70px;
margin: 2px 0;
display: inline-block;
border: 1px solid #f2f2f2;
box-sizing: border-box;
background-color: #f2f2f2;
}
input[type=tel]{
width: 100%;
height: 70px;
margin: 2px 0;
display: inline-block;
border: 1px solid #f2f2f2;
box-sizing: border-box;
background-color: #f2f2f2;
}
textarea{
  width: 100%;
  border: 1px solid #f2f2f2;
  background-color: #f2f2f2;
  color: black;
}
input[type=submit] {
  width: 150px;
  background-color: green;
  color: white;
  margin: 2px 0;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: white;
}
button{
  background-color:green;
  width: 140px;
  height: 35px;
  font-size: 14px;
  color:black;
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
font-size: 20px;
}
    </style>
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <div class="container">
  <img src="images/contact.jpg" alt="contact" style="width:100%;height:520px;">
  <div class="content">
    <h1>CONTACT US</h1>
  </div>
  </div>

  <div class="row">
   <div class="col-1 col-s-1 menu">

   </div>
   <div class="col-3 col-s-3 menu">
     <p style="color:black;font-size:14px;padding-top:60px">Ash Hotel is approximately 100 km from Nairobi
       International Airport – Jomo Kenyatta International Airport (NRB)</p>
       <p style="color:green;font-size:14px;padding-top:40px;font-weight:bold">PHONE</P>
 <p style="color:black;font-size:14px;padding-top:15px">+254 70 000 0000 / 0700 000 000</P>
   <p style="color:green;font-size:14px;padding-top:40px;font-weight:bold">EMAIL</P>
<p style="color:green;font-size:14px;padding-top:15px">ashhotel@gmail.com</P>
  <p style="color:green;font-size:14px;padding-top:40px;font-weight:bold">ADDRESS</p>
  <p style="color:black;font-size:14px;padding-top:15px">Ash Hotel</p>
  <p style="color:black;font-size:14px;padding-top:10px">Nairobi</p>
  <p style="color:black;font-size:14px;padding-top:10px">P.O.BOX 00000-00000</p>
  <p style="color:black;font-size:14px;padding-top:10px;padding-bottom:40px">Nairobi,KENYA</p>
  <a target="_blank" href="#" style="color:green" class="fa fa-facebook"></a>
  <a target="_blank" href="#" style="color:green" class="fa fa-twitter"></a>
  <a target="_blank" href="#" style="color:green" class="fa fa-instagram"></a>
   </div>
   <div style="padding-top:60px" class="col-6 col-s-9 menu">
     <form action="">
    <input type="text" id="fname" name="firstname" placeholder="*NAME">
    <input type="text" id="lname" name="lastname" placeholder="*SURNAME">
    <input type="email" id="email" name="email" placeholder="*EMAIL">
    <input type="tel" id="phone" name="phone" placeholder="*PHONE NUMBER">
    <textarea name="message" rows="10" cols="30">
    MESSAGE
   </textarea><br><br><br><br>
  <button type="button" name="button">SUBMIT</button>
  </form>
   </div>
   <div class="col-3 col-s-12 menu">

   </div>
  </div>

    <div class="mapWrapper">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.256232723013!2d36.81483586904314!3d-1.285564082601941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d714b90b4d%3A0xf58d8f9b297c294c!2sCentral%20Business%20District%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1597665029235!5m2!1sen!2ske" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <?php include 'footer.php'; ?>
  </body>
</html>
