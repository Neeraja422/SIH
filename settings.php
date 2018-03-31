<?php 
session_start();
$_SESSION['login'] = 'yes' ;
?>


<!DOCTYPE html>

<html>
    <head>
    <title>Education In India</title><link href="images/logo.png" rel="icon" type="x-icon/image">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>        
        <link rel="stylesheet" href="css/settings.css"> 
   
    </head>
    <body>
        <div id="home">
        <nav  data-spy="affix" data-offset-top="50">
            <div class="container">
              

               <div class="navbar-header">
                        <button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only" >Toggle navigation</span>
                            <span class="icon-bar" style="background-color: #D6D6D6"></span>
                            <span class="icon-bar" style="background-color: #D6D6D6"></span>
                            <span class="icon-bar" style="background-color: #D6D6D6"></span>
                        </button>
                    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" style="width:40px; height:30px"></a>
                </div>

    
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="home.html #about">About us</a></li>
                        <li><a href="home.html #con">Contact</a></li>
                        <?php 
                        if(!isset($_SESSION['login']))
                        echo "<li><a href='login.php'>login</a></li>" ;
                        else
                        echo "<li><a href='profile.php'>Profile</a></li>" ;
                        ?>
                        <li><a href="main.html">Search</a></li>
         
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav></div>


        <div class="demo">
            <div class="row  text-center">
                <h1 class="heading-title"><img src="images/logo.png" style="width:50px ; height: 50px"> Education In India </h1>
            </div>
            <div class="row">
                <div class="col-md-2 text-center container sidebar ">
                    <img src="images/user.png" alt="userlogo" style="width:80% ; height: 22%">
                    <h3 class="text-center">User Name</h3>
                    <p class="text-center">user@email.com</p>
                    <br><br>
                    <ul class="list-group list-unstyled">
                        <li class="list-group-item active"><a href="settings.php">Settings</li>
                        <li class="list-group-item">Profile</li>
                        <li class="list-group-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="list-group-item"><a href="logout.php">Logout</a></li>
                    </ul>
                </div>

                 <div class="col-md-9 container part2">
                 <div class="textbox ">
      <div class="textarea"> 
                       <h3>SETTINGS</h3>
              <div class="subtab" > Change profile photo <input type="file" name="profilepic" accept="image/*"> <span></span></div>
              <div class="subtab" ><a href="#">Change Password</a></div>
              <div class="subtab" >Email-ID:  <input type="email" ></div>
              <div class="subtab" >Phone number : <input type="text" ></div>
              <div class="subtab" >Notifications Turn ON: 
               <input type="checkbox" data-toggle="toggle">
                
                  </div>
            <h4>LINKS:</h4>
               <div class="subtab" ><p><span class="input-group-addon">https://plus.google.com/<input type="text" placeholder="Google+ Link" > </span></p></div>
               <div class="subtab" ><button class="btn btn-primary btn-block" >SAVE</button>
                 </div>
           </div>
                      </div>
    </div>
                
            </div><!--end of row-->
        </div><!--End of demo-->

     </body>
</html>        