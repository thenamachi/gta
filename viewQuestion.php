<!DOCTYPE html>
<html lang="en" ng-app="appname">
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
        <link rel="stylesheet" href="dist/css/bootstrap.min.css" />			
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
		
    </head>
    <body class="sb-nav-fixed" ng-controller="studentsCtrl">
        <?php include('header.php'); ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include('sidebar.php'); ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 mb-4">View Question</h1>
						<div class="row">   
							
							<div class="row mb-12">
							<div class="col-md-2">
								<select class="form-control form-select-sm" id="stype" name="stype" ng-model="stype" required>
									<option value="">Choose Type</option>
									<option value="MCQ">MCQ</option>
									<option value="FID">FID</option>
								</select>
							</div>
							<div class="col-md-2">
								<select class="form-control form-select-sm" id="topic" name="topic" ng-model="topic" required>
									<option value="">Choose Topic</option>
									<option value="English">English</option>
									<option value="Maths">Maths</option>
									<option value="Science">Science</option>
									<option value="GK">GK</option>
							   </select>
							</div>
							<div class="col-md-2">
								<select class="form-control form-select-sm" id="level" name="level" ng-model="level" required>
									<option value="">Choose Level</option>
									<option value="Normal">Normal</option>
									<option value="Hard">Hard</option>
									<option value="Very Hard">Very Hard</option>
								</select>
							</div>
							<div class="col-md-2">
								<a class="btn btn-primary btn-block"  ng-click="getAllViewQuestion()">Submit</a>
							</div>
							<div class="col-md-2">
							</div>
							<div class="col-md-2">
							<input class="form-control" id="myInput" onkeyup="myFunction()" type="text" placeholder="Search Question" required/>
							</div>
							</div>
							
						</div>
						<div class="row"> 
						<br>
						</div>
                        <div class="row">   
							<div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-chart-bar me-1"></i>
                                      List of Question
                                    </div>
                                    <div class="card-body"><!--<canvas id="myBarChart" width="100%" height="40"></canvas>-->
                                    <table class="table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Question</th>
                                                <th>Option</th>
                                                <th>Answer</th>
												<th>Topic</th>
                                                <th>Level</th>
												 <th>View</th>
												<th>Edit</th>
												<th>Delete</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
											<!--<tr ng-repeat="Qus in ViewQuestion">-->
											<tr ng-repeat="Qus in filtered = (ViewQuestion | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                                                <td ng-bind="$index+1"></td>
												<td ng-bind="Qus.question"></td>
												<td ng-bind="Qus.options"></td>
												<td ng-bind="Qus.answer"></td>
												<td ng-bind="Qus.topic"></td>
												<td ng-bind="Qus.level"></td>
												<td><button type="button" class="btn-success" ng-click="ViewQusq(Qus.id)" data-toggle="modal" data-target="#viewStudentModal">View</button></td>
												<td><button type="button" class="btn-warning" ng-click="editQus(Qus)" data-toggle="modal" data-target="#editStudentModal">Edit</button></td>
												<td><button type="button" class="btn-primary" ng-click="deleteQus(Qus)" data-toggle="modal" data-target="#deleteStudentModal">Del</button></td>
                                            </tr>
                                            
                                        
                                        </tbody>
                                    </table>
										<div class="col-md-6 text-center" ng-show="filteredItems > 0">
											<ul uib-pagination boundary-links="true" boundary-link-numbers="true" ng-change="setPage(page)" max-size="maxSize" total-items="filtered.length" ng-model="page"  class="pagination-sm" previous-text="&lsaquo;" next-text="&rsaquo;" optionsfirst-text="&laquo;" last-text="&raquo;"></ul>
										</div>
									</div>
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
	
		
<div class="modal fade" id="deleteStudentModal" role="dialog">
	<div class="modal-dialog" role="document">
		<form class="form-horizontal" role="form">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="blue no-margin">Delete Question</h3>
					<button type="button" class="close font-20" data-dismiss="modal" aria-hidden="true">×</button>
					
				</div>
				<div class="modal-body">
					<br />
					<h5>&nbsp;&nbsp;Are you sure to delete this Question ? - {{ dStudent.Qid }} </h5>
					<br />					
					
				</div>
				<div class="modal-footer">
					<button class="no-border btn btn-xs btn-primary" ng-click="deleteQuestion()" data-toggle="modal" data-target="#deleteStudentModal">
						Yes
					</button>
					&nbsp;
					<button class="no-border btn btn-xs btn-primary" data-dismiss="modal">
						No
					</button>
				</div>
			</div><!-- /.modal-content -->
		</form>		
	</div><!-- /.modal-dialog -->
