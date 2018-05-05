<?php

namespace App\Controllers;

use App\Models\Post;

class PostController {

	/**
	 * Post product
	 */
	public function post_product() {
		if (!isset($_POST["product_id"])) {
			$_POST["product_id"] = 'NULL';
		}
		if (!isset($_POST["apartment_id"])) {
			$_POST["apartment_id"] = "NULL";
		}
		$post = new Post($_SESSION["user_id"], $_POST["region"], $_POST["duration"], 
				$_GET["id"], $_POST["apartment_id"], $_POST["price"]);
		$post->save();
		return redirect("my_products");
	}

}
