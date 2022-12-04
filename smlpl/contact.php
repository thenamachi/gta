<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>SHRI MEERA LABS PVT LTD</title>
	    <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <!-- Bootstrap Core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- Flaticon CSS -->
	    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
	    <!-- font-awesome CSS -->
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <!-- Offcanvas CSS -->
	    <link href="css/hippo-off-canvas.css" rel="stylesheet">
	    <!-- animate CSS -->
	    <link href="css/animate.css" rel="stylesheet">
	    <!-- language CSS -->
	    <link href="css/language-select.css" rel="stylesheet">
	    <!-- owl.carousel CSS -->
	    <link href="owl.carousel/assets/owl.carousel.css" rel="stylesheet">
		<!-- magnific-popup -->
    	<link href="css/magnific-popup.css" rel="stylesheet">
    	<!-- Main menu -->
    	<link href="css/menu.css" rel="stylesheet">
    	<!-- Template Common Styles -->
    	<link href="css/template.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="css/style.css" rel="stylesheet">
	    <!-- Responsive CSS -->
	    <link href="css/responsive.css" rel="stylesheet"><link href="quick.css" rel="stylesheet">

	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
	    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
		    <script src="js/vendor/html5shim.js"></script>
		    <script src="js/vendor/respond.min.js"></script>
	    <![endif]-->
	</head>


	<body id="page-top">
		<div id="st-container" class="st-container">
		    <div class="st-pusher">
	        	<div class="st-content">
				<?php  include("includes/header.php"); ?>
				  	
                    <section class="page-title-section">
						<div class="container">
							<div class="page-header-wrap">
								<div class="page-header">
							   		<h1>Contact us</h1>
							   	</div>
							   <ol class="breadcrumb">
								  <li><a href="#">Home</a></li>
								  <li class="active">Contact</li>
								</ol>
							</div>
						</div>
					</section>


					<section class="contact-info-section">
						<div class="container">
							
							<div class="row content-row">

								<div class="col-md-7">
									<div class="contact-map">
										<h3>Contact Form</h3>
										<form id="mainContact" action="sendemail.php" method="POST">
											<div class="form-group">
											    <label for="name">Name</label>
											    <input name="name" type="text" class="form-control"  required="" placeholder="">
											</div>
										  	<div class="form-group">
										    	<label for="email">Email address</label>
										    	<input name="email" type="email" class="form-control" required="" placeholder="">
										  	</div>

											<div class="row">
												<div class="col-md-6">
												  <div class="form-group">
												    <label for="subject">Subject</label>
												    <input name="subject" type="text" class="form-control" required="" placeholder="">
												  </div>
												</div>
												<div class="col-md-6">
												  <div class="form-group">
												    <label for="phone">Phone Number</label>
												    <input name="phone" type="text" class="form-control" placeholder="">
												  </div>
												</div>
											</div>
											<div class="form-group text-area">
												<label for="message">Your Message</label>
												<textarea name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
											</div>

											<button type="submit" class="btn btn-primary">Send Message</button>
										</form>
									</div>
								</div>

								<div class="col-md-5">
									<div class="contact-info">
										<h3>Head Office</h3>

										<address>
											384 Maple Circle<br>
											Simi Valley, Nevada 47424<br>
											Phone : +12 30 456789<br>
											Email : yourname@transport.com<br>
										</address>
									</div><!-- /.contact-info -->

									<div class="contact-info">
										<h3>World Wide Offices</h3>

										<address>
										<strong>Singapore</strong><br>
											Shri Meera Labs Pvt Ltd<br>
											51 Goldhill Plaza,<br>
											#07-10/11,<br>
											Singapore - 308900<br>
										</address>
									</div><!-- /.contact-info -->
									
										<div class="contact-info">								

										<address>
										<strong>UAE</strong><br>
											Shri Meera Labs FZ-LLC,<br>
											A4-425, Al Hamra Industrial Zone-FZ,<br>
											Dubai<br>
										</address>
									</div><!-- /.contact-info -->

								</div>
							</div>
						</div>
					</section>


			         <!-- footer-widget-section start -->
					 <?php include("includes/footer.php"); ?>
					 
			        <!-- footer-widget-section end -->

			        <!-- copyright-section start -->
			        <?php include("includes/copyright.php"); ?> 
			        <!-- copyright-section end -->
	    		</div> <!-- .st-content -->
		    </div> <!-- .st-pusher -->
			
			<!-- OFF CANVAS MENU -->
	    	<div class="offcanvas-menu offcanvas-effect">
	    		<div class="offcanvas-wrap">
			        <div class="off-canvas-header">
			        	<button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
			        </div>
			        <ul id ="offcanvasMenu" class="list-unstyled visible-xs visible-sm">
			            <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
			            <li>
			            	<a href="#">Pages</a>
			            	<ul>
								<li><a href="about.php">About</a></li>
							    <li><a href="service.php">Service</a></li>
							    <li><a href="our-people.php">Our people</a></li>
							    <li><a href="career.php">Career</a></li>
							    <li><a href="faq.php">FAQ Page</a></li>
							    <li><a href="typography.php">Typography</a></li>
							</ul>

			            </li>
			            <li>
			            	<a href="#">Services</a>
			            	<ul>
								<li><a href="air.php">Air transportation</a></li>
								<li><a href="marine.php">Marine transportation</a></li>
								<li><a href="moving.php">Moving &amp; storage</a></li>
								<li><a href="shipping.php">Shipping &amp; operations</a></li>
								<li><a href="transportation.php">Transportation logistics</a></li>
								<li><a href="trucking.php">Trucking</a></li>
							</ul>

			            </li>
			            <li>
			            	<a href="#">Blog</a>
							<ul>
			            		<li>
			            			<a href="blog.php">Standard blog</a>
			            		</li>
			            		<li>
			            			<a href="blog-single.php">Single blog</a>
			            		</li>
			            	</ul>
			            </li>
			            <li><a href="contact.php">Contact</a></li>
			            <li><a href="typography.php">Typography</a></li>
			        </ul>
			        <div class="offcanvas-widgets hidden-sm hidden-xs">
				        <div id="twitterWidget">
							<h2>Tweeter feed</h2>				    	
							<div class="twitter-widget"></div>
						</div>
						<div class="newsletter-widget">
							<h2>Stay in Touch</h2>
							<p>Enter your email address to receive news &amp; offers from us</p>

							<form class="newsletter-form">
								<div class="form-group">
									<label class="sr-only" for="InputEmail1">Email address</label>
									<input type="email" class="form-control" id="InputEmail2" placeholder="Your email address">
									<button type="submit" class="btn">Send &nbsp;<i class="fa fa-angle-right"></i></button>
								</div>
							</form>		
							       				
						</div><!-- newsletter-widget -->
					</div>
				</div>
	      	</div><!-- .offcanvas-menu -->
		</div><!-- /st-container -->


		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>

	    <!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- owl.carousel -->
	    <script src="owl.carousel/owl.carousel.min.js"></script>
	    <!-- Magnific-popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Offcanvas Menu -->
		<script src="js/hippo-offcanvas.js"></script>
		<!-- inview -->
		<script src="js/jquery.inview.min.js"></script>
		<!-- stellar -->
		<script src="js/jquery.stellar.js"></script>
		<!-- countTo -->
		<script src="js/jquery.countTo.js"></script>
		<!-- classie -->
		<script src="js/classie.js"></script>
		<!-- selectFx -->
		<script src="js/selectFx.js"></script>
		<!-- sticky kit -->
		<script src="js/jquery.sticky-kit.min.js"></script>
	    <!-- GOGLE MAP -->
	    <script src="https://maps.googleapis.com/maps/api/js"></script>
	    <!--TWITTER FETCHER-->
	    <script src="js/twitterFetcher_min.js"></script>
	    <!-- Custom Script -->
	    <script src="js/scripts.js"></script>
	</body>
</html>