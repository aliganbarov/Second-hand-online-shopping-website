<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require_once('Partials/header.php');

?>

<div class="container" id="add_product_form">
<form class="form-horizontal col-md-5 col-md-offset-4" method="post" action="add_apartment" enctype="multipart/form-data">
	<h2 class="text-center">Apartment Form</h2>
	<div class="form-group">
		<label class="control-label col-sm-4" for="type">Type:</label>
		<div class="col-sm-8">
			<input name="type" required type="text" class="form-control" id="type" placeholder="Enter Type">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="no_of_rooms"># of Rooms:</label>
		<div class="col-sm-8">
			<input name="no_of_rooms" required type="number" class="form-control" id="no_of_rooms" placeholder="Enter # of Rooms">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="address">Address:</label>
		<div class="col-sm-8">
			<input name="address" required type="text" class="form-control" id="address" placeholder="Enter Address">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">Submit</button>
			<a href="/my_products" class="btn btn-danger">Cancel</a>
		</div>
	</div>
</form>
</div>

<?php require_once('partials/footer.php'); ?>