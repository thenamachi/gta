<nav class="navbar navbar-default" role="navigation">
							
							<div class="container mainnav">
								<div class="navbar-header">
									<h1 class="logo"><a href="<?php echo $basepath; ?>index.php"><img src="img/logo.png" alt=""></a></h1>

									<!-- offcanvas-trigger -->
			                        <button type="button" class="navbar-toggle collapsed pull-right" >
			                          <span class="sr-only">Toggle navigation</span>
			                          <i class="fa fa-bars"></i>
			                        </button>

								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-collapse">

									

					                <!--<span class="search-button pull-right"><a href="#search"><i class="fa fa-search"></i></a></span>-->

									<ul class="nav navbar-nav navbar-right">
										<!-- Home -->
                                        
                                        <li class="dropdown active"><a href="<?php echo $basepath; ?>index.php">Home </a>
                               
                                        </li>
                                        <!-- /Home -->

                                        <!-- Pages -->
                                        <li class="dropdown"><a href="#">About us <span class="fa fa-angle-down"></span></a>
                                            <!-- submenu-wrapper -->
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="<?php echo $basepath; ?>about.php">Shri Meera Labs</a></li>
                                                        <li><a href="<?php echo $basepath; ?>service.php">Vision & Mission</a></li>
                                                        <li><a href="<?php echo $basepath; ?>quality_policy.php">Quality Policy</a></li>
                                                        <li><a href="<?php echo $basepath; ?>certification.php">Certifications & Associations</a></li>
                                                     
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /submenu-wrapper -->
                                        </li>
                                        <!-- /Pages -->

                                        <!-- Services -->
                                        <li class="dropdown"><a href="#">Products <span class="fa fa-angle-down"></span></a>
                                            <!-- submenu-wrapper -->
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                        <?php
                                                                                                            $mysqli = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

                                                                                                            // Check connection
                                                                                                            if ($mysqli -> connect_errno) {
                                                                                                              echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                                                                              exit();
                                                                                                            }
                                                                                                            $sql = "select * from l1 l where status = 0";
$result = $mysqli -> query($sql);
$products= $result -> fetch_all(MYSQLI_ASSOC);
for ($i=0; $i < count($products ); $i++) { 
    echo '<li><a href="'.$basepath."products/".$products[$i]["sn"].'">'.$products[$i]["name"].'</a></li>';
}
$mysqli->close();

                                                        ?>


                                                    	<!-- <li><a href="textile_wetting.php">Textile Chemicals</a></li>
                                                        <li><a href="leather_feel_modifiers.php">Leather Chemicals</a></li>
                                                        <li><a href="agro_wetting_spreading.php">Agro</a></li>
                                                        <li><a href="construction_water_proofing.php">Construction</a></li>
                                                        <li><a href="detergent.php">Detergent</a></li>
                                                        <li><a href="paint_defoamers.php">Paint & Printing Inks</a></li>
														<li><a href="paper.php">Paper</a></li>
														<li><a href="rubber.php">Rubber</a></li>
														<li><a href="filaments.php">Filaments</a></li>
														<li><a href="wopper.php">Wopper</a></li>
														<li><a href="unique_products.php">Unique Products</a></li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /submenu-wrapper -->
                                        </li>
                                       
                                      <li><a href="<?php echo $basepath; ?>chemical_tolling.php">Chemicals Tolling</a></li>
                                        <li class="dropdown"><a href="#">Gallery <span class="fa fa-angle-down"></span></a>
                                            <!-- submenu-wrapper -->
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="<?php echo $basepath; ?>photos.php">Photos</a></li>
                                                        <li><a href="<?php echo $basepath; ?>videos.php">Videos</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /submenu-wrapper -->
                                        </li>
										<li><a href="careers.php">Careers</a></li>
											<li><a href="https://sso.godaddy.com/login?app=email&realm=pass.php">Employee login</a></li>
											
													<li><a href="<?php echo $basepath; ?>contact.php">contact</a></li>
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.container -->

							
						</nav>