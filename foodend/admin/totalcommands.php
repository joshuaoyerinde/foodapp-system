<?php
include '../db.php';
 $totalDetailsCommands = "SELECT COUNT(*) as commands FROM details_commans";
 $querycommands = mysqli_query($connect,$totalDetailsCommands);
 $fetchCommands = mysqli_fetch_all($querycommands,MYSQLI_ASSOC);
 echo json_encode($fetchCommands); 