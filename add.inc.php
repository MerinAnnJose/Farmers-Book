<?php

session_start();

if (isset($_POST['submit'])) {

	include_once 'c:\xampp\htdocs\login\includes\dbh2.inc.php';

	$state = mysqli_real_escape_string($conn, $_POST['state']);
	$district = mysqli_real_escape_string($conn, $_POST['dist']);
	$land = mysqli_real_escape_string($conn, $_POST['land']);
	$culti = mysqli_real_escape_string($conn, $_POST['culti']);
	$profit = mysqli_real_escape_string($conn, $_POST['profit']);
	$pno = mysqli_real_escape_string($conn, $_POST['pno']);

	$id=$_SESSION['u_id'];
	//echo $id;echo $state;echo;
	$sql="SELECT * FROM users WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
	$resultsCheck= mysqli_num_rows($result);
	if ($resultsCheck > 0) {
		$sql = "UPDATE users set state='$state',dist='$district',land='$land',culti='$culti',profit='$profit',pno='$pno' WHERE id='$id'";
		mysqli_query($conn, $sql);
		echo "<script type='text/javascript'>
			alert('record updated successfully'); 
			window.location('../home.php');
			</script>";
        header("Location: ../includes/home.php?add=success");
	}
	else{
		header("Location: ../add.php?add=error");
	}

}