</div><!-- /.modal --> 

<div class="modal fade" id="viewStudentModal" role="dialog" style="50%">
	<div class="modal-dialog" role="document">
		<form class="form-horizontal" role="form">
			<div class="modal-content" style="width:1000px">
				<div class="modal-header">
					<h3 class="blue no-margin">View Question</h3>
				</div>
				<div class="modal-body">
					<table class="table">
					<tbody>
					<tr><td>Qno.{{ ViewQus.Vid }} </td><td>: </td><td colspan=2>{{ ViewQus.Vquestion }}</td></tr>				
					<tr><td>Option</td> <td>: </td><td><span ng-repeat="option in ViewQus.Vexp_imgsss">{{option}}</br></span></td><td><img src="uploads/{{ViewQus.Vque_image}}" align="right" ></td></tr>
					<tr><td>Answer</td> <td>:</td><td colspan=2>{{ ViewQus.Vanswer }}</td></tr>
					<tr><td>Level</td> <td>:</td><td colspan=2>{{ ViewQus.Vlevel }}</td></tr>
					<tr><td>Explanation</td> <td>: </td><td colspan=2>{{ ViewQus.Vexplanation }}</td></tr>
					<td colspan=3><img src="uploads/{{ViewQus.Vexp_img}}" align="right" ></td></tr>	
					</tbody>
					</table>
				</div>
				<div class="modal-footer">
				<button class="no-border btn btn-xs btn-primary" data-dismiss="modal">
						Close
					</button>
					
				</div>
			</div><!-- /.modal-content -->
		</form>		
	</div><!-- /.modal-dialog -->
</div><!-- /.modal --> 

