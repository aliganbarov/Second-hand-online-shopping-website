<?php
$posts = $data;

require_once('partials/header.php');
?>

<div class="container">
	<div class="row">
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
				<?php
				foreach($posts as $post) {
				?>
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
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>