<?php
$posts = $data;

require_once('partials/header.php');
?>

<div class="container">
	<div class="row">
		<h2 class="text-center">Product Posts</h2>
		<table class="table-bordered table-responsive table-hover col-md-8 col-md-offset-2">
			<thead>
				<tr>
					<th class="text-center col-md-1">Name</th>
					<th class="text-center col-md-5">Description</th>
					<th class="col-md-1">Quantity</th>
					<th class="col-md-1">Price</th>
					<th class="col-md-1">Duration</th>
					<th class="col-md-2">Date</th>
					<th class="text-center col-md-1">Options</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($posts as $post): ?>
					<?php if(isset($post->product_id)): ?>
						<tr>
							<td class="text-center"><?= $post->product[0]->name ?></td>
							<td class="text-center"><?= $post->product[0]->description ?> </td>
							<td class="text-center"><?= $post->product[0]->stock_quantity ?> </td>
							<td class="text-center"><?= $post->price ?> </td>
							<td class="text-center"><?= $post->duration ?> </td>
							<td class="text-center"><?= $post->date_ ?> </td>
							<td class="text-center">
								<a href="delete_post?id=<?= $post->id ?>" title="Delete"><i class="fa fa-recycle" aria-hidden="true"></i></a>
							</td>
						</tr>
					<?php endif; ?>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<div class="row">
		<h2 class="text-center">Apartment Posts</h2>
		<table class="table-bordered table-responsive table-hover col-md-8 col-md-offset-2">
			<thead>
				<tr>
					<th class="text-center col-md-1">Type</th>
					<th class="text-center col-md-5"># of Rooms</th>
					<th class="col-md-1">Address</th>
					<th class="col-md-1">Price</th>
					<th class="col-md-1">Duration</th>
					<th class="col-md-2">Date</th>
					<th class="text-center col-md-1">Options</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($posts as $post): ?>
					<?php if(isset($post->apartment_id)): ?>
						<tr>
							<td class="text-center"><?= $post->apartment[0]->type_ ?></td>
							<td class="text-center"><?= $post->apartment[0]->no_of_rooms ?> </td>
							<td class="text-center"><?= $post->apartment[0]->address ?> </td>
							<td class="text-center"><?= $post->price ?> </td>
							<td class="text-center"><?= $post->duration ?> </td>
							<td class="text-center"><?= $post->date_ ?> </td>
							<td class="text-center">
								<a href="delete_post?id=<?= $post->id ?>" title="Delete"><i class="fa fa-recycle" aria-hidden="true"></i></a>
							</td>
						</tr>
					<?php endif; ?>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>