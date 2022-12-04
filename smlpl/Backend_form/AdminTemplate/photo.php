<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shri Meera Labs Pvt Ltd</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bluebg bg-blue">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">SMLPL Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
     
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                 
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                    
                           <a class="nav-link collapsed" href="homebanner.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Home page Top Banner
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
							<a class="nav-link collapsed" href="product.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Product Upload
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> <a class="nav-link collapsed" href="rd.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                R&D Page 
								<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> <a class="nav-link collapsed" href="career.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Career Post
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
								
                            </a> <a class="nav-link collapsed" href="photo.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Photo Gallery
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
								
								
                            </a> <a class="nav-link collapsed" href="video.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Video Gallery
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> 
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        RamaSundar | Logout
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 mb-4">Photo Gallery Page</h1>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-chart-area me-1"></i>
                                      Add Photos
                                    </div>
                                    <div class="card-body blacktext"><!-- Place Holder for Add Student-->  <form>
                            
									          <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="date" type="date" />  
                                                    <label for="date">Date of Post</label>                                               
                                                </div>
                                            </div>
                                       </div>
									   
									          <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control blacktext" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                   <label for="inputFirstName" class="blacktext">Photo Title</label>
                                                </div>
                                            </div>
                                       </div>
									   
									          <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control blacktext" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                   <label for="inputFirstName" class="blacktext">Photo Description</label>
                                                </div>
                                            </div>
                                       </div>
									   
							                    <div class="card mb-4">
                              
                                    <div class="card-body">
                              
                                    <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02">Photo Upload</label><br>
								    </div>
									<div class="text-muted">Image should be 1228px and 400 px in jpeg. Max size 250KB</div>
                                </div>
								</div>
                   
                   
                                       
                                    </form>
                                    </div>
                                </div>
								
								
								
                                <div class="card mb-4">
                              
                                    <div class="card-body">
                         
								<a class="btn btn-primary" href="superadmindashboard.php">Reset</a>
                                 <a class="btn btn-primary" href="superadmindashboard.php">Sumbit</a>  
                                </div>
								</div>
                               
                            </div>    <div class="col-xl-6">
                                
                            </div>
                        </div>
                   

                       </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; smlpl.com 2022</div><div class="text-muted">Powered By dreamscreen.co.in</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
