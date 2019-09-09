<!DOCTYPE html>
<html><head>
<title>crop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="st.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  body{
    background-image: url("so.jpg");
    height: 655px;
  }
</style>
</head><body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">
பட்டி</h3>
  <a href="home.php" class="w3-bar-item w3-button">
முகப்பு</a>
  <a href="search.php" class="w3-bar-item w3-button">தேடல்</a>
 <a href="contact.php" class="w3-bar-item w3-button">எங்களை தொடர்பு கொள்ள</a>
 <a href="help.php" class="w3-bar-item w3-button">உதவி</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1><center>பயிர் ஆலோசனைகள்</center></h1>
</div>

<div class="w3-container hrs">
 <form  action="soil.inc.php" method="POST" class="signup-form">
               <h1 style="text-align: center ;color: #fff";>மண் வகை சேர்க்கவும்</h1>
 		<div style="padding-left:300px;padding-bottom:20px;">
			<select name="soil" style="text-align: center;padding-left:150px; width:400px; height:50px;"><div>
			<option value="alluvial">அலுலியம் மண்</option>
			<option value="black">கருப்பு மண்</option>
			<option value="red">செம்மண்</option>
			<option value="alkaline">கார மண்</option></div>
			</select><br />
		</div>
            
                   
           <button type="submit" name="submit" style="background:#3498DB;border-radius:2px;color:#fff;text-align:center;width:400px;height:50px;padding-top:10px;margin-left:300px;">சமர்ப்பி</button>
       </form>

      </body>
</html>
