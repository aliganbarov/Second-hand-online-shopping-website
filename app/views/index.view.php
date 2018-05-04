<?php
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
	// GET THE LIST OF ITEMS
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=Shop', 'root', '');
	$statement = $pdo->prepare('select * from Post');
	$statement->execute();
	$posts = $statement->fetchAll(PDO::FETCH_OBJ);

	foreach($posts as $post) {
		// GET THE DETAILS OF PRODUCT
		$statement = $pdo->prepare('select * from Product where id=' . $post->product_id);
		$statement->execute();
		$post->product = $statement->fetchAll(PDO::FETCH_OBJ)[0];
		// GET THE USER DETAILS
		$statement = $pdo->prepare('select * from User where id=' . $post->user_id);
		$statement->execute();
		$post->user = $statement->fetchAll(PDO::FETCH_OBJ)[0];
	}
?>

<?php require_once ('partials/header.php'); ?>


<div class="container">
	<div class="row">
		<table class="table-bordered table-responsive table-hover col-md-6 col-md-offset-3">
			<thead>
				<tr>
					<th>User</th>
					<th>Region</th>
					<th>Name</th>
					<th>Description</th>
					<th>Option</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($posts as $post) {
				?>
				<tr>
					<td><?= $post->user->name ?></td>
					<td><?= $post->region ?></td>
					<td><?= $post->product->name ?> </td>
					<td><?= $post->product->description ?> </td>
					<td><a href="/SecondHand/post_details.php?id=<?= $post->id ?>">Details</a></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>



