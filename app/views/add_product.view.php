<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require_once('Partials/header.php');

?>

<div class="container" id="add_product_form">
<form class="form-horizontal col-md-5 col-md-offset-4" method="post" action="add_product" enctype="multipart/form-data">
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
		<label class="control-label col-sm-4" for="product_type">Product Type:</label>
		<select id="product_type" required name="product_type">
			<option value="">--Select--</option>
			<option value="pet" id="pet">Pet</option>
			<option value="food" id="food">Food</option>
			<option value="Cloth" id="cloth">Cloth</option>
		</select>
	</div>

	<div id="additional_fields">
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">Submit</button>
			<a href="/my_products" class="btn btn-danger">Cancel</a>
		</div>
	</div>
</form>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#product_type').on('change', function(){
        	$('#additional_fields').empty();
        	var selected_item = this[this.selectedIndex].id;
        	if (selected_item == 'pet') {
        		$('#additional_fields').append(genderForm);
        		$('#additional_fields').append(breedForm);
        		$('#additional_fields').append(ageForm);
        		$('#additional_fields').append(timeForm);
        	} else if (selected_item == 'food') {
        		$('#additional_fields').append(typeForm);
        		$('#additional_fields').append(prepForm);
        	} else if (selected_item == 'cloth') {
        		$('#additional_fields').append(sizeForm);
        		$('#additional_fields').append(colorForm);
        		$('#additional_fields').append(clothTypeForm);
        		$('#additional_fields').append(material);
        	}
        });
    });
    var genderForm = "<div class='form-group'><label class='control-label col-sm-4' for='gender'>Gender:</label><select name='gender'><option>Male</option><option>Female</option></select></div>";
    var breedForm = "<div class='form-group'><label class='control-label col-sm-4' for='breed'>Breed:</label><div class='col-sm-8'><input name='breed' required type='text' class='form-control' id='breed' placeholder='Enter Breed'></div></div>";
    var ageForm = "<div class='form-group'><label class='control-label col-sm-4' for='age'>Age:</label><div class='col-sm-8'><input name='age' required type='number' class='form-control' id='age' placeholder='Enter Age'></div></div>";
    var timeForm = "<div class='form-group'><label class='control-label col-sm-4' for='time_spent_with_owner'>Time Spent with Owner:</label><div class='col-sm-8'><input name='time_spent_with_owner' required type='number' class='form-control' id='time_spent_with_owner' placeholder='Enter Time Spent with Owner'></div></div>";

 	var typeForm = "<div class='form-group'><label class='control-label col-sm-4' for='type'>Type:</label><div class='col-sm-8'><input name='type' required type='text' class='form-control' id='type' placeholder='Enter Type'></div></div>";
 	var prepForm = "<div class='form-group'><label class='control-label col-sm-4' for='time_of_preparation'>Time of Preparation:</label><div class='col-sm-8'><input name='time_of_preparation' required type='text' class='form-control' id='time_of_preparation' placeholder='Enter Time of Preparation'></div></div>";

 	var sizeForm = "<div class='form-group'><label class='control-label col-sm-4' for='size'>Size:</label><select name='size'><option>XXS</option><option>XS</option><option>S</option><option>M</option><option>L</option><option>XL</option><option>XXL</option></select></div>";
 	var colorForm = "<div class='form-group'><label class='control-label col-sm-4' for='color'>Color:</label><div class='col-sm-8'><input name='color' required type='text' class='form-control' id='color' placeholder='Enter Color'></div></div>";
 	var clothTypeForm = "<div class='form-group'><label class='control-label col-sm-4' for='type'>Type:</label><div class='col-sm-8'><input name='type' required type='text' class='form-control' id='type' placeholder='Enter Type'></div></div>";
 	var material = "<div class='form-group'><label class='control-label col-sm-4' for='material'>Material:</label><div class='col-sm-8'><input name='material' required type='text' class='form-control' id='material' placeholder='Enter Material'></div></div>";

</script>

<?php require_once('partials/footer.php'); ?>