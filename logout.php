<?php
   session_start();
   unset($_SESSION["email"]);
   unset($_SESSION["password"]);
   
   echo 'Logged out successfully';
   header('Refresh: 2; URL = home.php');
?>