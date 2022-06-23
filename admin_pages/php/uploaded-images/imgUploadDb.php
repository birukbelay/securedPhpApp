<?php 
session_start();

if(isset($_POST['submit'])){

	echo "1";

	// $newFileName=$_POST['filename'];

	// if(empty($newFileName)){
		$newFileName="gallery";
	// }
	// else{
		// $newfilename=strtolower(str_replace(" ", "-", $newfilename));
	// }

	// $imageTitle=$_POST['filetitle'];
	// $imageDesc=$post['filedesc'];


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
		echo "2allowed";

		if($fileError==0){
			echo "3 no error";

			if($fileSize < 2000000){
				echo "4correct file size" ;

					$imgFullName=$newFileName.".".uniqid("", true) .".".$fileActualExt;

					$fileDestnation="../images/gallery".$imgFullName;

						include_once "../db/dbfunctional.php";

							
						
						$sql="SELECT * FROM members;";
						$stmt=mysqli_stmt_init($conn);

						if(!mysqli_stmt_prepare($stmt,$sql)){
							echo "sql statment failed" ;
						}else{

							mysqli_stmt_execute($stmt);
							$result =mysqli_stmt_get_result($stmt);
							$rowCount=mysqli_num_rows($result);
							$setImageOrder=$rowCount +1;

							$username = $_GET['username'];

							
							$sql = "UPDATE members SET profilePic='$fileDestnation', imgorder='$setImageOrder' WHERE username='$username'";

							if ($conn->query($sql) === TRUE) {
								echo "Record updated successfully";

								move_uploaded_file($fileTempName, $fileDestnation);
								header("Location: imageUpload.php?upload=success");
							} else {
								// echo "Error updating record: " . $conn->error;
								header("Location: imageUpload.php?upload=error");
							}
							
						}
					

			}else{
				header("Location: imageUpload.php?upload=fileToBig");
				
				exit();
			}
			}else{
				header("Location: imageUpload.php?upload=error");
			
				exit();
			}
			}else{
				header("Location: imageUpload.php?upload=uploadProperFile");
				
				exit();
	}
}else{
	echo"no submit";
	header("Location: imageUpload.php?upload=noSubmit");
	exit();
}