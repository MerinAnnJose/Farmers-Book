  <?php
  	session_start();
  	?>



  <!DOCTYPE html>
<html>
<head>
<title>
login
</title> 
<link type="text/css" rel="stylesheet" href="includes\st.css">
</head>
<body>
 <div class="container">
      <ul>
      <li class="signup"><a href="signup.php">SIGN UP</a></href></li>
      <li class="login"><a href="login.php">LOG IN</a></href></li>
</ul>

<form action="includes/login.inc.php" method="POST" class="login-form">
          <input type="text" name="uid" placeholder="மின்னஞ்சல் அல்லது பயனர் பெயர்" class="input"><br />
          <input type="password" name="pwd" placeholder="கடவுச்சொல்லை உள்ளிடவும்" class="input"><br />
          <button type="submit" name="submit" class="btn">உள் நுழை</button>
       </form>
</body>
</html>      