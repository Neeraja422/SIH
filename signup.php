<?php

$country = array("--Select Country--","Australia","Bangladesh","Canada","Denmark",
"Europe","France","Germany","Indonesia","USA");

$gender = array("--Select Gender--","Female","Male","Others");

  $host = "localhost";
  $user = "root";
  $pass = "";
  $database = "sih";


 ?>
<!--<!DOCTYPE html>-->
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/logincss.css">
</head>

<style type="text/css">
.selected_country,.selected_gender{
  width: 100%;
  height: 50px;
}
.flex-row-adjusted{
  height: 30px;
}
a{
  color:#2dc6bf;
}
.lf--submit-adjusted{
  padding-bottom: .5em;
}
</style>

<body>
    <div class="container1">
  <form class='login-form' method="post">
  <div class="flex-row">
    <input id="username" class='lf--input' placeholder='Enter USERNAME' type='text' name="username">
  </div>
  <div class="flex-row">
    <input id="email" class='lf--input' placeholder='Enter Email Adrress' type='text' name="email">
  </div>

  <div class="flex-row">
  <select class="selected_country" name="selected_country_option">
    <?php
  foreach($country as $val) { echo "<option>".$val."</option>";};
     ?>
  </select>
  </div>

  <div class="flex-row">
  <select class="selected_gender" name="selected_gender_option">
    <?php
  foreach($gender as $val) { echo "<option>".$val."</option>";};
    ?>
  </select>
  </div>

  <div class="flex-row">
    <input id="password" class='lf--input' placeholder='Password' type='password' name="txtpassword">
  </div>
  <input class='lf--submit lf--submit-adjusted' type='submit' value='Sign Up' name="submit" id="btnSubmit">

  <p style="font-size:.6em;color:#2dc6bf;text-align:center;cursor:hand"><u><a href="login.php">Sign In</a></u></p>

  </form></div>
</body>

</html>
