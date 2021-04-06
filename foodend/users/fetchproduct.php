<?php 
	include '../db.php';
	$select_Product = "SELECT * FROM `foodapp_tb`";
	$query = mysqli_query($connect,$select_Product);
	$response = mysqli_fetch_all($query,MYSQLI_ASSOC);
	echo json_encode($response);
 ?>