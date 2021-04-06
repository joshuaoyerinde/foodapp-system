<?php 
	session_start();
	include '../db.php';
	$usersemail = mysqli_real_escape_string($connect,$_POST['email']);
	$password = mysqli_real_escape_string($connect,$_POST['password']);
	// $idu = mysqli_real_escape_string($connect,$_POST['id']);

	$fetchquery = "SELECT usersid, users_email, first_name, last_name, password FROM registration_tb WHERE users_email='$usersemail' AND password='$password'";
	$query = mysqli_query($connect,$fetchquery);
	$result = mysqli_fetch_all($query,MYSQLI_ASSOC);
	// $findId = array('f' ->usersid);
	foreach ($result as $value) {
			$_SESSION['user_id'] = $value['usersid'];
		}
		if (isset($_SESSION['user_id'])) {
			// echo $_SESSION['user_id'];
			$resp = array('success' => true, 'message' => $_SESSION['user_id']);
			// include	'tet.php';
	}else{
		$resp = array('success'=>false, 'message' => 'Your email or password is invalid');
	}
	// $arrayName = array('auth' =>$resp, 'token'=>$fetchcommads);
	echo json_encode($resp);
	


 ?>