<?php
	$posts = $data;
?>

<?php require_once ('partials/header.php'); ?>


<div class="container">
	<div class="col-md-2 list-group">
		<h3 class="text-center" id="post_content">Posts</h3>
		<ul>
			<li class="list-group-item active" id="products_display">Products</li>
			<li class="list-group-item" id="apartments_display">Apartments</li>
		</ul>
	</div>
	<div class="col-md-8">
		<div id="products_block" class="row">
			<h2 class="text-center">Products</h2>
			<table id="products_table" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>User</th>
						<th>Region</th>
						<th>Name</th>
						<th>Description</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($posts as $post): ?>
						<?php if (isset($post->product_id)): ?>
							<tr>
								<td><?= $post->user[0]->name ?></td>
								<td><?= $post->region ?></td>
								<td><?= $post->product[0]->name ?> </td>
								<td><?= $post->product[0]->description ?> </td>
								<td><?= $post->product[0]->stock_quantity ?> </td>
								<td><?= $post->price ?> TL</td>
								<td><a href="post_details?id=<?= $post->id ?>" title="Details"><i class="fa fa-recycle" aria-hidden="true"></a></td>
							</tr>
						<?php endif; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

		<div hidden id="apartments_block" class="row">
			<h2 class="text-center">Apartments</h2>
			<table id="apartments_table" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>User</th>
						<th>Region</th>
						<th>Type</th>
						<th># of Rooms</th>
						<th>Address</th>
						<th>Price</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($posts as $post): ?>
						<?php if (isset($post->apartment_id)): ?>
							<tr>
								<td><?= $post->user[0]->name ?></td>
								<td><?= $post->region ?></td>
								<td><?= $post->apartment[0]->type_ ?> </td>
								<td><?= $post->apartment[0]->no_of_rooms ?> </td>
								<td><?= $post->apartment[0]->address ?> </td>
								<td><?= $post->price ?> TL</td>
								<td><a href="post_details?id=<?= $post->id ?>" title="Details"><i class="fa fa-recycle" aria-hidden="true"></a></td>
							</tr>
						<?php endif; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$("#products_display").click(function() {
			event.preventDefault();
			$(this).addClass("active");
			$("#apartments_display").removeClass("active");
			$("#products_block").show();
			$("#apartments_block").hide();
		});
		$("#apartments_display").click(function() {
			event.preventDefault();
			$(this).addClass("active");
			$("#products_display").removeClass("active");
			$("#apartments_block").show();
			$("#products_block").hide();
		});


		$('#products_table').DataTable();
		$('#apartments_table').DataTable();
	});
	
</script>

<?php require_once('partials/footer.php'); ?>

