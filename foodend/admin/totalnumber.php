<?php
    include '../db.php';
    $totalUsers = "SELECT COUNT(*) as users FROM registration_tb";
    $query = mysqli_query($connect,$totalUsers);
    $fetchusers = mysqli_fetch_all($query,MYSQLI_ASSOC);
    echo json_encode($fetchusers);
   

    // $showAll  = array('numusers' => $fetchusers, 'numcommads' => $fetchCommands, 'numfood' =>   $fetchNumOfFood);
    // echo json_encode($showAll);
?>