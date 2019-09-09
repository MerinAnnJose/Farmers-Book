<?php
	session_start();
	?>
<!DOCTYPE html>
<html><head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="stt.css">
<link type="text/css" rel="stylesheet" href="st.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
	body{
		background-image: url("pp.jpg");
    height: 664px;
	}
</style>
</head><body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">மெனு</h3>
  <a href="home.php" class="w3-bar-item w3-button">முகப்பு</a>
  <a href="search.php" class="w3-bar-item w3-button">
தேடல்</a>
 <a href="contact.php" class="w3-bar-item w3-button">எங்களை தொடர்பு கொள்ள</a>
 <a href="help.html" class="w3-bar-item w3-button">உதவி</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1><center>
உங்கள் பிரச்சினைகளைத் தெரிவிக்கவும்</center></h1>
</div>

<div class="w3-container hrs">
 <form action="problem.inc.php" method="POST" class="signup-form">
               
		<input type="text" name="text" style="margin-left: 100px; height: 50px; margin-right: 100px;  ">

            </textarea>
                   
           <button type="submit" name="submit" style="background:#8E44AD;border-radius:2px;color:#fff;text-align:center;width:300px;height:50px;margin-top:50px;margin-left:250px;">
சமர்ப்பி
</button>
       </form>
      
     

</body>
</html>
