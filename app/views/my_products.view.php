<?php
$products = $data;

require_once('partials/header.php');
?>

<div class="container">
	<div class="row">
		<table class="table-bordered table-responsive table-hover col-md-8 col-md-offset-2">
			<thead>
				<tr>
					<th class="col-md-3 text-center">Picture</th>
					<th class="text-center col-md-1">Name</th>
					<th class="text-center col-md-5">Description</th>
					<th class="col-md-1">Quantity</th>
					<th class="text-center col-md-2">Options</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($products as $product) {
				?>
				<tr>
					<td class="text-center"><img class="img-thumbnail img-responsive" style="height:80px" src="<?= $product->picture ?>"></td>
					<td class="text-center"><?= $product->name ?></td>
					<td class="text-center"><?= $product->description ?> </td>
					<td class="text-center"><?= $product->stock_quantity ?> </td>
					<td class="text-center">
						<a href="post_product?id=<?= $product->id ?>" title="Post this product"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a>&nbsp&nbsp
						<a href="product_details?id=<?= $product->id ?>" title="Details"><i class="fa fa-info" aria-hidden="true"></i></a>&nbsp&nbsp
						<a href="edit_product?id=<?= $product->id ?>" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp&nbsp
						<a href="delete_product?id=<?= $product->id ?>" title="Delete"><i class="fa fa-recycle" aria-hidden="true"></i></a>
					</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>