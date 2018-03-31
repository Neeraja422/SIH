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
      <link href="css/bootstrap-theme.css" rel="stylesheet" />
          <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>        
        <link rel="stylesheet" href="css/dash.css"> 

   
    </head>
    <style>
    
    li a,a:hover,a:focus{
    color:black;
    outline: none;
    text-decoration: none;
   }
    </style>
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
                        echo "<li><a href='login.html'>login</a></li>" ;
                        else
                        echo "<li><a href='profile.html'>Profile</a></li>" ;
                        ?>
                        <li><a href="help.pdf">Help</a></li>
                        <li><a href="main.html">Search</a></li>
                        <li><button class="help" class=" btn" style="background-color: #D6D6D6">Help</button>
                          <div class="modal" class="hide" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                           <div class="modal-header">
                                                <h5 class="modal-title">WE ARE HERE TO HELP</h5>
                                             <span class="close" id="one" style="float:right;" onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'> X</a></span>
                                             </div>
                                             <div class="modal-body">
                                                 <div class="card">
              
                                                      <div class="card-body ">Have a problem in looging <br>
                                                    <a href="#" class="btn btn-primary">Download Login pdf</a></div> 
                                                 </div>
                                              <div class="card">
              
                                                              <div class="card-body ">Struck how to start<br> 
                                                       <a href="#" class="btn btn-primary">Download Get started pdf</a></div> 
                                                                 </div> 
                                                         <div class="card">
              
                                                         <div class="card-body ">Want to update your details<br>
                                                       <a href="#" class="btn btn-primary">Download settings pdf</a></div> 
                                                      </div>
                                                                 <div class="card">
             
                                                            <div class="card-body ">Want to set Exam Remainder<br>
                                                                 <a href="#" class="btn btn-primary">Download remainder pdf</a></div> 
                                               </div> 
                                         </div>
       
                                   </div>
      
                              </div>
                         </div>
                         </li>  
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
                    <h3 class="text-center"><?php
                    echo $_SESSION['username'];
                    ?></h3>
                    <p class="text-center">user@email.com</p>
                    <br><br>
                    <ul class="list-group list-unstyled">
                        <li class="list-group-item "><a href="settings.php">Settings</a></li>
                        <li class="list-group-item active"><a href="profile.php">Profile</a></li>
                        <li class="list-group-item "><a href="dashboard.php">Dashboard</a></li>
                        <li class="list-group-item"><form action="logout.php" method="POST">
                          <button type="submit" name="submit">Logout</button></form></li>
                    </ul>
                </div>


                
                
                <div class="col-md-9 container part2">
<h1><b> USER PROFILE </b></h1>                        
<div class="progress">
<div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" style="width:100%"></div>
</div><br /><br />
<div class="jumbotron">
<table class="table table-hover">
    <form method="POST" action="" name="myForm" onsubmit="return validateForm()" method="post">
	<div class="form-group">
	<th> BASIC DETAILS</th>
<tr>
<th>  <img src="images/pen.png" style="float:left; width:40px; height:40px;"></th>
<td> <input type="text" class="form-control" name="firstname" placeholder="FIRSTNAME" required ></td>
<td> <input type="text"class="form-control" name="lastname"  placeholder="LASTNAME" required></td>
</tr>
<tr>
<th><img src="images/gender.png" style="float:left; width:40px; height:40px;"> </th>
<td> <input type="radio" name="gender" value="male"><span  style="width:80px;" class="badge  badge-pill badge-secondary">Male</span>
     <input type="radio" name="gender" value="female"><span  style="width:80px;" class="badge badge-pill badge-secondary">Female</span></td>
