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
            <a class="navbar-brand ps-3" href="login.php">Galaxy Examination </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <select class="form-control form-select-sm" id="course" >
                       <option>KDM</option>
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body bg-secondary text-white">Students</div>
                                    <div class="m-2">
                                        <div class="d-flex text-white">
                                        <div class="small d-flex flex-column bg-primary  m-1 flex-fill rounded  text-center"> <span class="articles">Total</span> <span class="number1">1000</span> </div>
                                        <div class="small d-flex flex-column bg-danger  m-1 rounded flex-fill text-center"> <span class="followers">On Roll</span> <span class="number2">600</span> </div>
                                        <div class="small d-flex flex-column bg-success m-1 flex-fill rounded text-center"> <span class="rating">Follow up</span> <span class="number3"></span> 200</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body bg-warning">Employees </div>
                                    <div class="m-2">
                                        <div class="d-flex text-white">
                                        <div class="small d-flex flex-column bg-primary  m-1 flex-fill rounded  text-center"> <span class="articles">Total </span> <span class="number1">100</span> </div>
                                        <div class="small d-flex flex-column bg-danger  m-1 rounded flex-fill text-center"> <span class="followers">Faculty</span> <span class="number2">50</span> </div>
                                        <div class="small d-flex flex-column bg-success m-1 flex-fill rounded text-center"> <span class="rating">Counsellors</span> <span class="number3">50</span> </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body bg-success text-white" >Batches</div>
                                    <div class="m-2">
                                        <div class="d-flex text-white">
                                        <div class="small d-flex flex-column bg-primary  m-1 flex-fill rounded  text-center"> <span class="articles">Total </span> <span class="number1">100</span> </div>
                                        <div class="small d-flex flex-column bg-danger  m-1 rounded flex-fill text-center"> <span class="followers">Regular</span> <span class="number2">50</span> </div>
                                        <div class="small d-flex flex-column bg-success m-1 flex-fill rounded text-center"> <span class="rating">Part Time</span> <span class="number3">50</span> </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body bg-danger text-white">Courses</div>
                                    <div class="m-2">
                                        <div class="d-flex text-white">
                                        <div class="small d-flex flex-column bg-primary  m-1 flex-fill rounded  text-center"> <span class="articles">Total </span> <span class="number1">38</span> </div>
                                        <div class="small d-flex flex-column bg-danger  m-1 rounded flex-fill text-center"> <span class="followers">Programs</span> <span class="number2">980</span> </div>
                                        <div class="small d-flex flex-column bg-success m-1 flex-fill rounded text-center"> <span class="rating">Pthers</span> <span class="number3">8.9</span> </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-search me-1"></i>
                                       List of Batches
                                    </div>
                                    <div class="card-body"><!--<canvas id="myAreaChart" width="100%" height="40"></canvas>--> 
                                        <table class="table-striped" id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Batch Id</th>
                                                    <th>Faculty</th>
                                                    <th>Course</th>
                                                    <th>Enrolled</th>
                                                    <th>Start date</th>
                                                    <th>End Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                       
                                            <tbody>
                                                <tr>
                                                    <td>6.00-7.00am</td>
                                                    <td>Jayakumar</td>
                                                    <td>GRE</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>2011/08/25</td>
                                                    <td> <a class="btn btn-warning btn-sm" href="#"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>7.00-8.00am</td>
                                                    <td>Namachivayam</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                     <td>2011/08/25</td>
                                                     <td> <a class="btn disabled btn-secondary btn-sm" href="#"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>GRE</td>
                                                    <td>Jayakumar</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                     <td>2011/08/25</td>
                                                     <td> <a class="btn disabled btn-secondary btn-sm" href="#"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>GRE</td>
                                                    <td>Namachivayam</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                     <td>2011/08/25</td>
                                                     <td> <a class="btn" href="#"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>GRE</td>
                                                    <td>Jayakumar</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                     <td>2011/08/25</td>
                                                      <td> <a class="btn btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>GRE</td>
                                                    <td>Namachivayam</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                     <td>2011/08/25</td>
                                                      <td> <a class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>GRE</td>
                                                    <td>Jayakumar</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                     <td>2011/08/25</td>
                                                      <td> <a class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>GRE</td>
                                                    <td>Namachivayam</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>2011/08/25</td>
                                                     <td> <a class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>GRE</td>
                                                    <td>Jayakumar</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                     <td>2011/08/25</td>
                                                      <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>GRE</td>
                                                    <td>Namachivayam</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                     <td>2011/08/25</td>
                                                      <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>GRE</td>
                                                    <td>Jayakumar</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                     <td>2011/08/25</td>
                                                      <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>GRE</td>
                                                    <td>Namachivayam</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                     <td>2011/08/25</td>
                                                      <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>GRE</td>
                                                    <td>Jayakumar</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                     <td>2011/08/25</td>
                                                      <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>GRE</td>
                                                    <td>Namachwwwivayam</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                     <td>2011/08/25</td>
                                                     <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-search me-1"></i></a></td>
                                                </tr>
                                            </var>
                                            </tbody>
                                        </table></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Recent Courses
                                    </div>
                                    <div class="card-body"><!--<canvas id="myBarChart" width="100%" height="40"></canvas>-->  <table class="table-striped" id="datatablesSimple1">
                                        <thead>
                                            <tr>
                                                <th>Batch Id</th>
                                                <th>Faculty</th>
                                                <th>Course</th>
                                                <th>Enrolled</th>
                                                <th>Start date</th>
                                                <th>End Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                   
                                        <tbody>
                                            <tr>
                                                <td>6.00-7.00am</td>
                                                <td>Jayakumar</td>
                                                <td>GRE</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>2011/08/25</td>
                                                <td> <a class="btn btn-warning btn-sm"  href="#">Text</a></td>
                                            </tr>
                                           
                                            <tr>
                                                <td>GRE</td>
                                                <td>Namachivayam</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                 <td>2011/08/25</td>
                                                 <td> <a class="btn btn-sm" href="#"><i class="fas fa-search me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Jayakumar</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                 <td>2011/08/25</td>
                                                  <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fas fa-search me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Namachivayam</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                 <td>2011/08/25</td>
                                                  <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fas fa-search me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Jayakumar</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                 <td>2011/08/25</td>
                                                  <td> <a class="btn btn-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fas fa-search me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Namachivayam</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>2011/08/25</td>
                                                 <td> <a class="btn btn-info btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fas fa-search me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>7.00-8.00am</td>
                                                <td>Namachivayam</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                 <td>2011/08/25</td>
                                                 <td> <a class="btn disabled btn-secondary" ><i class="fas fa-search me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Jayakumar</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                 <td>2011/08/25</td>
                                                 <td> <a class="btn disabled btn-secondary " ><i class="fas fa-search me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Jayakumar</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                 <td>2011/08/25</td>
                                                  <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fas fa-search me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Namachivayam</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                 <td>2011/08/25</td>
                                                  <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fas fa-search me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Jayakumar</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                 <td>2011/08/25</td>
                                                  <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fas fa-search me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Namachivayam</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                 <td>2011/08/25</td>
                                                  <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fas fa-search me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Jayakumar</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                 <td>2011/08/25</td>
                                                  <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fas fa-search me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>GRE</td>
                                                <td>Namachwwwivayam</td>
                                                <td>System Architect</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                 <td>2011/08/25</td>
                                                 <td> <a class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fas fa-search me-1"></i></a></td>
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

        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModal">View Batch</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card mb-1">
                <div class="card-body bg-secondary text-white">Batch 001</div>
                <div class="m-1">
                    <div class="d-flex">
                        <table class="table table-bordered">
                            
                       
                            <tbody>
                                <tr>
                                    <td>Batch Code</td>
                                    <td>B001</td>
                                </tr>
                                <tr>
                                    <td>Course</td>
                                    <td>IELTS</td>
                                </tr>
                                <tr>
                                    <td>Incharge</td>
                                    <td>Jayakumar</td>
                                </tr>
                                <tr>
                                    <td>No of Students</td>
                                    <td>30</td>
                                </tr>
                                
                                <tr>
                                    <td>Start Date</td>
                                    <td>01-01-2022</td>
                                </tr>
                                <tr>
                                    <td>End Date</td>
                                    <td>31-03-2022</td>
                                </tr>
                                <tr>
                                    
                                    <td>Timings</td>
                                    <td>7.00-8.00am</td>
                                </tr></tbody></table>
                </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <!--<button type="button" class="btn btn-danger">Save changes</button>-->
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModal">View Course</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card mb-1">
                <div class="card-body bg-secondary text-white">Course - IELTS</div>
                <div class="m-1">
                    <div class="d-flex">
                        <table class="table table-bordered">
                            
                       
                            <tbody>
                                <tr>
                                    <td>Course Code</td>
                                    <td>IELTS</td>
                                </tr>
                                <tr>
                                    <td>Incharge</td>
                                    <td>Jayakumar</td>
                                </tr>
                                <tr>
                                    <td>No of Students</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Other Heads</td>
                                    <td>Some Text</td>
                                </tr>
                            </tbody></table>
                </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <!--<button type="button" class="btn btn-danger">Save changes</button>-->
        </div>
      </div>
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
