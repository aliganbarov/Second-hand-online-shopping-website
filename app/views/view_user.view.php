<?php
	$user = $data[0];
	$posts = $user->posts;

	// var_dump($user);
	// die();


?>

<?php require_once ('partials/header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-2 list-group">
			<h3 class="text-center" id="post_content">Category</h3>
			<ul>
				<li class="list-group-item active" id="products_display">Products</li>
				<li class="list-group-item" id="apartments_display">Apartments</li>
			</ul>
		</div>
		
		<div class="col-md-7">
			<div id="products_block" class="row">
				<h2 class="text-center">Products</h2>
				<table id="products_table" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
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

		<div class="col-md-3 list-group">
			<h3 class="text-center" id="post_content">Info</h3>
			<ul>
				<li class="list-group-item" title="Name">
					<i class="fa fa-user" aria-hidden="true"></i>
					<?= $user->name ?>
				</li>
				<li class="list-group-item" title="Phone Number">
					<i class="fa fa-mobile" aria-hidden="true"></i>
					<?= $user->phone_number ?>
				</li>
				<li class="list-group-item" title="Occupation">
					<i class="fa fa-briefcase" aria-hidden="true"></i>
					<?= $user->occupation ?>
				</li>
				<li class="list-group-item" title="Location">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<?= $user->location ?>
				</li>
				<li class="list-group-item" title="Address">
					<i class="fa fa-address-card-o" aria-hidden="true"></i>
					<?= $user->dob ?>
				</li>
				<li class="list-group-item" title="Email">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<?= $user->email ?>
				</li>
				<li class="list-group-item" title="Date of Birth">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<?= $user->dob ?>
				</li>
				
			</ul>
		</div>
	</div>
	<div class="row">
		<h2>Average Rating: &nbsp;<?= $user->avg_rate[0]->avg_rate == null ? 0 : $user->avg_rate[0]->avg_rate ?>&nbsp;<i class="fa fa-star" aria-hidden="true"></i></h2>
		<h3>Rate</h3>
		<div class="list-group col-md-2">
			<a href="rate_user?rate=5&to_user_id=<?= $user->id ?>" class="list-group-item list-group-item-success" title="Perfect">
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
			</a>
			<a href="rate_user?rate=4&to_user_id=<?= $user->id ?>" class="list-group-item list-group-item-info" title="Good">
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
			</a>
			<a href="rate_user?rate=3&to_user_id=<?= $user->id ?>" class="list-group-item list-group-item-warning" title="Average">
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
			</a>
			<a href="rate_user?rate=2&to_user_id=<?= $user->id ?>" class="list-group-item list-group-item-danger" title="Bad">
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
			</a>
			<a href="rate_user?rate=1&to_user_id=<?= $user->id ?>" class="list-group-item list-group-item-danger" title="Disaster">
				<i class="fa fa-star" aria-hidden="true"></i>
			</a>
		</div>
	</div>
	<div class="row">
		<h2>Comments</h2>
		<div class="list-group">
			<?php foreach($user->comments as $comment): ?>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading"><?= $comment->from_user[0]->name ?></h4>
					<p class="list-group-item-text"><?= $comment->comment ?></p>
					<p class="list-group-item-text"><?= $comment->date_ ?></p>
				</a>
			<?php endforeach; ?>
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