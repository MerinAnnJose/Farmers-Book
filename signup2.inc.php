<?php
	
if (isset($_POST['submit'])) {

	include_once 'c:\xampp\htdocs\login\includes\dbh2.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$username = mysqli_real_escape_string($conn, $_POST['uid']);
	$password = mysqli_real_escape_string($conn, $_POST['pwd']);

	//error handling
	if (empty($first) || empty($last)|| empty($email) || empty($username) || empty($password)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	}else{
		//check email valid
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../signup.php?signup=email");
			exit();
		}else{
			$sql="SELECT * FROM users WHERE user_name='$username'";
			$result = mysqli_query($conn, $sql);
			$resultsCheck= mysqli_num_rows($result);
			if ($resultsCheck > 0) {
				header("Location: ../signup.php?signup=usertaken");
				exit();
			}else{
				//hashing
				$hashedPwd = password_hash($password,PASSWORD_DEFAULT);
				//Insert user into db
				$sql = "INSERT INTO users (first,last,email, user_name, passwords) VALUES ('$first','$last','$email', '$username', '$hashedPwd');";
				mysqli_query($conn, $sql);

				header("Location: ../signup.php?signup=success");


			}

		}
	}
}else{

	header("Location: ../signup.php");
	exit();

}


	
?>