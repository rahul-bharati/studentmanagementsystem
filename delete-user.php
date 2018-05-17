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
				<li><a href="delete.html">Delete Record <i class="fa fa-times"></i></a></li>
				<li><a href="add-user.html">Add Users <i class="fa fa-user"></i></a></li>
				<li class="li-active"><a href="delete-user.html">Remove Users <i class="fa fa-user-times"></i></a></li>
			</ul>
		</div>
		<div class="content-area text-white">
			<div class="container pl-4 pb-5">
				<div class="row">
					<div class="col">
						<h3 class="text-center mb-5">Remove Users <i class="fa fa-user-times"></i></h3>
						<div class="user-div">
							<form>
								<div class="form-group">
									<label for="username">User Name</label>
									<input type="text" placeholder="User Name" id="username" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="type">User Type</label>
									<select id="type" class="form-control">
										<option>--Select--</option>
										<option value="admin">Admin</option>
										<option value="staff">Staff</option>
									</select>
								</div>
								<div class="form-row button-holder mt-3">
									<input type="submit" value="Add User" class="btn btn-outline-light ml-5">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php
	include "includes/footer.php";
?>
