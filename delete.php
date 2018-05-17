<?php
	include "includes/header.php";
?>
	<main class="main">
		<div class="navigation-pane text-center pt-3">
			<h3 class="nav-title">Action</h3>
			<hr>
			<ul>
				<li><a href="index.html">New Admission <i class="fa fa-user-plus"></i></a></li>
				<li><a href="update-record.html">Update Record <i class="fa fa-edit"></i></a></li>
				<li><a href="fee-payment.html">Fee Payment <i class="fa fa-money"></i></a></li>
				<li><a href="search.html">Search <i class="fa fa-search"></i></a></li>
				<li><a href="attendance.html">View Attendance Record <i class="fa fa-calendar"></i></a></li>
				<li class="li-active"><a href="delete.html">Delete Record <i class="fa fa-times"></i></a></li>
				<li><a href="add-user.html">Add Users <i class="fa fa-user"></i></a></li>
				<li><a href="delete-user.html">Remove Users <i class="fa fa-user-times"></i></a></li>
			</ul>
		</div>
		<div class="content-area text-white">
			<div class="container pl-4 pb-5">
				<div class="row">
					<div class="col">
						<h3 class="text-center mb-5">Delete Record <i class="fa fa-times"></i></h3>
						<form>
							<div class="form-group">
								<label for="srno">Sr. No</label>
								<input type="text" placeholder="Sr. No" class="form-control" id="srno">
							</div>
								<div class="form-row">
									<div class="form-group col">
										<label for="firstName">First Name</label>
										<input type="text" placeholder="Enter First Name" class="form-control" id="firstName">
									</div>
									<div class="form-group col">
										<label for="middleName">Middle Name</label>
										<input type="text" placeholder="Enter Middle Name" class="form-control" id="middleName">
									</div>
									<div class="form-group col">
										<label for="lastName">Last Name</label>
										<input type="text" placeholder="Enter Last Name" class="form-control" id="lastName">
									</div>
								</div>
								<div class="form-group">
									<label for="Dob">Date of Birth</label>
									<input type="date" class="form-control" id="Dob">
								</div>
								<div class="form-group">
									<label for="inputAddress">Address</label>
									<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
								</div>
								<div class="form-group">
									<label for="inputAddress2">Address 2</label>
									<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputCity">City</label>
										<input type="text" class="form-control" placeholder="City" id="inputCity">
									</div>
									<div class="form-group col-md-6">
										<label for="state">State</label>
										<input type="text" class="form-control" id="state" placeholder="State">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col"><label for="phone1">Phone no</label>
										<input type="text" class="form-control" id="phone" placeholder="Phone no">
									</div>
									<div class="form-group col"><label for="phone2">Alternate Phone No</label>
										<input type="text" class="form-control" id="phone2" placeholder="Alternate Phone No">
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" placeholder="email@mail.com">
								</div>
								<div class="form-group">
									<label for="source">Reference</label>
									<input type="text" class="form-control" id="source" placeholder="source">
								</div>
								<div class="form-group">
									<label for="qualification">Qualification</label>
									<input type="text" class="form-control" id="qualification" placeholder="Qualification">
								</div>
								<div class="form-row">
									<div class="col">
										<div class="form-group">
											<label for="course">Course undertaking</label>
											<input type="text" class="form-control" id="course" placeholder="Course Undertaking">
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label for="courseDuration">Course Duration</label>
											<input type="text" class="form-control" id="courseDuration" placeholder="Course Duration">
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label for="batch">Batch Timing</label>
											<input type="text" class="form-control" id="batch" placeholder="Batch Timing">
										</div>
									</div>
								</div>
								<div class="form-row button-holder mt-3">
									<input type="submit" value="Delete" class="btn btn-outline-light ml-5">
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php
	include "includes/footer.php";
?>
