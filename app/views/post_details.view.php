<?php
$post = $data[0];
$post->user = $post->user[0];

require_once("partials/header.php");

?>
<div class="container">
	<div class="row col-md-8 col-md-offset-2 text-center">
		<img class="img-thumbnail img-responsive" style="height:200px" src="<?= $post->product[0]->picture ?>">
	</div>
	<div class="row">
		<table class="table-bordered table-responsive table-hover col-md-8 col-md-offset-2">
			<tr>
				<th class="col-md-2 text-center">User</th>
				<td class="text-center"><a href="#"><?= $post->user->name ?></a></td>
			</tr>
			<tr>
				<th class="col-md-2 text-center">Contact</th>
				<td class="text-center"><?= $post->user->phone_number ?></td>
			</tr>
			<tr>
				<th class="col-md-2 text-center">Region</th>
				<td class="text-center"><?= $post->region ?></td>
			</tr>
			<tr>
				<th class="col-md-2 text-center">Price</th>
				<td class="text-center"><?= $post->price ?> TL</td>
			</tr>
			
			<?php if (!empty($post->product)): ?>
				<tr>
					<th class="col-md-2 text-center">Name</th>
					<td class="text-center"><?= $post->product[0]->name ?></td>
				</tr>
				<tr>
					<th class="col-md-2 text-center">Description</th>
					<td class="text-center"><?= $post->product[0]->description ?></td>
				</tr>
				<tr>
					<th class="col-md-2 text-center">Stock Quantity</th>
					<td class="text-center"><?= $post->product[0]->stock_quantity ?></td>
				</tr>
				<?php if (!empty($post->product[0]->pet)): ?>
					<tr>
						<th class="col-md-2 text-center">Gender</th>
						<td class="text-center"><?= $post->product[0]->pet[0]->gender ?></td>
					</tr>
					<tr>
						<th class="col-md-2 text-center">Breed</th>
						<td class="text-center"><?= $post->product[0]->pet[0]->breed ?></td>
					</tr>
					<tr>
						<th class="col-md-2 text-center">Age</th>
						<td class="text-center"><?= $post->product[0]->pet[0]->age ?></td>
					</tr>
					<tr>
						<th class="col-md-2 text-center">Time Spent with Owner</th>
						<td class="text-center"><?= $post->product[0]->pet[0]->time_spent_with_owner ?></td>
					</tr>
				<?php elseif (!empty($post->product[0]->food)): ?>
					<tr>
						<th class="col-md-2 text-center">Type</th>
						<td class="text-center"><?= $post->product[0]->food[0]->type_ ?></td>
					</tr>
					<tr>
						<th class="col-md-2 text-center">Time of Preparation</th>
						<td class="text-center"><?= $post->product[0]->food[0]->time_of_preparation ?></td>
					</tr>
				<?php elseif (!empty($post->product[0]->cloth)): ?>
					<tr>
						<th class="col-md-2 text-center">Size</th>
						<td class="text-center"><?= $post->product[0]->cloth[0]->size ?></td>
					</tr>
					<tr>
						<th class="col-md-2 text-center">Color</th>
						<td class="text-center"><?= $post->product[0]->cloth[0]->color ?></td>
					</tr>
					<tr>
						<th class="col-md-2 text-center">Type</th>
						<td class="text-center"><?= $post->product[0]->cloth[0]->type_ ?></td>
					</tr>
					<tr>
						<th class="col-md-2 text-center">Material</th>
						<td class="text-center"><?= $post->product[0]->cloth[0]->material ?></td>
					</tr>
				<?php endif; ?>
			<?php endif; ?>

			<!-- ADD FIELDS FOR APARTMENT -->
		</table>
	</div>
</div>

