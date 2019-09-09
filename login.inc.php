<?php

session_start();

if (isset($_POST['submit'])) {
	include_once 'c:\xampp\htdocs\login\includes\dbh2.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	if (empty($uid) || empty($pwd)) {
		header("Location: ../login.php?login=empty");
		exit();
	}
	else{
		$sql = "SELECT * FROM users WHERE user_name='$uid' OR email='$uid'";
		$result=mysqli_query($conn,$sql);
		$resultsCheck=mysqli_num_rows($result);
		if ($resultsCheck < 1) {
			header("Location: ../login.php?login=errorcheck");
			exit();
		}else{
			if ($row=mysqli_fetch_assoc($result)) {
				//dehashing password
				$hashedPwdCheck= password_verify($pwd, $row['passwords']);
				if ($hashedPwdCheck == false) {
					header("Location: ../login.php?login=errorpass");
					exit();
				}elseif ($hashedPwdCheck == true) {
					//log in here
					//$id=$row['id'];
					$_SESSION['u_id']=$row['id'];
					$_SESSION['u_email']=$row['email'];
					$_SESSION['u_name']=$row['user_name'];
					echo $_SESSION['u_id'];
					header("Location: ../includes/home.php?login=success");
					exit();
				}
			}
		}
	}
}else{
	header("Location: ../login.php?login=error");
}
?>