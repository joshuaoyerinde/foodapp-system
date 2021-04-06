<?php
    include '../db.php';
    $fstname = mysqli_real_escape_string($connect,$_POST['firstname']);
    $lastname = mysqli_real_escape_string($connect,$_POST['lastname']);
    $phone = mysqli_real_escape_string($connect,$_POST['phone']);
    $city = mysqli_real_escape_string($connect,$_POST['city']);
    $userid = mysqli_real_escape_string($connect,$_POST['userid']);
    $address = mysqli_real_escape_string($connect,$_POST['address']);

    $inserter = "INSERT INTO details_commans(first_name, last_name, phone, city, usersid, address, status) VALUES 
    ('$fstname','$lastname','$phone','$city','$userid','$address','ready')";
    $command_query = mysqli_query($connect,$inserter);
    if($command_query){
        $res = '{"success:" true}';
    }
    else{
        $res = '{"success:" false}';
    }
    echo json_encode($res);


?>