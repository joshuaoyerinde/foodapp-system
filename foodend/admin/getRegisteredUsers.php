<?php
    include '../db.php';
    $selectUsers = "SELECT concat(`first_name`,last_name)as name,`users_email` FROM registration_tb";
    $usersQuery = mysqli_query($connect,$selectUsers);
    $fetch = mysqli_fetch_all($usersQuery,MYSQLI_ASSOC);
    echo json_encode($fetch);
?>