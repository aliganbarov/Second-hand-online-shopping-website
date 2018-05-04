<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require_once('Partials/header.php');

?>
<div class="container">
<form class="form-horizontal col-md-5 col-md-offset-4" method="post" action="register">
	<h2 class="text-center">New User</h2>
	<div class="form-group">
		<label class="control-label col-sm-4" for="name">Name:</label>
		<div class="col-sm-8">
			<input required type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
		</div>
	</div>
	
	<div class="form-group">
		<label class="control-label col-sm-4" for="phone_number">Phone Number:</label>
		<div class="col-sm-8">
			<input name="phone_number" required type="tel" class="form-control" id="phone_number" placeholder="Enter Phone Number">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="location">Location:</label>
		<div class="col-sm-8">
			<input name="location" required type="text" class="form-control" id="location" placeholder="Enter Location">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="address">Address:</label>
		<div class="col-sm-8">
			<input name="address" type="text" class="form-control" id="address" placeholder="Enter Address">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="occupation">Occupation:</label>
		<div class="col-sm-8">
			<input name="occupation" type="text" class="form-control" id="occupation" placeholder="Enter Occupation">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="dob">Date of Birth:</label>
		<div class="col-sm-8">
			<input name="dob" type="date" class="form-control" id="dob" placeholder="Enter Date of Birth">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="email">Email:</label>
		<div class="col-sm-8">
			<input name="email" required type="email" class="form-control" id="email" placeholder="Enter Email">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="password">Password:</label>
		<div class="col-sm-8">
			<input name="password" required type="password" class="form-control" id="password" placeholder="Enter Password">
		</div>
	</div>


	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">Submit</button>
			<a href="/" class="btn btn-danger">Cancel</a>
		</div>
	</div>
</form>
</div>

