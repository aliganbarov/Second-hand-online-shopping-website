<?php
$products = $data;

require_once('partials/header.php');
?>

<div class="container">
	<div class="row">
		<table class="table-bordered table-responsive table-hover col-md-6 col-md-offset-3">
			<thead>
				<tr>
					<th>Picture</th>
					<th>Name</th>
					<th>Description</th>
					<th>Stock Quantity</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($products as $product) {
				?>
				<tr>
					<td><img class="img-thumbnail img-responsive" style="height:200px" src="<?= $product->picture ?>"></td>
					<td><?= $product->name ?></td>
					<td><?= $product->description ?> </td>
					<td><?= $product->stock_quantity ?> </td>
					<td>
						<a href="/SecondHand/product_edit_page.php?id=<?= $product->id ?>">Edit</a>
						<a href="/SecondHand/product_delete.php?id=<?= $product->id ?>">Delete</a>
					</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>