</tr>
<tr>
<th>  <img src="images/email.png" style="float:left; width:40px; height:40px;"></th>
<td> <input type="text" class="form-control"name="email"  placeholder="EMAIL" required ></td>
</tr>
<tr>
<th><img src="images/phone.png" style="float:left; width:40px; height:40px;"></th>   
<td> <input type="tel" class="form-control"  name="phone" ></td>
</tr>
<tr>
<th><img src="images/flag.png" style="float:left; width:40px; height:40px;"></th>   
<td> <input type="text"  class="form-control" name="country"  placeholder="NATIONALITY" required></td>
</tr>
<tr>
<th><img src="images/age.png" style="float:left; width:40px; height:40px;"></th>   
<td> <input type="number" class="form-control"  name="age"  placeholder="AGE" required ></td>
</tr>
</div>
</form>
</table>
</div>


<div class="jumbotron">
<table class="table table-hover">

    <form method="POST" action="">
	<div class="form-group">
	
	<th>ACADEMIC DETAILS <img src="images/academics.png" style="float:left; width:40px; height:40px;"></th>
<tr class="table-primary">
<td><textarea class="form-control" rows="2" > Secondary Education</textarea><!-- <input type="text" class="form-control" name="secondary education" value="Secondary Education"   style="width:200px; height:70px; "> --></td>
</tr>
<tr class="table-primary">
<td><textarea class="form-control" rows="3" >Senior Secondary Education</textarea><!-- <input type="text" class="form-control" name="senior" value="Senior Sec.Education" style="width:200px; height:70px; "> --></td>
</tr>
<tr class="table-primary">
<td><textarea class="form-control" rows="3" > Graduation</textarea><!-- <input type="text" class="form-control" name="grad" value="Graduation" style="width:200px; height:70px; "> --></td>
</tr>
<tr class="table-primary">
<td><textarea class="form-control" rows="3" > Post Graduation</textarea><!-- <input type="text"  class="form-control" name="pgrad" value=" Post Graduation" style="width:200px; height:70px; "> --></td>
</tr>
<tr class="table-primary">
<td><textarea class="form-control" rows="3" >Diploma</textarea><!-- <input type="text" class="form-control" name="diploma" value="Diploma" style="width:200px; height:70px; "> --></td>
</tr>
<tr class="table-primary" >
<td><textarea class="form-control" rows="3" > Ph.D</textarea><!-- <input type="text" class="form-control" name="Ph.D" value="Ph.D" style="width:200px; height:70px; "> --></td>
</tr>
</div>
</form>
</table>
</div>

<div class="jumbotron">
<table class="table table-hover">

    <form method="POST" action="">
	<div class="form-group">
		<th>POSITION OF RESPONSIBILITIES <img src="images/pores.png" style="float:left; width:40px; height:40px;"></th>
<tr class="table-primary">
<td><textarea class="form-control" rows="3" ></textarea></td>
</tr>
</div>
</form>
</table>
</div>

<div class="jumbotron">
<table class="table table-hover">

    <form method="POST" action="">
	<div class="form-group">
	<th> SKILLS <img src="images/skills.png" style="float:left; width:40px; height:40px;"></th>
    <tr class="table-primary">
<td><textarea class="form-control" rows="3" ></textarea></td>
</tr>
</div>
</form>
</table>
</div>
<div class="jumbotron">
<table class="table table-hover">

    <form method="POST" action="">
	<div class="form-group">
	<th>ADDITIONAL FIELDS <img src="images/add_skills.png" style="float:left; width:40px; height:40px;"></th>
<tr class="table-primary">
 <td><textarea class="form-control" rows="3" ></textarea></td>
</tr>
</div>
</form>
</table>
</div>
<table class="table table-hover">

    <form method="POST" action="">
	<div class="form-group">
<tr>
<td> <input type="button" class="btn btn-primary btn-block" name="save" value="SAVE"></td>   
<td> <input type="button" class="btn btn-primary btn-block" name="edit" value="EDIT"> </td>
</tr>
</div>
</form>
</table>

</div>


                
        
        

                
            </div><!--end of row-->
        </div><!--End of demo-->


        
 <script>
    $(".help").click(function(){
        $(".modal").show();
    });

    
    </script>
     </body>
</html>        