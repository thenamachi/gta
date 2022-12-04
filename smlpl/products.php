<?php 
error_reporting(0);
ini_set('display_errors', 0);
include("config/siteconfig.php");


function getdata($dbhost,$dbuser,$dbpassword,$dbname,$sql){
	$mysqli = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

					// Check connection
					if ($mysqli -> connect_errno) {
					  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
					  exit();
					}
				
 $result = $mysqli -> query($sql);
 $row = $result -> fetch_all(MYSQLI_ASSOC);
 $mysqli->close();
 return $row;
}


?>
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
	    <link href="<?php echo $basepath; ?>css/bootstrap.min.css" rel="stylesheet">
	    <!-- Flaticon CSS -->
	    <link href="<?php echo $basepath; ?>fonts/flaticon/flaticon.css" rel="stylesheet">
	    <!-- font-awesome CSS -->
	    <link href="<?php echo $basepath; ?>css/font-awesome.min.css" rel="stylesheet">
	    <!-- Offcanvas CSS -->
	    <link href="<?php echo $basepath; ?>css/hippo-off-canvas.css" rel="stylesheet">
	    <!-- animate CSS -->
	    <link href="<?php echo $basepath; ?>css/animate.css" rel="stylesheet">
	    <!-- language CSS -->
	    <link href="<?php echo $basepath; ?>css/language-select.css" rel="stylesheet">
	    <!-- owl.carousel CSS -->
	    <link href="<?php echo $basepath; ?>owl.carousel/assets/owl.carousel.css" rel="stylesheet">
		<!-- magnific-popup -->
    	<link href="<?php echo $basepath; ?>css/magnific-popup.css" rel="stylesheet">
    	<!-- Main menu -->
    	<link href="<?php echo $basepath; ?>css/menu.css" rel="stylesheet">
    	<!-- Template Common Styles -->
    	<link href="<?php echo $basepath; ?>css/template.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="<?php echo $basepath; ?>css/style.css" rel="stylesheet">
	    <!-- Responsive CSS -->
	    <link href="<?php echo $basepath; ?>css/responsive.css" rel="stylesheet">
        <link href="<?php echo $basepath; ?>quick.css" rel="stylesheet">

	    <script src="<?php echo $basepath; ?>js/vendor/modernizr-2.8.1.min.js"></script>
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

                <?php
               
                $path = ltrim($actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", '/');    
				$path = str_replace($basepath.'products/',"",$path);
				if(strlen($path)==0 || $path==$basepath.'products'){
					$sql = "select sn from l1 where status = 0 order by sn asc limit 1";
					$row = getdata($dbhost,$dbuser,$dbpassword,$dbname,$sql);
					for ($i=0; $i < count($row); $i++) { 
						$pa = $row[$i]["sn"];
						}
						echo '<script>window.location.replace("'.$basepath.'products/'.$pa.'");</script>';
					
				}
				if(substr($path, -1)=='/'){
					$path = substr($path, 0, -1);
				}
				$path = explode('/', $path);
                $pa = 0;
                if(count($path)==1) {
                   // select * from smbpl.l2 where l1=1 and status = 0 order by sn asc limit 1
				   $sql = "select sn from l2 where l1=".$path[0]." and status = 0 order by sn asc limit 1";
				   $row = getdata($dbhost,$dbuser,$dbpassword,$dbname,$sql);
				   for ($i=0; $i < count($row); $i++) { 
					$pa = $row[$i]["sn"];
					}
					echo '<script>window.location.replace("'.$basepath.'products/'.$path[0].'/'.$pa.'");</script>';
                   

                }

				

				

				

				$sql1 = "select * from l1 where sn=".$path[0]." and status = 0";
				$product_title = getdata($dbhost,$dbuser,$dbpassword,$dbname,$sql1);


				if(count($product_title)==0){

					$sql = "select sn from l1 where status = 0 order by sn asc limit 1";

					$row = getdata($dbhost,$dbuser,$dbpassword,$dbname,$sql);
					for ($i=0; $i < count($row); $i++) { 
					$pa = $row[$i]["sn"];
 }
 echo '<script>window.location.replace("'.$basepath.'products/'.$pa.'");</script>';
				}

				$sql2 = "select * from l2 where l1=".$path[0]." and status = 0 order by sn asc";

				$subproducts = getdata($dbhost,$dbuser,$dbpassword,$dbname,$sql2);

				if (strpos($path[1], 'search') !== false) { 
					$search = urldecode(explode('=', $path[1])[1]);
					$selectproducts = 'Your search "'.$search.'"';
					$sql5 = "select l.name, f.*  from l3 f join l2 l on l.sn = f.l2  where f.l1=".$path[0]." and f.keywords like '%".$search."%' and f.status = 0 order by f.sn asc";
					$productlist = getdata($dbhost,$dbuser,$dbpassword,$dbname,$sql5);
				}else{
					$sql3 = "select * from l2 where sn=".$path[1]." and status = 0 order by sn asc";
				    $s = getdata($dbhost,$dbuser,$dbpassword,$dbname,$sql3);
					if(count($s)!=0){
						$selectproducts = $s[0]['name'];
						$sql4 = "select * from l3 where l1=".$path[0]." and l2=".$path[1]." and status = 0 order by sn asc";
						$productlist = getdata($dbhost,$dbuser,$dbpassword,$dbname,$sql4);
					}else{
						$selectproducts = 'No Products';
						$productlist = [];
					}
				}

				?>

				
					<section class="page-title-section">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="page-header-wrap">
										<div class="page-header">
									   		<h1><?php echo $product_title[0]['name'];?> Product</h1>
									   	</div>
									   <ol class="breadcrumb">
										  <li><a href="<?php echo $basepath.'products/'.$path[0];?>"><?php echo $product_title[0]['name'];?></a></li>
										  <?php if(count($subproducts)!=0):?>
										  <li class="active"><?php echo $selectproducts;?></li>
										  <?php else: ?>
											<li class="active">No Products</li>
										 <?php endif;?>
										</ol>
									</div>
								</div>
							</div>
						</div>
					</section>

					<?php if(count($subproducts)!=0):?>
					<!-- Single-Service-Start -->
					<section class="single-service-contents">
						<div class="container">
							<div class="row">
								<div class="col-md-3 col-sm-5 col-xs-12">
									<div class="service-sidebar sidebar-wrapper">

									    <div class="widget">
									        <h2 class="widget-title">Other <?php echo $product_title[0]['name'];?> Products</h2>
								            <ul class="service-list" >    
												<?php
												for ($i=0; $i < count($subproducts); $i++) { 
													echo '<li><a href="'.$basepath.'products/'.$path[0].'/'.$subproducts[$i]['sn'].'" class="icon-trucking">'.$subproducts[$i]['name'].'</a></li>';
												}
												?>

												 <!-- <li><a href="textile_wetting.php" class="icon-trucking">Wetting Agents</a></li>
												 <li><a href="textile_lubricants.php" class="icon-trucking">Lubricants</a></li>
												 <li><a href="textile_levelling_sequestering.php" class="icon-trucking">Levelling & Sequestering Agents</a></li>
												 <li><a href="textile_pre_treatment.php" class="icon-trucking">Other pre-treatment additives</a></li>
												 <li><a href="textile_washing.php" class="icon-trucking">Washing off Agents</a></li>
												 <li><a href="textile_dye_fixing.php" class="icon-trucking">Dye Fixing Agents</a></li>
												 <li><a href="textile_softeners.php" class="icon-trucking">Softeners</a></li>
												 <li><a href="textile_silicone_softeners.php" class="icon-trucking">Silicone Softeners</a></li>
												 <li><a href="textile_polyester_dyeing.php" class="icon-trucking">Polyester Dyeing Chemicals</a></li>
												 <li><a href="textile_printing.php" class="icon-trucking">Printing Chemicals</a></li>
												 <li><a href="textile_enzymes.php" class="icon-trucking">Enzymes</a></li> -->
                                            </ul>
									    </div><!-- /.widget -->

									    <div class="widget">
									        <div class="download-wrap company">
									            <a href="#">Textile Brochure <span>Download</span><i class="fa fa-download"></i></a>
									        </div> <!-- /.download-wrap -->
									        <div class="download-wrap annual">
									            <a href="#">Textile TDS <span>Download</span><i class="fa fa-download"></i></a>
									        </div> <!-- /.download-wrap -->
									        <div class="download-wrap brochure">
									            <a href="#">Corporate Brochure <span>Download</span><i class="fa fa-download"></i></a>
									        </div> <!-- /.download-wrap -->
									    </div><!-- /.widget -->   
             
									</div><!-- /.sidebar-wrapper -->
								</div><!-- /.col -->
								
								
								
								
								
								<div class="col-md-9 col-sm-7 col-xs-12">
									<div class="single-service-content">

										<?php if(count($subproducts)!=0):?>
											<h2><?php echo $selectproducts;?></h2>
										  <?php else: ?>
											<h2>No Products</h2>
										 <?php endif;?>
										
										
										<?php
										if(count($productlist)==0){
											echo "<h3>No Products</h3>";
										}
										for ($i=0; $i < count($productlist); $i++) { 
											if(strpos($selectproducts, 'search') !== false) {
												echo '<h4>'.$productlist[$i]['name'].'</h4>';
											}
											echo '
											<h3>'.$productlist[$i]['items'].'</h3>
											<aside class=" widget widget_recent_entries">
											<div class="sidebar-tab">
											   <!-- Nav tabs -->
											   <ul class="nav nav-tabs" role="tablist">
												  <li class="active"><a href="#description'.$i.'" role="tab" data-toggle="tab">Description</a></li>
												  <li><a href="#salient-features'.$i.'" role="tab" data-toggle="tab">Salient Features</a></li>
												  <li><a href="#application'.$i.'" role="tab" data-toggle="tab">Application</a></li>
											   </ul>
											   <!-- Tab panes -->
											   <div class="tab-content">
												  <div class="tab-pane fade in active" id="description'.$i.'">
													 <ul class="tab-recent-post">
														<li>
														   <div class="tab-post-thumb">
															  <img class="img-responsive" src="'.$basepath.'img/blog/'.$productlist[$i]['desc_image'].'" alt="Image">
														   </div>
														   <div class="tab-post-heading">
															  <h3>'.$productlist[$i]['description'].'</h3>
														   </div>
														</li>
														<li>
														   <button type="button" class="btn btn-danger">Get Quote</button>  
														</li>
													 </ul>
												  </div>
												  <!-- /recent post tab -->
												  <div class="tab-pane fade" id="salient-features'.$i.'">
													 <ul class="tab-most-read">
														<li>
														   <div class="tab-post-heading">
															  '.$productlist[$i]['features'].'
														   </div>
														</li>
													 </ul>
												  </div>
												  <!-- /most read tab -->
												  <div class="tab-pane fade" id="application'.$i.'">
													 <ul class="tab-most-read">
														<li>
														   <div class="tab-post-heading">
														   '.$productlist[$i]['application'].'
															  
														   </div>
														</li>
													 </ul>
												  </div>
												  <!-- /most read tab -->
											   </div>
											</div>
											<!-- /tab-wrap -->
										 </aside>
											';
										}
										?>

										
                             
	
											
											
											
											
											
											
											
											
											
											
											
											
											
											</div><!-- /.col -->
									
										</div><!-- /.row -->
										
									</div><!-- /.single-service-content -->
									
								</div>
							</div><!-- /.row -->
						</div><!-- /.container -->
					</section>
					<?php endif;?>
					<!-- Single-Service-End-->

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
								<li class="active"><a href="marine.php">Marine transportation</a></li>
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
	    <script src="<?php echo $basepath; ?>js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="<?php echo $basepath; ?>js/bootstrap.min.js"></script>
	    <!-- owl.carousel -->
	    <script src="<?php echo $basepath; ?>owl.carousel/owl.carousel.min.js"></script>
	    <!-- Magnific-popup -->
		<script src="<?php echo $basepath; ?>js/jquery.magnific-popup.min.js"></script>
		<!-- Offcanvas Menu -->
		<script src="<?php echo $basepath; ?>js/hippo-offcanvas.js"></script>
		<!-- inview -->
		<script src="<?php echo $basepath; ?>js/jquery.inview.min.js"></script>
		<!-- stellar -->
		<script src="<?php echo $basepath; ?>js/jquery.stellar.js"></script>
		<!-- countTo -->
		<script src="<?php echo $basepath; ?>js/jquery.countTo.js"></script>
		<!-- classie -->
		<script src="<?php echo $basepath; ?>js/classie.js"></script>
		<!-- selectFx -->
		<script src="<?php echo $basepath; ?>js/selectFx.js"></script>
		<!-- sticky kit -->
		<script src="<?php echo $basepath; ?>js/jquery.sticky-kit.min.js"></script>
	    <!-- GOGLE MAP -->
	    <script src="https://maps.googleapis.com/maps/api/js"></script>
	    <!--TWITTER FETCHER-->
	    <script src="<?php echo $basepath; ?>js/twitterFetcher_min.js"></script>
	    <!-- Custom Script -->
	    <script src="<?php echo $basepath; ?>js/scripts.js"></script>
	</body>
</html>
