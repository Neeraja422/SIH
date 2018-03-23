<?php
session_start();
if (isset($_POST['submit'])) 
{

$con = mysqli_connect("localhost","root","","sih");

$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5(mysqli_real_escape_string($con,$_POST['password']));

$res = mysqli_query($con,"select * from users where email='$email' and password='$password';");

$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
$count = mysqli_num_rows($res);

if($count == 1) 
      {
         $_SESSION['uname'] = $row['uname'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['location'] = $row['location'];
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
  <div class="flex-row">
    <input id="email" class='lf--input' placeholder='Email Address' type='text' name="email">
  </div>
  <div class="flex-row">
    <input id="password" class='lf--input' placeholder='Password' type='password' name="Password">
  </div>
  <input class='lf--submit' type='submit' value='LOGIN' name="submit" id="btnSubmit">

	  <p style="font-size:.7em;color:#2dc6bf;text-align:center;cursor:hand"><u><a style="color:#2dc6bf" href="signup.php">Sign Up</a></u></p>

</form>

 <label id="lf--errormsg"><?php echo ($_SESSION["err"]); ?></label>
    </div>

</body>
</html>
