<?php
	session_start();

include_once 'c:\xampp\htdocs\login\includes\dbh2.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<h1><center>
என் சுயவிவரம்</center></h1>
	<title>view</title>
	<link type="text/css" rel="stylesheet" href="st.css">
	<style type="text/css">
		body{
			background-image: url("vpic.jpg");
			height: 557px;
			background-size: cover;
		}
		table{
			border-collapse: collapse;
			width: 100%;
			color: #FDFEEE;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
	</style>
</head>
<body>
<?php
	$id=$_SESSION['u_id'];
	$sql="SELECT * FROM users WHERE id='$id'";
	$result=mysqli_query($conn,$sql);
	{
		while($row=mysqli_fetch_assoc($result)){
			echo "<table><tr><td>";
				echo "&nbsp&nbsp&nbsp<b>பயனர்பெயர்: </b></td><td>".$row['user_name']."</td></tr><br>";
				echo "<tr><td>&nbsp&nbsp&nbsp<b>மாநில, மாவட்டம்: </b></td><td>".$row['state'];
				echo " , ".$row['dist']."</td></tr><br>";
				echo "<tr><td>&nbsp&nbsp&nbsp<b>சாகுபடி: </b></td><td>".$row['culti']." cultivation</td></tr><br>";
				echo "<tr><td>&nbsp&nbsp&nbsp<b>நில பகுதி: </b></td><td>".$row['land']." acres</td></tr><br>";
				echo "<tr><td>&nbsp&nbsp&nbsp<b>சராசரி வருடாந்திர லாபம்: </b></td><td>".$row['profit']."lakhs</td></tr><br>";
				echo "<tr><td>&nbsp&nbsp&nbsp<b>
நான் எதிர்கொள்ளும் பிரச்சினைகள்:   </b></td><td>".$row['problem']."</td></tr><br>";
				echo "<tr><td>&nbsp&nbsp&nbsp<b>
தீர்வு பெறுகிறது:   </b></td><td>".$row['solution']."</td></tr><br>";
				echo "<tr><td>&nbsp&nbsp&nbsp<b>தொடர்பு: </b></td><td>";
				echo $row['pno']."</td></tr><br>";
				echo "</table>";
		}
	}
	?>
</body>
</html>