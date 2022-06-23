<?php

if (isset($_POST['submit'])){

	include_once 'dbh-inc.php';
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	//Error handlers
	//Check for empty fields

	if (empty($first) || empty($last) ||empty($email) ||empty($uid) || empty($pwd)) {
		header("Location: ../signup.php?signup=empty!");
		echo "name checking sucessfull";
		exit();
	}
	else {
		//chech if input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		} else {
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=invalidemail");
				exit();			
			}else {
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);                
				$resultCheck = mysqli_num_rows($result);

//				if ($conn->query($sql) === TRUE) {


//                    echo "connected successfully";
//                        } else {
//                    echo "Error connecting: ".$conn->error;
//                            }

					if ($resultCheck > 0) {

//                    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["user_id"]. " - Name: " . $row["user_first"]. " " . $row["user_last"]. "<br>";
//    }
//                    echo "value =".$resultCheck;
//                    echo"error=".$result;

						header("Location: ../signup.php?signup=usertaken");
						exit();
					} else {
					//Hashing the password
						$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
						$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedpwd');";
						mysqli_query($conn, $sql);
						header("Location: ../signup.php?signup=success");
						exit();

					}
				}
			}

		}
	}
	
	else{
		header("Location: ../signup.php");
		exit();
	}