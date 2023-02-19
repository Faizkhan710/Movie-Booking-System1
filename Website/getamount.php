<?php
include "shared/conn.php";
 $tkt = $_GET['tkt'];

 $mysql = "SELECT * from tickets  where  t_id = '$tkt'";
 $result = mysqli_query($conn,$mysql);
 while($row = mysqli_fetch_assoc($result)){
    
      echo   $row['t_price'];


    }
?>