<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Galaxy Exam Portal</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Galaxy Examination </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                   <select class="form-control form-select-sm" id="course" >
                       ß <option>KDM</option>
                        <option>OMR</option>
                     
                      </select>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
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
                           <a class="nav-link" href="superadmindashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#studentModule" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Student Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="studentModule" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="addStudent.php">Add Student</a>
                                    <a class="nav-link" href="studentEnrollment.php">Manage Student</a>
                                    <a class="nav-link" href="studentdetails.php">Manage Student</a>
                              </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#staffModule" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Staff Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="staffModule" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="addEmployee.php">Add Employee</a>
                                    <a class="nav-link" href="staffdetails.php">Manage Employee</a>
                              </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                              Create Masters
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                       Batches
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="addBatches.php">Create Batch</a>
                                            <a class="nav-link" href="batchDetails.php">Manage Batch</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                       Courses
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="addCourse.php">Create Courses</a>
                                            <a class="nav-link" href="404.php">Manage Courses</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#ExamModule" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Examinations
                                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                     </a>
                                     <div class="collapse" id="ExamModule" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                         <nav class="sb-sidenav-menu-nested nav">
                                             <a class="nav-link" href="#">Create Exams</a>
                                             <a class="nav-link" href="#">Manage Exams</a>
                                         </nav>
                                     </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Reports</div>
                            <a class="nav-link" href="reports.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-search"></i></div>
                                Exam Report
                            </a>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Namasivayam
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 mb-4">Employee</h1>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-chart-area me-1"></i>
                                      Add Employee Details
                                    </div>
                                    <div class="card-body"><!-- Place Holder for Add Student-->  <form>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                    <label for="inputFirstName">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                    <label for="inputLastName">Last name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="phoneNumber" type="text" placeholder="Enter your Mobile Number" />
                                                    <label for="inputFirstName">Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="phoneNumber" type="text" placeholder="Enter your Mobile Number" />
                                                    <label for="inputFirstName">Secondary Mobile Number</label>
                                                </div>
                                            </div>
                                        </div>
                                   
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="date" type="date" />  
                                                    <label for="date">Date of Birth</label>   
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                    <label for="inputEmail">Email address</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <select class="form-control form-select-sm" id="course" >
                                                        <option>Choose</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                     
                                                      </select><label for="course">Gender</label> 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select class="form-control form-select-sm" id="course" >
                                                        <option>Choose</option>
                                                        <option>Full Time</option>
                                                        <option>Part Time</option>
                                                     
                                                      </select>
                                                      <label for="course">Job Type</label> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="date" type="date" />  
                                                    <label for="date">Joing Date</label>    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                    <label for="inputLastName">Designation</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select class="form-control form-select-sm" id="course" >
                                                        <option>Choose</option>
                                                        <option>Employee 1</option>
                                                        <option>Employee 2</option>
                                                     
                                                      </select>
                                                      <label for="course">Reporting </label> 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select class="form-control form-select-sm" id="course" >
                                                        <option>Choose</option>
                                                        <option>KDM</option>
                                                        <option>OMR</option>
                                                     
                                                      </select>
                                                      <label for="course">Center </label> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                    <label for="inputLastName">Enter Aadhar Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select class="form-control form-select-sm" id="course" >
                                                        <option>Choose</option>
                                                        <option>Counsellor</option>
                                                        <option>Faculty</option>
                                                        <option>Counsellor</option>
                                                        <option>Sales</option>
                                                        <option>Others</option>
                                                     
                                                      </select>
                                                      <label for="course">Choose Employee Type </label> 
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text bg-info" for="inputGroupFile02">Upload photo</label>
                                                  </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text bg-info" for="inputGroupFile02">Upload Aadhar</label>
                                                  </div>
                                            </div>
                                            <span class="small text-danger" >Note: Image should be less than 25kb. Only JPG, PNG format allowed</span>
                                        </div>
                                      
                                       
                                        <div class="mt-1 mb-0">
                                            <div class="d-grid"><a class="btn btn-warning btn-block" href="#">Add Employee</a></div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-chart-bar me-1"></i>
                                       Bulk Upload
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3"><a class="btn btn-success" href="superadmindashboard.php">Download Sample Excel File</a></div>
                                    <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                  </div>
                                </div></div>
                               
                            </div>    <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-chart-bar me-1"></i>
                                       Employee List
                                    </div>
                                    <div class="card-body"><!--<canvas id="myBarChart" width="100%" height="40"></canvas>--><table id="datatablesSimple1">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Header1</th>
                                                <th>Header2</th>
                                                <th>Header3</th>
                                                <th>Header4</th>
                                                <th>Header2</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Faculty</th>
                                                <th>Course</th>
                                                <th>Enrolled</th>
                                                <th>Start date</th>
                                                <th>End Date</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Jayakumar</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Namachivayam</td>
                                                <td>System Architect</td>
                                                <td>120</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Jayakumar</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Namachivayam</td>
                                                <td>System Architect</td>
                                                <td>35</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Jayakumar</td>
                                                <td>System Architect</td>
                                                <td>75</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Namachivayam</td>
                                                <td>System Architect</td>
                                                <td>85</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Jayakumar</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Namachivayam</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Jayakumar</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Namachivayam</td>
                                                <td>System Architect</td>
                                                <td>25</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Jayakumar</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Namachivayam</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Jayakumar</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Namachivayam</td>
                                                <td>System Architect</td>
                                                <td>45</td>
                                                <td>2011/04/25</td>
                                                <td>2011/06/25</td>
                                            </tr>
                                        </var>
                                        </tbody>
                                    </table></div>
                                </div>
                            </div>
                        </div>
                   

                       </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Galaxytraining.in 2021</div><div class="text-muted">Powered By dreamscreen.co.in</div>
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
