<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require_once('Partials/header.php');

?>

<div class="container">
<form class="form-horizontal col-md-5 col-md-offset-4" method="post" action="product_save" enctype="multipart/form-data">
	<h2 class="text-center">Product Form</h2>
	<div class="form-group">
		<label class="control-label col-sm-4" for="name">Name:</label>
		<div class="col-sm-8">
			<input name="name" required type="text" class="form-control" id="name" placeholder="Enter Name">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="description">Description:</label>
		<div class="col-sm-8">
			<input name="description" required type="text" class="form-control" id="description" placeholder="Enter Description">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="stock_quantity">Stock Quantity:</label>
		<div class="col-sm-8">
			<input name="stock_quantity" required type="number" class="form-control" id="stock_quantity" placeholder="Enter Stock Quantity">
		</div>
	</div>

	<label class="control-label col-sm-4">Picture</label>
	<input type="file" name="picture">
	<br>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">Submit</button>
			<a href="" class="btn btn-danger">Cancel</a>
		</div>
	</div>
</form>
</div>