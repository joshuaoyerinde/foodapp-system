<?php
    include '../db.php';
    $_POST=json_decode(file_get_contents('php://input'),true);
    $id = $_POST['id'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    // echo $phone; 
    $update_details = "UPDATE `details_commans` SET phone='$phone', address ='$address' WHERE `id`= '$id'";
    $query = mysqli_query($connect,$update_details);
    echo json_encode($query);
?>