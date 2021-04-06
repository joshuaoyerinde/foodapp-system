<?php
include '../db.php';
$id = $_GET['id'];
$select = "SELECT * FROM details_commans WHERE usersid = $id";
$commadsQuery = mysqli_query($connect,$select);
$fetchCommands = mysqli_fetch_all($commadsQuery,MYSQLI_ASSOC);
echo json_encode($fetchCommands);
?>