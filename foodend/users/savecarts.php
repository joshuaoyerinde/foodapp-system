<?php 
	session_start();
	include '../db.php';
	// if (isset($_SESSION['user_id'])) {
	$id = $_POST['userid'];
	$food = $_POST['foods'];
	// echo $_SESSION['user_id'];
	$food =(json_decode($food));
	foreach ($food as $foods) {
		$productname = $foods->product_name;
		$productimage = $foods->productimage;
		$available_time = $foods->available_time;
		$price = $foods->product_price; 
		$quantity = intval($foods->quantity);
		$inserter = "INSERT INTO storecarts(product_name, available_time, productimage, price, quantity, usersid) VALUES ('$productname','$available_time','$productimage','$price','$quantity','$id')";
		$query = mysqli_query($connect,$inserter);
	}
	if($query){
		$resp = array('message' => true);
		$update = "UPDATE `details_commans` SET status = 'done' WHERE usersid ='$id'";
		$update_quey = $connect->query($update);
	}else{
		$resp = array('message' => false);
	}
	echo json_encode($resp);
 ?>