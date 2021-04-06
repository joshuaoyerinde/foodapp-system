<?php
      include '../db.php';
      $selectCommads = "SELECT * FROM details_commans";
      $commadsQuery = mysqli_query($connect,$selectCommads);
      $fetch = mysqli_fetch_all($commadsQuery,MYSQLI_ASSOC);
      echo json_encode($fetch);
?>