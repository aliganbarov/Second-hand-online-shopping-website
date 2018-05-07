<?php
$apartments = $data;

require_once('partials/header.php');
?>

<div class="container">
	<div class="row">
		<table class="table-bordered table-responsive table-hover col-md-8 col-md-offset-2">
			<thead>
				<tr>
					<th class="col-md-3 text-center">Type</th>
					<th class="text-center col-md-1"># of Rooms</th>
					<th class="text-center col-md-5">Address</th>
					<th class="text-center col-md-2">Options</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($apartments as $apartment) {
				?>
				<tr>
					<td class="text-center"><?= $apartment->type_ ?></td>
					<td class="text-center"><?= $apartment->no_of_rooms ?> </td>
					<td class="text-center"><?= $apartment->address ?> </td>
					<td class="text-center">
						<a href="post?apartment_id=<?= $apartment->id ?>" title="Post this apartment"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a>&nbsp&nbsp
						<a href="delete_apartment?id=<?= $apartment->id ?>" title="Delete"><i class="fa fa-recycle" aria-hidden="true"></i></a>
					</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>