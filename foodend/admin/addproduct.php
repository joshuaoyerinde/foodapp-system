<?php

include '../db.php';
$filename = $_FILES['file']['name'];
$productname = $_POST['foodname'];
$producttime = $_POST['availabletime'];
$productprice = $_POST['foodprice'];

// Valid file extensions
$valid_extensions = array("jpg","jpeg","png","pdf");
// File extension
$extension = pathinfo($filename, PATHINFO_EXTENSION);
// Check extension
if(in_array(strtolower($extension),$valid_extensions) ) {

   // Upload file
   if(move_uploaded_file($_FILES['file']['tmp_name'], "../productpic/".$filename)){
   		$inserter="INSERT INTO foodapp_tb(product_name, available_time, product_price, productimage) VALUES ('$productname','$producttime','$productprice','$filename')";
   			$query=mysqli_query($connect,$inserter);
   			if ($query) {
   				$res = array('success'=>true, 'message' =>'File Upload Successfully');
   			}else{
   				$res = array('success'=>false, 'message' =>'failed to upload');
   			}
              echo json_encode($res);
 
   			// echo json_encode($query);
      // echo 1;
   }else{
      echo 0;
   }
}else{
   echo 0;
}

exit;
 ?>

