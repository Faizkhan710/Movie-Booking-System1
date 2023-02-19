<?php
include "Shared/Conn.Php";
$id= $_GET['id'];
 $sql1 = "DELETE from Movies where m_id= '$id'";
 $query1 = mysqli_query($conn, $sql1);
 if(!$query1){
     die();
 }
 else {
    //  echo "Deleted";
     header("location:Display Home Movies.Php");
 }
?>