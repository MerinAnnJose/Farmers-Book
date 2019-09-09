<?php
	session_start();

if (isset($_POST['submit'])) {

	include_once 'c:\xampp\htdocs\login\includes\dbh2.inc.php';

	$prob=mysqli_real_escape_string($conn, $_POST['text']);

	$i_d=$_SESSION['u_id'];
	$sql="SELECT * FROM users WHERE id ='$i_d'";
	$result = mysqli_query($conn, $sql);
	$resultsCheck= mysqli_num_rows($result);
	if ($resultsCheck > 0) {
		$sql = "UPDATE users set problem='$prob' WHERE id='$i_d'";
		mysqli_query($conn, $sql);
		echo "<script type='text/javascript'>
			alert('Problem updated successfully'); 
			window.location('../help.html');
			</script>";
        header("Location: ../includes/help.php?problem_add=success");
    }
 }else{
 	header("Location: ../includes/problem.php?problem_add=error");
 }