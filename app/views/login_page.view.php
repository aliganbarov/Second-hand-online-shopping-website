<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require_once('Partials/header.php');

?>

<div class="container">
<form class="form-horizontal col-md-5 col-md-offset-4" method="post" action="/login">
	<h2 class="text-center">Login Form</h2>
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