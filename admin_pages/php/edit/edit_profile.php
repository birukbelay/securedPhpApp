

<?php 
session_start();

if(isset($_POST['submit'])){

	echo "1";

	$newFileName=$_POST['filename'];

	if(empty($newFileName)){
		$newFileName="technicians";
	}
	else{
		$newfilename=strtolower(str_replace(" ", "-", $newfilename));
	}

	// $imageTitle=$_POST['filetitle'];
	// $imageDesc=$post['filedesc'];
	include_once "../db/db.php";

	$first = mysqli_real_escape_string($conn, $_POST['fname']);
	$field = mysqli_real_escape_string($conn, $_POST['field']);
	$last = mysqli_real_escape_string($conn, $_POST['lname']);
	$user = mysqli_real_escape_string($conn, $_POST['username']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);
	$desc = mysqli_real_escape_string($conn, $_POST['description']);
	$files=$_FILES['file'];


	if (empty($first) || empty($last) || empty($user) || empty($pwd)) {
		header("Location: ../../edit-profile.php?signup=empty!");
		echo "name checking sucessfull";
		exit();
	}
	else {

		if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../../edit-profile.php?signup=invalid");
			exit();
		} else {


			$sql = "SELECT * FROM users WHERE username='$user'";
			$result = mysqli_query($conn, $sql);                
			$resultCheck = mysqli_num_rows($result);


			if ($resultCheck > 0) {


				header("Location: ../../edit-profile.php?signup=usertaken");
				exit();
			} else {
					//Hashing the password
				$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database

				$filename=$files["name"]; 
				$fileType=$files["type"];
				$fileTempName=$files["tmp_name"];
				$fileError=$files["error"];
				$fileSize=$files["size"];
				$fileExt=explode(".", $filename);



				$fileActualExt=strtolower(end($fileExt));

				$allowed=Array("jpg", "jpeg", "png");

				if (in_array($fileActualExt, $allowed)){
					echo "2allowed";

					if($fileError==0){
						echo "3 no error";

						if($fileSize < 2000000){
							echo "4correct file size" ;

							$imgFullName=$newFileName.".".uniqid("", true) .".".$fileActualExt;

							$fileDestnation="../uploaded-images/".$imgFullName;



							

							$sql="SELECT * FROM users;";
							$stmt=mysqli_stmt_init($conn);

							if(!mysqli_stmt_prepare($stmt,$sql)){
								echo "sql statment failed" ;
							}else{

								mysqli_stmt_execute($stmt);
								$result =mysqli_stmt_get_result($stmt);
								$rowCount=mysqli_num_rows($result);
								$setImageOrder=$rowCount +1;

								$role=1;

								$username = $_GET['username'];

							
								
								$sql = "UPDATE users SET fname='$first', lname='$last' , username='$user' , phone='$phone' , password='$hashedpwd' , profilePic='$imgFullName' , imgorder='$setImageOrder'  , description='$desc' , role='$role'  , field='$field' WHERE username='$username'";

								

								

								if ($conn->query($sql) === TRUE) {
									echo "Record updated successfully";

									move_uploaded_file($fileTempName, $fileDestnation);
									
									$_SESSION['username'] = $user;
								header("Location: ../../edit-profile.php?upload=success");
								} else {
									echo "Error: " . $sql . "<br>" . mysqli_error($conn);
								// echo "Error updating record: " . $conn->error;
								header("Location: ../../edit-profile.php?upload=sqlerror");
								}

							}


						}else{
							header("Location: ../../edit-profile.php?upload=fileToBig");

							exit();
						}
					}else{
						header("Location: ../../edit-profile.php?upload=notknownerror");

						exit();
					}
				}else{
					header("Location: ../../edit-profile.php?upload=uploadProperFile");

					exit();
				}





			}
		}

	}

}

else{
	echo"no submit";
	header("Location: ../../edit-profile.php?upload=noSubmit");
	exit();
}
