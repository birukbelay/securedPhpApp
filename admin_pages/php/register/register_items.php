<?php 
session_start();

if(isset($_POST['submit'])){

	echo "1";

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
	$waranty = mysqli_real_escape_string($conn, $_POST['waranty']);
	$type = mysqli_real_escape_string($conn, $_POST['type']);
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
		echo "2allowed";

		if($fileError==0){
			echo "3 no error";

			if($fileSize < 2000000){
				echo "4correct file size" ;

					$imgFullName=$newFileName.".".uniqid("", true) .".".$fileActualExt;

					$fileDestnation="../uploaded-images/".$imgFullName;


						
							
						
						$sql="SELECT * FROM items;";
						$stmt=mysqli_stmt_init($conn);

						if(!mysqli_stmt_prepare($stmt,$sql)){
							echo "sql statment failed" ;
						}else{

							mysqli_stmt_execute($stmt);
							$result =mysqli_stmt_get_result($stmt);
							$rowCount=mysqli_num_rows($result);
							$setImageOrder=$rowCount +1;

						// sql code to insert into data base

						$sql = "INSERT INTO items (item_name,  profilePic, imgorder, item_description, waranty) VALUES ('$name', '$imgFullName', '$setImageOrder','$desc', '$waranty');";
							

							

							if ($conn->query($sql) === TRUE) {
								echo "Record updated successfully";

								move_uploaded_file($fileTempName, $fileDestnation);
								 header("Location: ../../add-items.php?upload=success");
							} else {
								echo "Error: " . $sql . "<br>" . mysqli_error($conn);
								// echo "Error updating record: " . $conn->error;
								 header("Location: ../../add-items.php?upload=sqlerror");
							}
							
						}
					

			}else{
				header("Location: ../../add-items.php?upload=fileToBig");
				
				exit();
			}
			}else{
				header("Location: ../../add-items.php?upload=notknownerror");
			
				exit();
			}
			}else{
				header("Location: ../../add-items.php?upload=uploadProperFile");
				
				exit();
	}
}else{
	echo"no submit";
	header("Location: ../../add-items.php?upload=noSubmit");
	exit();
}



						

