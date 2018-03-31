<?php
session_start();
if(isset($_SESSION['username'])){
    $_SESSION['username']="yes";
}
?><html>
    <link href="manifest.json" rel="manifest"/>
    <head>
    <title>Education In India</title><link href="images/logo.png" rel="icon" type="x-icon/image">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/form.css" >
        <script src="js/form.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body> 
       <header id="home">
           <nav  data-spy="affix" data-offset-top="50">
               <div class="container">

               <div class="navbar-header">
                <button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only" >Toggle navigation</span>
                    <span class="icon-bar" style="background-color: D6D6D6"></span>
                    <span class="icon-bar" style="background-color: D6D6D6"></span>
                    <span class="icon-bar" style="background-color: D6D6D6"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" style="width:40px; height:30px"></a>
                </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About us</a></li>
        <li><a href="#con">Contact</a></li>
        <li><a href='login.php'>login</a></li>
        <li><a href="help.pdf">Help</a></li>
         
         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
       </header>
        <div class="sect sectone">
            <div class="centereddiv">
                    <img src="images/logo.png" style="background-color: white; border-bottom-left-radius: 50%; border-bottom-right-radius: 50%; border-top-left-radius: 50%; border-top-right-radius: 50%">
                <h1 class="text-center">EDUCATION IN INDIA</h1>
                <p class="text-center">Way towards Hub of Knowledge </p>
            </div>
        </div>
         <div class="subsection" id="about">
             <div class="row"><br><br></div>
             <div class="row text-center">
                 <div class="col-md-4">
                    <h2 class="text-center">Who We Are</h2>
                     <p> we are here to provide simple and easy user interface for foreign students about  Indian colleges and the system. The Beneficial platform for quick access to entrance exams for admissions in Indian colleges. </p>
                 </div>
                 <div class="col-md-4">
                    <h2 class="text-center">What We Offer</h2>
                     <p> we offer platform where one can discuss with experts about education process in India. Remainders and updates about selected or applied entrance exams / admissions  will be sent to the registered email and/or contact numbers. Provide all information about entrance exams, admissions in different colleges , courses provided in different colleges , list of top colleges, accommodation, placements, extra curricular activities and  competitions etc.</p>
                 </div>
                 <div class="col-md-4">
                    <h2 class="text-center">Why Us</h2>
                     <p>We came up with this innovative solution in which one can refer without complexities and errors. One can find the genuine information about the complete education system in India in single platform</p>
                 </div>
             </div>
             
         </div>
        <div class="sect secttwo">
            <section class="featured-area text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="single-feature text-center">
								<div class="desc text-center">
                                                                    <h1 class="desc text-uppercase">1</h1>
									<p>Select course through searching. Proceed through entrance exams/Top ranking colleges</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-feature">
								<div class="desc text-center">
                                                                    <h1 class="desc text-uppercase">2</h1>
									<p>Navigate all the colleges procided by sorting option</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-feature">
								<div class="desc text-center">
                                                                    <h1 class="desc text-uppercase">3</h1>
									<p>View the Basic information of respective college by clicking on it</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-feature">
								<div class="desc text-center">
                                                                    <h1 class="desc text-uppercase">4</h1>
                                                                    <p>Add it to your dashboard if you want to visit again or add to your priority list</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-feature">
								<div class="desc text-center">
                                                                    <h1 class="desc text-uppercase">5</h1>
									<p>Visit The official website of coresponding college/Entrance exam by clicking on the button provided</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-feature">
								<div class="desc text-center">
                                                                    <h1 class="desc text-uppercase">6</h1>
                                                                    <p>Apply for the same. And you will be get notified regarding those updates</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
 
            
        </div>
        <div class="subsection">
            <div class="container">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                    <ol class="carousel-indicators">
                         <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                         <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                         <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                         <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                         <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                         <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                         <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                     </ol>

  <!-- Wrapper for slides -->
                 <div class="carousel-inner" role="listbox">
                      <div class="item active">
                          <a href="#"> <img class="img-responsive center-block" src="images/IIT-JEE-logo.jpg" alt="..."></a>
                           <div class="carousel-caption">
                                Image1
                             </div>
                     </div>
                     <div class="item">
                         <a href="#"> <img class="img-responsive center-block"  src="images/cat.jpg" alt="..."></a>
                             <div class="carousel-caption">
                                  Image2
                             </div>
                     </div>  
                     <div class="item">
                         <a href="#"> <img class="img-responsive center-block" src="images/one.jpg" alt="..."></a>
                           <div class="carousel-caption">
                                Image3
                             </div>
                     </div>
                     <div class="item">
                         <a href="#"> <img class="img-responsive center-block"  src="images/presult1.jpg" alt="..."></a>
                             <div class="carousel-caption">
                                  Image4
                             </div>
                     </div>
                     <div class="item">
                         <a href="#"> <img class="img-responsive center-block"  src="images/blue_logo.png" alt="..."></a>
                             <div class="carousel-caption">
                                  Image2
                             </div>
                     </div>  
                     <div class="item">
                         <a href="#"> <img class="img-responsive center-block" src="images/IIM_Calcutta.png" alt="..."></a>
                           <div class="carousel-caption">
                                Image3
                             </div>
                     </div>
                     <div class="item">
                         <a href="#"> <img class="img-responsive center-block"  src="images/p2.jpg" alt="..."></a>
                             <div class="carousel-caption">
                                  Image4
                             </div>
                     </div>
                    
                  </div>

  <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                   </div>
            </div>
        </div>
        <div class="sect sectthree" style="margin-bottom: -15px">
            <div class="centereddiv1">
                <h1 class="text-center">EDUCATION IN INDIA</h1>
                <p class="text-center">Get confused where to start? </p> 
                <p class="text-center">Click here to Start by selecting your requirements</p>
                <p class="text-center"><a href="main.html" class="primary-btn d-inline-flex align-items-center">Get Started</a></p>
            </div>
            <div class="centereddiv2">
                <h1 class="text-center">Prepare for Entrance Exams</h1>
                <p class="text-center">Select entrance exam and get to know hoe to prepare for that.</p>
                <form action="exam.php" method="POST">
                <select class="text-center" name="exam">
                    <option>Select Exam</option>
                    <option>JEE MAINS</option>
                    <option>JEE Advanced</option>
                    <option>JIPMER</option>
                    <option>NEET</option>
                </select>
                <div class="" >
                    <button class="btn" name="submit">Submit</button>
                </div>
            </form>
            </div>
                  
        </div>
        <div class="subsection  text-center">
            <h1 class="text-center">Follow Us</h1>
            <div class="container followsection text-center">
                <ul class="follow center-block text-center">
                    <li class="list-unstyled"><a href="#" class="atag"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> 
                    <li class="list-unstyled"><a href="#" class="atag"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> 
                    <li class="list-unstyled"><a href="#" class="atag"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> 
                    <li class="list-unstyled"><a href="#" class="atag"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> 
                    <li class="list-unstyled"><a href="#" class="atag"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> 
                </ul>
            </div>
        </div>
        <div class="sect sectfour">
            <div class="container" id="con">
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">
                                <form id="reused_form">
                                    <div class="form-group">
                                        <label >Name</label>
                                        <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label >Email</label>
                                        <input type="email" name="email" required class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label >Message</label>
                                        <textarea rows="3" name="message" class="form-control" placeholder="Type Your Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-raised btn-lg btn-warning" type="submit">Send</button>
                                    </div>
                                </form>
                                <div id="error_message" style="width:100%; height:100%; display:none; ">
                                    <h4>
                                        Error
                                    </h4>
                                    Sorry there was an error sending your form. 
                                </div>
                                <div id="success_message" style="width:100%; height:100%; display:none; ">
