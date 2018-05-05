<?php
$product = $data[0];

require_once('partials/header.php');
?>

<div class="container">
<form class="form-horizontal col-md-5 col-md-offset-4" method="post" action="edit_product?id=<?= $product->id ?>" enctype="multipart/form-data">
	<h2 class="text-center">Product Form</h2>
	<div class="form-group">
		<label class="control-label col-sm-4" for="name">Name:</label>
		<div class="col-sm-8">
			<input name="name" required type="text" class="form-control" id="name" value="<?= $product->name ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="description">Description:</label>
		<div class="col-sm-8">
			<input name="description" required type="text" class="form-control" id="description" value="<?= $product->description ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4" for="stock_quantity">Stock Quantity:</label>
		<div class="col-sm-8">
			<input name="stock_quantity" required type="number" class="form-control" id="stock_quantity" value="<?= $product->stock_quantity ?>">
		</div>
	</div>

	<input name="product_type" hidden value="<?= $product->product_type ?>">

	<?php if (!empty($product->pet)):?>
		<div class='form-group'>
			<label class='control-label col-sm-4' for='gender'>Gender:</label>
			<select name='gender'>
				<option <?= $product->pet[0]->gender == 'Male' ? 'selected' : '' ?> >Male</option>
				<option <?= $product->pet[0]->gender == 'Female' ? 'selected' : '' ?> >Female</option>
			</select>
		</div>
		<div class='form-group'>
			<label class='control-label col-sm-4' for='breed'>Breed:</label>
			<div class='col-sm-8'>
				<input name='breed' required type='text' class='form-control' id='breed' value='<?= $product->pet[0]->breed ?>'>
			</div>
		</div>
		<div class='form-group'>
			<label class='control-label col-sm-4' for='age'>Age:</label>
			<div class='col-sm-8'>
				<input name='age' required type='number' class='form-control' id='age' value='<?= $product->pet[0]->age ?>'>
			</div>
		</div>
		<div class='form-group'>
			<label class='control-label col-sm-4' for='time_spent_with_owner'>Time Spent with Owner:</label>
			<div class='col-sm-8'>
				<input name='time_spent_with_owner' required type='number' class='form-control' id='time_spent_with_owner' value='<?= $product->pet[0]->time_spent_with_owner ?>'>
			</div>
		</div>
	<?php elseif (!empty($product->food)): ?>
		<div class='form-group'>
			<label class='control-label col-sm-4' for='type'>Type:</label>
			<div class='col-sm-8'>
				<input name='type' required type='text' class='form-control' id='type' value='<?= $product->food[0]->type_ ?>'>
			</div>
		</div>
		<div class='form-group'>
			<label class='control-label col-sm-4' for='time_of_preparation'>Time of Preparation:</label>
			<div class='col-sm-8'>
				<input name='time_of_preparation' required type='text' class='form-control' id='time_of_preparation' value='<?= $product->food[0]->time_of_preparation ?>'>
			</div>
		</div>
	<?php elseif (!empty($product->cloth)): ?>
		<div class='form-group'>
			<label class='control-label col-sm-4' for='size'>Size:</label><select name='size'>
				<option <?= $product->cloth[0]->size == 'XXS' ? 'selected' : '' ?>>XXS</option>
				<option <?= $product->cloth[0]->size == 'XS' ? 'selected' : '' ?>>XS</option>
				<option <?= $product->cloth[0]->size == 'S' ? 'selected' : '' ?>>S</option>
				<option <?= $product->cloth[0]->size == 'M' ? 'selected' : '' ?>>M</option>
				<option <?= $product->cloth[0]->size == 'L' ? 'selected' : '' ?>>L</option>
				<option <?= $product->cloth[0]->size == 'XL' ? 'selected' : '' ?>>XL</option>
				<option <?= $product->cloth[0]->size == 'XXL' ? 'selected' : '' ?>>XXL</option>
			</select>
		</div>
		<div class='form-group'>
			<label class='control-label col-sm-4' for='color'>Color:</label>
			<div class='col-sm-8'>
				<input name='color' required type='text' class='form-control' id='color' value='<?= $product->cloth[0]->color ?>'>
			</div>
		</div>
		<div class='form-group'>
			<label class='control-label col-sm-4' for='type'>Type:</label>
			<div class='col-sm-8'><input name='type' required type='text' class='form-control' id='type' value='<?= $product->cloth[0]->type_ ?>'>
			</div>
		</div>
		<div class='form-group'>
 			<label class='control-label col-sm-4' for='material'>Material:</label>
			<div class='col-sm-8'>
				<input name='material' required type='text' class='form-control' id='material' value='<?= $product->cloth[0]->material ?>'>
			</div>
 		</div>
	<?php endif; ?>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">Submit</button>
			<a href="my_products" class="btn btn-danger">Cancel</a>
		</div>
	</div>
</form>
</div>

