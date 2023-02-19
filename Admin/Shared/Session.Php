<?php
     session_start();
     $_SESSION['user']="Ismail";
     $_SESSION['password']="12345";
     If(isset($_SESSION['user'])){
         echo $_SESSION['user'] .  $_SESSION['password'];
     } else echo "Session Undefined";
?>