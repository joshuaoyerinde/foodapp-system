<?php
    session_start();
    include '../db.php';
    // $id = $_SESSION['user_id'];
   
        $id = $_GET['id'];
        $select ="SELECT usersid, `first_name`, `last_name`, `users_email`, `password` FROM `registration_tb` WHERE usersid = $id";
        $query = mysqli_query($connect,$select);
        $fetch = mysqli_fetch_all($query,MYSQLI_ASSOC);
       echo json_encode($fetch);
   
?>