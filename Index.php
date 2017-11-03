<!DOCTYPE HTML>
<html>
<head>
<title>home</title>
<link
rel="stylesheet"
type="text/css"
href="ycsms.css"/>

<div class="container-full joinbar">
<div class="main"style="background-color:white; font-size:20px"> 
	<header><nav><div class style="background-image:url(wbb.PNG); color:white"><img src="logo.png"style="width:100px; height:100px;"><a href="index.php"style="padding:50px;color:black;hover:red;text-decoration: none;">Home</a><a href="about.php"style="color:black; padding:50px;text-decoration: none;">About</a><a href="join.php"style="padding:25px; color:black;text-decoration: none;">How to Join</a><a href="contact.html"style="padding:25px;color:black;text-decoration: none;">Contact Us</a><a href="login.html"style="padding:25px;color:black;text-decoration: none;">Login</a></nav></header>


</div>
</div>
    </head>
    <body>
           </div><div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 7</div>
  <img src="Environment-69.jpg" style="height: 500px;width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 7</div>
  <img src="africa1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 7</div>
  <img src="africa2.jpg" style="height:500px;width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 7</div>
  <img src="child.jpg" style="height:500px;width:100%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 7</div>
  <img src="jimas.jpg" style="height:500px;width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 7</div>
  <img src="volunteer.jpg" style="height:500px;width:100%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">7 / 7</div>
  <img src="yy.jpg" style="height:500px;width:100%">
  
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span>
</div>
  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<hr style = "height: 30px; 
  border-style: solid; 
  border-color: red; 
  border-width: 1px 0 0 0; 
  border-radius: 20px;
   ">
  <br> <div style="text-align:center; font-size: 200%"><strong>Jitolee Youth Services</strong></div></br>

  <div style="text-align:center; font-size: 150%">Jitolee Youth service is a programme formed in 2014 by youth to enhance the neatness and cleanliness of the environment.<div></br> <div style="text-align:center">Aimed at achieving this through community services by any volunteer youth who would later on earn some income from the county government.</div>
      <br><br><br><br><br><br><br>
      <div class="container-full footer-bottom" style="background-color:grey; font-color:white">

      <div class="container" style="font-size:13pt; text-align:left">
        <footer>County Government of Nairobi<br>
         Ministry of Environment<br>
         Copyright 2017 | Jitolee Youth Service | All rights Reserved</footer>
      </div>
  </div>
        </body>






    </html>