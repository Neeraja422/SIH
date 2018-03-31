<?php
session_start();
if (isset($_POST['submit'])) 
{

$con = mysqli_connect("localhost","root","","nsih");

$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5(mysqli_real_escape_string($con,$_POST['password']));

$res = mysqli_query($con,"select * from login where email='$email' and password='$password';");
$row=mysqli_fetch_assoc($res);
$count = mysqli_num_rows($res);

if($count == 1) 
      {
        $_SESSION['username']=$row['username'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['password'] = $row['password'];
         header("location: dashboard.php");
      }else 
      {
         die("The Username or Password entered are Invalid");
      }
}
?>

<!--<!DOCTYPE html>-->
<html >
<head>
  <meta charset="UTF-8">
    <title>Education In India</title><link href="images/logo.png" rel="icon" type="x-icon/image">
  <link rel="stylesheet" href="css/logincss.css">
</head>

<body>
    <div class="container1">
  <form class='login-form' method="post">
     <span class="close" id="one" style="float:right;" onclick='this.parentNode.parentNode.removeChild(this.parentNode); opreturn false;'><a class="closelink" style="text-decoration: none;
    color:#D6D6D6;" href="home.php"> X</a></span><br>
  <div class="flex-row">
    <input id="email" class='lf--input' placeholder='Email Address' type='text' name="email">
  </div>
  <div class="flex-row">
    <input id="password" class='lf--input' placeholder='Password' type='password' name="Password">
  </div>
  <input class='lf--submit' type='submit' value='LOGIN' name="submit" id="btnSubmit">

	  <p style="font-size:.7em;color:#2dc6bf;text-align:center;cursor:hand"><u><a style="color:#2dc6bf" href="signup.php">Sign Up</a></u></p>

</form>

    </div>

</body>
</html>
