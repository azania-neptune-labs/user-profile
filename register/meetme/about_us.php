<?php

    session_start();
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "bestsofar");
    
  
    include("signin.php");
    echo $username;
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

     //include 'signin.php';
   // if(isset($_POST['submit'])){
    // receive all input values from the form
    //$email = ($link, $_POST['email']);
    // $name = mysqli_real_escape_string($link, $_POST['name']);
    // $surname = mysqli_real_escape_string($link, $_POST['surname']); //phone_number 
    // $contactNumber = mysqli_real_escape_string($link, $_POST['contactNumber']);
    // $address = mysqli_real_escape_string($link, $_POST['address']);
    // $password = mysqli_real_escape_string($link, $_POST['password']);
    
    //Check If the company exist
    $sql = "SELECT * FROM `userprofile` 
                            WHERE email =  ''
                            ";
    $Cresults = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($Cresults);
    

 

    // }else{
    //         //Error Here
    //         echo "Error", mysqli_error($link);
    //     }
?>



<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <form action="about-us.php" method="get">
      <!--   <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						 Brand and toggle get grouped for better mobile display -->
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
								<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header> 
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
       <!--  <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h2>About Us</h2>
						</div>
					</div>
				</div>
            </div>
        </section> -->
        <!--================End Home Banner Area =================-->
        
        
        <!--================Home Banner Area =================-->
        <section class="profile_area">
           	<div class="container">
           		<div class="profile_inner p_120">
					<div class="row">
						<div class="col-lg-5">
							<img class="img-fluid" src="img/personal-2.jpg" alt="">
						</div>
						<div class="col-lg-7">
							<div class="personal_text">
								
								<h3><?php echo $row['name'].' '.$row['surname'];?></h3>
								<ul class="list basic_info">
									
									<li><a href="#"><i class="lnr lnr-phone-handset"></i> <?php echo $row['contactNumber']; ?></a></li>
									<li><a href="#"><i class="lnr lnr-envelope"></i> <?php echo $row['email']; ?></a></li>
									<li><a href="#"><i class="lnr lnr-home"></i> <?php echo $row['address']; ?></a></li>
								</ul>
								<!-- <ul class="list personal_social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul> -->
							</div>
						</div>
					</div>
           		</div>
            </div>
        </section>
       </form>
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<!-- <div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div> -->
        			<!-- <div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        						<li><a href="#"><i class="fa fa-behance"></i></a></li>
        					</ul>
        				</aside>
        			</div> -->
                    <div class="col-lg-5 col-sm-6">
                        <aside class="f_widget ab_widget">
                        
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  Azania
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </aside>
                    </div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>