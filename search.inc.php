<!DOCTYPE html>
<html>
<head>
	<title>search</title>
	<h1><center>PROFILE</center></h1>
	<link type="text/css" rel="stylesheet" href="includes\st.css">
	<style type="text/css">
		body{
			background-image: url("sepic.jpg");
			background-repeat: no-repeat;
		}
		table{
			border-collapse: collapse;
			width: 100%;
			color: #fff;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
	</style>
</head>


<?php
	session_start();

	if (isset($_POST['submit'])) {

		include_once 'c:\xampp\htdocs\login\includes\dbh2.inc.php';

		$u=mysqli_real_escape_string($conn, $_POST['uname']);

		$sql=$sql="SELECT * FROM users WHERE user_name='$u'";
		$result = mysqli_query($conn, $sql);
		$resultsCheck= mysqli_num_rows($result);
		if ($resultsCheck > 0) {
			while($row=mysqli_fetch_assoc($result)){
				echo "<table><tr><td>";
				echo "&nbsp&nbsp&nbsp<b>பயனர்பெயர்: </b></td><td>".$row['user_name']."</td></tr><br>";
				echo "<tr><td>&nbsp&nbsp&nbsp<b>உங்கள் இடம் , உங்கள் மாவட்டம்: </b></td><td>".$row['state'];
				echo " , ".$row['dist']."</td></tr><br>";
				echo "<tr><td>&nbsp&nbsp&nbsp<b>பயிர்கள் வகைகள்: </b></td><td>".$row['culti']." cultivation</td></tr><br>";
				echo "<tr><td>&nbsp&nbsp&nbsp<b>ஏக்கரில் நிலப்பகுதியை உள்ளிடுக: </b></td><td>".$row['land']." ஏக்கர்</td></tr><br>";
				echo "<tr><td>&nbsp&nbsp&nbsp<b>பிரச்சினைகள்:  </b></td><td>".$row['problem']."</td></tr><br>";
				echo "<tr><td>&nbsp&nbsp&nbsp<b>தொடர்பு: </b></td><td>";
				echo $row['pno']."</td></tr><br>";
				echo "</table>";
			}
		}else{
				echo "user doesn't exist";
			}
	}
	?>
	<div class="container">
	<form action="" method="">
		<button type="submit" name="submit" class="btn"><a href="home.php"></a></button>
		</form>
		</div>
	</body>
	</html>
