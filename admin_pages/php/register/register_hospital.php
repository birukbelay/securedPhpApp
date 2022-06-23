<?php 
session_start();

if(isset($_POST['submit'])){

	echo "1 post accepted---";

	// $newFileName=$_POST['filename'];

	// if(empty($newFileName)){
		$newFileName="technicians";
	// }
	// else{
		// $newfilename=strtolower(str_replace(" ", "-", $newfilename));
	// }

	// $imageTitle=$_POST['filetitle'];
	// $imageDesc=$post['filedesc'];
include_once "../db/db.php";

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$region = mysqli_real_escape_string($conn, $_POST['region']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$adress = mysqli_real_escape_string($conn, $_POST['adress']);
    $desc = mysqli_real_escape_string($conn, $_POST['description']);
	$files=$_FILES['file'];

	$filename=$files["name"]; 
	$fileType=$files["type"];
	$fileTempName=$files["tmp_name"];
	$fileError=$files["error"];
	$fileSize=$files["size"];
	$fileExt=explode(".", $filename);



	$fileActualExt=strtolower(end($fileExt));

	$allowed=Array("jpg", "jpeg", "png");

	if (in_array($fileActualExt, $allowed)){
		echo "---2  file  allowed----";

		if($fileError==0){
			echo "3 no file error ----";

			if($fileSize < 2000000){
				echo "4correct file size   ---" ;

					$imgFullName=$newFileName.".".uniqid("", true) .".".$fileActualExt;

					$fileDestnation="../uploaded-images/".$imgFullName;


						
							
						
						$sql="SELECT * FROM hospitals;";
						$stmt=mysqli_stmt_init($conn);

						if(!mysqli_stmt_prepare($stmt,$sql)){
							echo "sql statment failed" . $sql . "<br>" . mysqli_error($conn); ;
						}else{

							mysqli_stmt_execute($stmt);
							$result =mysqli_stmt_get_result($stmt);
							$rowCount=mysqli_num_rows($result);
							$setImageOrder=$rowCount +1;

							

						$sql = "INSERT INTO hospitals (hospital_name, hospital_phone, hospital_description, faculity_adress, profilePic, imgorder,region) VALUES ('$name', '$phone', '$desc', '$adress', '$imgFullName', '$setImageOrder', '$region');";
							

							

							if ($conn->query($sql) === TRUE) {
								echo "Record updated successfully";

								move_uploaded_file($fileTempName, $fileDestnation);
								 header("Location: ../../add-hospital.php?upload=success");
							} else {
								echo "Error: " . $sql . "<br>" . mysqli_error($conn);
								// echo "Error updating record: " . $conn->error;
								 header("Location: ../../add-hospital.php?upload=sqlerror");
							}
							
						}
					

			}else{
				header("Location: ../../add-hospital.php?upload=fileToBig");
				
				exit();
			}
			}else{
				header("Location: ../../add-hospital.php?upload=notknownerror");
			
				exit();
			}
			}else{
				header("Location: ../../add-hospital.php?upload=uploadProperFile");
				
				exit();
	}
}else{
	echo"no submit";
	header("Location: ../../add-hospital.php?upload=noSubmit");
	exit();
}



						

