<?php 
// session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Origin, X-Reguested-With, Content-Type, Accept");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Max-age: 86400");

	$connect=mysqli_connect('localhost','root','','foodapp_bd');
	// $connect=mysqli_connect('sql205.epizy.com','epiz_26845142','dammyjosh33','epiz_26845142_foodapp_db');
	if ($connect) {
		// echo "success";
		// echo $_SESSION['user_id']; 
	}else{
		// echo "never";
	}
 ?>
