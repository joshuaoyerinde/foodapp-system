<?php 
	include '../db.php';
	
	$firstname = mysqli_real_escape_string($connect,$_POST['firstname']);
	$lastname = mysqli_real_escape_string($connect,$_POST['lastname']);
	$usersemail = mysqli_real_escape_string($connect,$_POST['email']);
	$password = mysqli_real_escape_string($connect,$_POST['password']);
	// echo $firstname;
	$inserter = "INSERT INTO registration_tb(first_name, last_name, users_email, password) VALUES ('$firstname','$lastname','$usersemail','$password')";
	$query = mysqli_query($connect,$inserter);
	if ($query) {
		$response= array('success' => true);
	}else{
		$response= array('fail' => false);
	}
	echo json_encode($response);

 ?>