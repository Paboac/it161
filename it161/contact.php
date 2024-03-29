
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pablo's IT289 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
</head> 
<body>
<header>
<h1>Pablo's IT289 Website</h1>
<nav class="topnav" id="myTopnav">
<a href="index.html" class="active">Welcome</a>
<a href="https://www.linkedin.com/contreraspablo" target="_blank">LinkedIn</a>
<a href="flowchart.html">Flowchart</a>
<a href="fp/index.html">Final Project</a>
<a href="contact.php">Contact Pablo</a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</nav>
</header>

<div class="wrapper">

<img class="desktop" src="images/webdesign.png" alt="Adorable photo of my cat, Keko!" />

<img class="tablet" src="images/webdesign.png" alt="Picture of my girlfriend" />

<img class="phone" src="images/webdesign.png" alt="A photo at Mt.Rainier." />

<h2 class="subheader">A little about me!</h2>

<p>Hello, my name is Pablo Contreras. I am a student at Seattle Central and this is my first official website. (fancy, I know).</br>
What are my hobbies you ask? I love hanging out at my house, might as well get my money's worth.</br>
I love spending time with my girlfriend and cat. Also enjoy watching TV and playing video games. Nothing too crazy.</br>
Favorite foods? I am a huge fan of pizza, musubi, fried chicken, korean food, and Mexican food.</p>  

  </div>
  <style>
       /* start reCAPTCHA styles */
		
		/* writes to small text above reCAPTCHA upon failure */

		.dateFeedback{
			font-style:italic;
			font-size:70%;
			font-weight:bold;
			color:#f00;
		}
        input:required {
              border: 1px solid red;
        }

  input:optional, textarea:optional {
  background-color:#f1f1f1;
border:1px solid #ccc;
        }

        input[type="submit"], input[type="button"] {
          background-color: #fff;
          border-radius: 4px;
          border: solid 1px #ccc;
          padding: 0.3em 0.5em;
        }

        fieldset {
          border: 1px solid #ccc;
          max-width: 350px;
        }

        legend {
          margin-left: 0.5em;
          padding: 0.2em 0.5em;
          border-left: 1px solid #ccc;
          border-right: 1px solid #ccc;
        }

/* end reCAPTCHA styles */
</style>


  <main role="main">
<header><h3>Contact Us!</h3></header>
  <p>Inside the source of this file, you can un-comment and test 
2 different types of forms:
</main>  
</body>
</html>
<?php
/*
       * Below are 2 different forms to be re-used       
       * 
       * Only use one at a time, comment out the other!       
       *
       */

include 'includes/contact_include.php'; #site keys & code here

      $toAddress = "Pabcontreras93@gmail.com";  //place your/your client's email address here
      $toName = "Pablo Contreras"; //place your client's name here
      $website = "It289 Contact Form";  //place NAME of your client's website

//echo loadContact('simple.php');#demonstrates a simple contact form
echo loadContact('multiple.php');#demonstrates multiple form elements

?>
  
  <p><small>&copy; 2022 by 
      <a href="contact.php">Pablo Contreras</a>, All Rights Reserved ~ 
      <a id="html-checker" href="#">Check HTML</a> ~ 
      <a id="css-checker" href="#">Check CSS</a></small>
</p>
</footer>
</div>

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
