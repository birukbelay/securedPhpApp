<?php

if (isset($_POST['submit'])){

include_once '../db/db.php';
    $serial = mysqli_real_escape_string($conn, $_POST['serial']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	
	$model = mysqli_real_escape_string($conn, $_POST['model']);
	$brand = mysqli_real_escape_string($conn, $_POST['brand']);
    $channel = mysqli_real_escape_string($conn, $_POST['channel']);
	$contact_name = mysqli_real_escape_string($conn, $_POST['contact-name']);
	$contact_phone = mysqli_real_escape_string($conn, $_POST['contact-phone']);
	$installed_date = mysqli_real_escape_string($conn, $_POST['installed-date']);
	$waranty = mysqli_real_escape_string($conn, $_POST['waranty']);
    $region = mysqli_real_escape_string($conn, $_POST['region']);
	$expiry_date = mysqli_real_escape_string($conn, $_POST['expiry-date']);
    $faculty_name  = mysqli_real_escape_string($conn, $_POST['faculty_name']);
	$faculty_phone = mysqli_real_escape_string($conn, $_POST['faculty_phone']);
	$installer_name = mysqli_real_escape_string($conn, $_POST['installer-name']);
	$installer_phone= mysqli_real_escape_string($conn, $_POST['installer-phone']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);


$sql = "INSERT INTO sold_items (serial_no, equipment_name, sold_price, model, brand, channel, contact_person_name, contact_person_phone, installed_date, waranty_expired_date, region, expiry_date, faculity_name, faculity_phone, installer_name, installer_phone,equipment_description ) VALUES ('$serial', '$name', '$price', '$model', '$brand', '$channel', '$contact_name', '$contact_phone', '$installed_date', '$waranty', '$region', '$expiry_date', '$faculty_name', '$faculty_phone', '$installer_name', '$installer_phone', '$description');";



	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
        header("Location: ../../add-sold-items.php?upload=sucess");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//        header("Location: ../../add-sold-items.php?upload=sqlerror");
}


}
	else{
		header("Location: ../../add-sold-items.php?upload=noSubmit");
		exit();
	}

	// , expiry_date, bought_price, sold_status, brand_name, brand_id, supplier_name, supplier_id, store_no, date_bought