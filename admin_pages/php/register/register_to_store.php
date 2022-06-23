<?php

if (isset($_POST['submit'])){

include_once '../db/db.php';
    $serial = mysqli_real_escape_string($conn, $_POST['serial']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	
	$model = mysqli_real_escape_string($conn, $_POST['model']);
    
    
	$brand = mysqli_real_escape_string($conn, $_POST['brand']);
    
 

	$installed_date = mysqli_real_escape_string($conn, $_POST['bought-date']);
	

	$expiry_date = mysqli_real_escape_string($conn, $_POST['expiry-date']);
    
  

	$description = mysqli_real_escape_string($conn, $_POST['description']);


$sql = "INSERT INTO store (serial_no, equipment_name, bought_price, model, brand,  date_bought, expiry_date, description ) VALUES ('$serial', '$name', '$price', '$model', '$brand', '$installed_date',  '$expiry_date', '$description');";



	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
        header("Location: ../../add-to-store.php?upload=sucess");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//        header("Location: ../../add-to-store.php?upload=sqlerror");
}


}
	else{
		header("Location: ../../add-to-store.php?upload=noSubmit");
		exit();
	}

	// , expiry_date, bought_price, sold_status, brand_name, brand_id, supplier_name, supplier_id, store_no, date_bought