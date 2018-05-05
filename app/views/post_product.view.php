<?php

require_once('partials/header.php');

?>

<div class="container" id="add_product_form">
<form class="form-horizontal col-md-5 col-md-offset-4" method="post" action="post_product?id=<?= $_GET["id"] ?>" enctype="multipart/form-data">
	<h2 class="text-center">Post Form</h2>
	<div class="form-group">
		<label class="control-label col-sm-4" for="name">Region:</label>
		<div class="col-sm-8">
			<input name="region" required type="text" class="form-control" id="region" placeholder="Enter Region">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="description">Duration (in days):</label>
		<div class="col-sm-8">
			<input name="duration" required type="number" class="form-control" id="duration" placeholder="Enter Duration">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="description">Price (in tl):</label>
		<div class="col-sm-8">
			<input name="price" required type="number" step="0.01" class="form-control" id="price" placeholder="Enter Price">
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