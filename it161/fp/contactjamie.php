<!DOCTYPE html>
<html lang="en">
<head>
<title>Jamie Sherwood Designs</title>
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width" />
<meta charset="utf-8" />
<link rel="stylesheet" href="../css/big.css" />
<link rel="stylesheet" href="../css/bigportal.css" />
<link rel="stylesheet" href="js/big.js"/>
<body>
<header>
<h1>Jamie Sherwood Designs</h1>
<nav class="topnav" id="myTopnav">
<a href="big.html" class="active">Portal</a>
<a href="about.html">About Me</a>
<a href="contactjamie.php">Contact Jamie</a>
<a href="disclaimer.html">Webpage Disclaimer</a>
<a href="index.html">Project Main Page</a>

</nav>
</header>
<br>
<div class="wrapper">

<img class="desktop" src="../photos/livingroom.jpg" alt="Living Room Designs" />

<img class="tablet" src="../photos/House_Calls_Brooklyn_Zames_Williams_living_room_2_Matthew_Williams.0.jpg" alt="Residential Design" />

<img class="phone" src="../photos/anotherroom.png" alt="Another design." />
</div>
</div>
<body>
<h1>How to get in touch with me</h1>
<p>I am always happy to hear from you. Please fill out the form below and I will get back to you as soon as possible.</p>


<header><h3>Contact Me!</h3></header>
</body>

<?php
/*
       * Below are 2 different forms to be re-used       
       * 
       * Only use one at a time, comment out the other!       
       *
       */

include '../includes/contact_include.php'; #site keys & code here

      $toAddress = "Pabcontreras93@gmail.com";  //place your/your client's email address here
      $toName = "Pablo Contreras"; //place your client's name here
      $website = "IT161 Contact Form";  //place NAME of your client's website

//echo loadContact('simple.php');#demonstrates a simple contact form
echo loadContact('multiple.php');#demonstrates multiple form elements

?>


<!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->

<script>
    //https://tinyurl.com/dynamic-html-checker
document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);

document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  

    //manages mobile nav 
function myFunction() {
     var x = document.getElementById("myTopnav");
     if (x.className === "topnav") {
          x.className += " responsive";
     } else {
          x.className = "topnav";
     }
}   
</script>

<footer>

<p><small>&copy; 2022 by</p>
<a href="../fp/contactjamie.php">Jamie Sherwood</a>, All Rights Reserved ~ 
<a id="html-checker" href="#">Check HTML</a> ~ 
<a id="css-checker" href="#">Check CSS</a></small>
</p>
</footer>
</html>
