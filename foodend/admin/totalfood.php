<?php
include '../db.php';
    $totalNumOfFood = "SELECT COUNT(*) as foods FROM foodapp_tb";
    $queryFood = mysqli_query($connect,$totalNumOfFood);
    $fetchNumOfFood = mysqli_fetch_all($queryFood,MYSQLI_ASSOC);
    echo json_encode($fetchNumOfFood);