<h2>Success! Your Message was Sent Successfully.</h2>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <!-- Start Subscription Area -->

        <section class="footer-widget-area">
        
			<section class="subscription-area">
                            <div class="container text-center">
                                <div class="row">
                                    <h2 class="text-center" style="color: #D6D6D6">SUBSCRIBE HERE</h2>
                                </div>
                                <div class="row">
                                    <form class="form" method="GET">    
                                        <input type="text" name="subemail" required class="form-control" style="width: 300px; margin-left: 420px" placeholder="Enter Email Address">
                                        <button class="btn text-center" style="background-color: #269abc">Get Started</button>
                                    </form>
                                </div>
                                
                            </div>
				
			</section><br><br>
        
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="single-widget d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-pushpin"></span>
								</div>
								<div class="desc">
									<h6 class="title text-uppercase">Address</h6>
									<p>G.E Road <br> NIT Raipur, <br>Chattisgarh</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-widget d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-earth"></span>
								</div>
								<div class="desc">
									<h6 class="title text-uppercase">Email Address</h6>
									<div class="contact">
										<a href="mailto:education@india.com">education@india.com</a> <br>
										<a href="mailto:query@educationinindia.com">query@educationinindia.com</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-widget d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-phone"></span>
								</div>
								<div class="desc">
									<h6 class="title text-uppercase">Phone Number</h6>
									<div class="contact">
										<a href="tel:1545">012 4562 982 3612</a> <br>
										<a href="tel:54512">012 6321 956 4587</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Footer Widget Area -->
			<!-- Start footer Area -->
			<footer>
				<div class="container">
					<div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="row">

                                                    <h4 class="text-center">						
                                                    <img src="images/logo.png" style="width: 30px; ; height: 30px" alt="">Education In India</h4>
						
                                            </div>
						<div class="text-center copy-right-text">Copyright &copy; 2018  |  All rights reserved to Educationinindia.com inc.</div>
						<div class=" text-center footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>

		<script src="js/jquery.ajaxchimp.min.js"></script>
       <!-- <footer>
            <div class="container">
                <div class="row">
                 <div class="col-md-4">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="#con">Contact us</a></li>
                </ul></div>
                <div class="col-md-4">
                <h4>Follow us</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Youtube</a></li>
                    <li><a href="#">Linkedin</a></li>
                </ul></div>
            <div class="col-md-4">
            <h4>Our Location</h4>
            <address>
                <strong>EIN.com</strong><br>
                NIT Raipur<br>
                Raipur, Chattisgarh<br>
                <abbr title="Telephone">T!</abbr><a href="tel:9999999999">+91-9999999999</a>
                <abbr title="Mail">Ml</abbr><a href="mailto:info@gmail.com">info@gmail.com</a>
                
            </address></div>
                </div></div>
            <ul class="list-inline text-center">
                <li class="list-group-item">2018 Education In India, Inc</li>
                <li class="list-group-item">All rights reserved.</li>
                <li class="list-group-item"><a href="#">Terms of use and privacy policy</a></li>
            </ul>
        </footer>-->
        
</body>
if('serviceWorker' in navigator){
    navigator.serviveWorker
    .register('sw.js')
    .then(function(){
        console.log('service worker registered!');
    });
}
</html>
