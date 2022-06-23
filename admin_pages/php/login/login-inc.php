<?php

session_start();

if (isset($_POST['submit'])) {
    
	include_once '../db/db.php';

	$uid = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	//Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../../../index.php?login=empty");
		exit();

	} else {
		$sql = "SELECT * FROM users WHERE username='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../../../index.php?login=nameorpasswrong");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['password']);
				if ($hashedPwdCheck == false) {
				header("Location: ../index.php?login=error");
				exit();
				}elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['username'] = $row['username'];
//					$role=$row['role'];
                    $_SESSION['role'] = $row['role'];
//					if($role<1){
//					}

					header("Location: ../../logged-page.php?login=succes");
					exit();
				}
			}
		}
	}
}
else {
	header("Location: ../../../index.php?login=lerror");
	exit();
}