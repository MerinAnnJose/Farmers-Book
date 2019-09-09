<?php
	session_start();

include_once 'c:\xampp\htdocs\login\includes\dbh2.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>
login
</title> 
<link type="text/css" rel="stylesheet" href="st.css">
</head>
<body class="srcd">

    <div class="container">
      
       <form action="search.inc.php" method="POST" class="signup-form1">
          <input type="text" name="uname" placeholder="
தேட வேண்டிய பயனர் பெயரை உள்ளிடுக " class="input"><br />
          

          <button type="submit" name="submit" class="btn">தேடல்</button>
       </form>
      
      
    </div>
  </div>
</body>
</html>