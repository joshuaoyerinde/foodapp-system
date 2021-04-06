<?php
    session_start();
    include '../db.php';
    $idu = mysqli_real_escape_string($connect,$_GET['id']);
    if (isset($idu)){
        $select_Commands = "SELECT * FROM storecarts WHERE usersid = '$idu'";
        $commadsquery = $connect->query($select_Commands);
        $fetchcommads = mysqli_fetch_all($commadsquery,MYSQLI_ASSOC);
        echo json_encode($fetchcommads);
    }
?>