<div class="modal fade" id="editStudentModal" role="dialog" style="50%">
	<div class="modal-dialog" role="document">
		<form class="form-horizontal" role="form">
			<div class="modal-content" style="width:600px">
				<div class="modal-header">
					<h3 class="blue no-margin">Edit Question</h3><button type="button" class="close font-20" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-chart-area me-1"></i>
                                      Add Question Details
                                    </div>
									
									<div class="card-body"><!-- Place Holder for Add Student-->  <form>
										<div class="row mb-3">	
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                   <select class="form-control form-select-sm" id="stype" name="stype" ng-model="EditQus.Estype" required>
                                                        <option value="">Choose</option>
                                                        <option value="MCQ">MCQ</option>
                                                        <option value="FID">FID</option>
                                                       </select><label for="type">Select Type</label> 
                                                </div>
                                            </div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <textarea class="form-control" id="question" name="question" type="text" ng-model="EditQus.Equestion"  rows="5" cols="200" style="height:150px;" required></textarea>
                                                    <label for="bName">Enter Question</label>
                                                </div>
                                            </div>                                        
                                        </div>
										<div class="row mb-3">
										<div class="col-md-12">
											<script type="text/ng-template" id="customTemplate.html">
												<a>
												  <span bind-html-unsafe= "match.label | typeaheadHighlight:query"></span>
												  <i>{{match.model.img_name }} | {{ match.model.img_path }} </i>
												</a>
											</script><div class="form-floating mb-3 mb-md-0">													
											<input type="text" id="images" name="images" class="form-control" data-validation="required" ng-model="EditQus.Eque_image" placeholder="Search Image" uib-typeahead="c as c.img_path for c in data1 | filter:$viewValue | limitTo:10" typeahead-min-length='1' typeahead-on-select='onSelectPart($item, $model, $label)' typeahead-template-url="customTemplate.html"><label for="bName">Search Image</label>
										</div>
										</div>
										</div>
										
										<div class="row mb-3">	
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                   <select class="form-control form-select-sm" id="type" name="type" ng-model="EditQus.Elevel" required>
                                                        <option value="">Choose</option>
                                                        <option value="Normal">Normal</option>
                                                        <option value="Hard">Hard</option>
														<option value="Very Hard">Very Hard</option>
                                                       </select><label for="course">Select Level</label> 
                                                </div>
                                            </div>
                                        </div>

										<div class="row mb-3">	
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                   <select class="form-control form-select-sm" id="topic" name="topic" ng-model="EditQus.Etopic" required>
                                                        <option value="">Choose</option>
                                                        <option value="English">English</option>
                                                        <option value="Maths">Maths</option>
														<option value="Science">Science</option>
														<option value="GK">GK</option>
                                                       </select><label for="course">Select Topic</label> 
                                                </div>
                                            </div>
                                        </div>											  
										<div class="row mb-3">										
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">													
													<input type="text" name="txt" id="txt" class="form-control" ng-model="EditQus.Eoptions" />
													<label for="Options">Options</label>
												</div>
                                            </div>                                        
                                        </div>
										
										<div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="Answer" name="Answer" type="text" ng-model="EditQus.Eanswer" placeholder="Enter Answer" required/>
                                                    <label for="Answer">Answer</label>
                                                </div>
                                            </div>                                        
                                        </div>
										
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="explain" name="explain" type="text" ng-model="EditQus.Eexplanation" placeholder="Enter Explanation" />
                                                    <label for="explain">Explanation</label>
                                                </div>
                                            </div>                                        
                                        </div>
										<div class="row mb-3">
										<div class="col-md-12">
											<script type="text/ng-template" id="customTemplate.html">
												<a>
												  <span bind-html-unsafe= "match.label | typeaheadHighlight:query"></span>
												  <i>{{match.model.img_name }} | {{ match.model.img_path }} </i>
												</a>
											</script><div class="form-floating mb-3 mb-md-0">													
											<input type="text" id="imgs" name="imgs" class="form-control" data-validation="required" ng-model="EditQus.Eans_image" placeholder="Search Image" uib-typeahead="c as c.img_path for c in data1 | filter:$viewValue | limitTo:10" typeahead-min-length='1' typeahead-on-select='onSelectPart($item, $model, $label)' typeahead-template-url="customTemplate.html"><label for="bName">Search Image</label>
										</div>
										</div>
										</div>
																		
                                        
                                        <div class="mt-1 mb-0">
											<div class="d-grid"><a class="btn btn-primary btn-block"  ng-click="UpdateQuestion(EditQus)" data-toggle="modal" data-target="#editStudentModal">Add Question</a></div>
                                        </div>
                                    </div>
								
                                </div>
				</div>
				<div class="modal-footer">
					<button class="no-border btn btn-xs btn-primary" data-dismiss="modal">
						Close
					</button>
				</div>
			</div><!-- /.modal-content -->
		</form>		
	</div><!-- /.modal-dialog -->
</div><!-- /.modal --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 		
		<script src="dist/js/jquery-2.1.4.min.js"></script>
		<script src="dist/js/bootstrap-3.3.6.min.js"></script> 
		<script src="dist/js/angular.min.js"></script>
		<script src="dist/js/ui-bootstrap-tpls-0.14.3.js"></script>	
		
		<script src="dist/customjs/viewQuestion.js"></script>
		
    </body>
</html>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<!-- inline scripts related to this page --> 

