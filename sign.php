<?php
if (isset($_POST['submit'])) 
{

$con = mysqli_connect("localhost","root","","nsih");
$username= mysqli_real_escape_string($con,$_POST['username']);
$country= mysqli_real_escape_string($con,$_POST['country']);
$gender=mysqli_real_escape_string($con,$_POST['gender']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5(mysqli_real_escape_string($con,$_POST['password']));


if(empty($username) ||empty($country) ||empty($gender) ||empty($email) ||empty($password)){
      header("Location: signup.php?signup=empty");
      exit();
}
else{
      if(!preg_match("/^[a-zA-Z]*$/", $username)){
            header("Location: signup.php?signup=invalid");
            exit();
      }
      else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                  header("Location: .signup.php?signup=email");
                  exit();
            }
            else{
                  $sql="SELECT * FROM signup WHERE username='$username'";
                  $result= mysqli_query($con,$sql);
                  $resultcheck= mysqli_num_rows($result);
                  if($resultcheck>0){
                        header("Location: signup.php?signup=usertaken");
                        exit();
                  }
                  else{
            
                        $sql= "INSERT INTO signup(username , email, country, gender, password) VALUES('$username','$email' ,'$country','$gender','$password');";
                        mysqli_query($con,$sql);
                        $sql1= "INSERT INTO login(email, password) VALUES('$email' ,'$password');";
                        mysqli_query($con,$sql1);
                     $_SESSION['username']=$row['username'];
                     $_SESSION['email'] = $row['email'];
                    $_SESSION['password'] = $row['password'];
                        header("Location: main.html?signup=success");
                        exit();

                  }
            }
      }
}

    
 }