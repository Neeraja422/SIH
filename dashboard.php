<?php
include_once 'sign.php';
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
        <link rel="stylesheet" href="css/dash.css">  
    </head>
    <style>
    li a,li a:hover{
      text-decoration: none;
      color:black;
      padding:10px;
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
                        <li><a href="home.php">Home</a></li>
                        <li><a href="home.php #about">About us</a></li>
                        <li><a href="home.php #con">Contact</a></li>
                        <li><a href='profile.php'>Profile</a></li>
                        <li><a href="main.html">Search</a></li>
                        <li><a href="help.pdf">Help</a></li>
         
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
                    <h3 class="text-center">Username</h3>
                    <p class="text-center">user@email.com</p>
                    <br><br>
                    <ul class="list-group list-unstyled">
                        <li class="list-group-item"><a href="settings.php">Settings</a></li>
                        <li class="list-group-item"><a href="profile.php">Profile</a></li>
                        <li class="list-group-item active"><a href="dashboard.php">Dashboard</a></li>
                        <li class="list-group-item"><form action="logout.php" method="POST">
                          <button type="submit" name="submit">Logout</button></form></li>
                    </ul>
                </div>

                 <div class="col-md-9 container part2">
                     <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                         <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Selected Exams</a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Selected colleges</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Applied exams/colleges</a></li>
                            <li role="presentation"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab">Remainders</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                <h3></h3>
                                <p>
                                    <div class="container collapsepart">
                                       
                                          <div class="panel-group" id="accordion">
                                                <div class="panel panel-default" style="width: 110%">
                                                     <div class="panel-heading">
                                                         <h4 class="panel-title">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">JEE MAINS EXAMINATION 2018</a>
                                                          </h4>
                                                     </div>
                                                     <div id="collapse1" class="panel-collapse collapse in">
                                                             <div class="panel-body">Joint Entrance Examination -Main(JEE-Main) , formely All India Engineering Entrance Examination(AIEEE), is an examination organised by the Central Board of Secondary Education(CBSE) in india.
                                                                <p>This national level competitive test is for admission to various undergraduate engineering and architecture courses in institutes accepting the AIEEE score, mainly 31 National Insitutes os TEchnology (NITs) and 23 Indian Institute of Information Technology(IIITs)</p>
                                                                <p>Consists of Two papers:</p>
                                                                <p>Paper1- Physics, Mathematics, Chemistry. Paper2-Mathematics, Drawing, Aptitude.</p>
                                                                <p>Duration of exam- 3hours for each paper</p>
                                                                <p>Offered once a year. Maximum three attempts in successive years.</p>
                                                                <button class="btn">Go to Official Website</button>
                                                                <button class="btn">Remove from dashboard</button>
                                                                <button class="btn">Apply</button></div>
                                                       </div>                                                              
                                                 </div>
                                                 <div class="panel panel-default" style="width: 110%">
                                                           <div class="panel-heading">
                                                              <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">JEE Advanced 2018</a>
                                                              </h4>
                                                             </div>
                                                             <div id="collapse2" class="panel-collapse collapse">
                                                                     <div class="panel-body">Joint Entrance Examination -Main(JEE-Main) , formely All India Engineering Entrance Examination(AIEEE), is an examination organised by the Central Board of Secondary Education(CBSE) in india.
                                                                <p>This national level competitive test is for admission to various undergraduate engineering and architecture courses in institutes accepting the AIEEE score, mainly 31 National Insitutes os TEchnology (NITs) and 23 Indian Institute of Information Technology(IIITs)</p>
                                                                <p>Consists of Two papers:</p>
                                                                <p>Paper1- Physics, Mathematics, Chemistry. Paper2-Mathematics, Drawing, Aptitude.</p>
                                                                <p>Duration of exam- 3hours for each paper</p>
                                                                <p>Offered once a year. Maximum three attempts in successive years.</p>
                                                                <button class="btn">Go to Official Website</button>
                                                                <button class="btn">Remove from dashboard</button></</div>
                                                            </div>
                                                    </div> <div class="panel panel-default" style="width: 110%">
                                                           <div class="panel-heading">
                                                              <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 2</a>
                                                              </h4>
                                                             </div>
                                                             <div id="collapse3" class="panel-collapse collapse">
                                                                     <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                            </div>
                                                    </div>
                                            </div> 
                                     </div>
                                 </p>
                            </div>
                          </div>
                        


                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                                <h3>Section 2</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec urna aliquam, ornare eros vel, malesuada lorem. Nullam faucibus lorem at eros consectetur lobortis. Maecenas nec nibh congue, placerat sem id, rutrum velit. Phasellus porta enim at facilisis condimentum. Maecenas pharetra dolor vel elit tempor pellentesque sed sed eros. Aenean vitae mauris tincidunt, imperdiet orci semper, rhoncus ligula. Vivamus scelerisque.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section3">
                                <h3>Section 3</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec urna aliquam, ornare eros vel, malesuada lorem. Nullam faucibus lorem at eros consectetur lobortis. Maecenas nec nibh congue, placerat sem id, rutrum velit. Phasellus porta enim at facilisis condimentum. Maecenas pharetra dolor vel elit tempor pellentesque sed sed eros. Aenean vitae mauris tincidunt, imperdiet orci semper, rhoncus ligula. Vivamus scelerisque.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section4">
                                
                                
                        
                          <div class="jumbotron">
                                      <form method="POST" onsubmit="return validateForm()"  action="" >
                                        <table class="table table-striped table-bordered table-responsive">
                                          <div class="form-group">
                                                <tr>
                                                    <th>EXAM NAME</th>
                                                    <th>DATE OF EXAM</th>
                                                    <th>PLACE</th>
                                                </tr>
                                                <tr>
                                                        <td> <input type="text"  name="ex_name" required></td>
                                                        <td> <input type="DATE" name="da_of_ex" required> </td>
                                                        <td> <input type="text" name="pla" required> </td>
                                                </tr>
                                                <tr  id="another" style="display:none;">
                                                        <td> <input type="text"  name="ex_name" required ></td>
                                                        <td> <input type="text" name="da_of_ex" required> </td>
                                                        <td> <input type="text" name="pla" required > </td>
                                                </tr>
                                              </div>
                                                </table>

                                                <input type="submit" class="btn btn-primary "  name="remain" id="rem1" value="SET REMAINDER">
                                                <input type="submit" class="btn btn-primary"   name="another" id="rem2" value="SET ANOTHER">
                                                 </form>
                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            

                </div>
            </div><!--end of row-->
        </div><!--End of demo-->

     </body>
     <script>
      function validateForm() {
      alert("YOUR RECORD HAS BEEN SAVED SUCCESSFULLY");
    }
    
  

      $("#rem2").click(function(){
        $("#another").show();
      })
     </script>
</html>        