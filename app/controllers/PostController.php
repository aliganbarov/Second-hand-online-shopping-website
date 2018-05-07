<?php

namespace App\Controllers;

use App\Models\Post;

class PostController {

	/**
	 * Post product and redirect
	 */
	public function post() {
		if (!isset($_POST["apartment"])) {
			$product_id = $_GET["id"];
			$apartment_id = "NULL";
		} else {
			$product_id = "NULL";
			$apartment_id = $_GET["id"];
		}
		$post = new Post($_SESSION["user_id"], $_POST["region"], $_POST["duration"], 
				$product_id, $apartment_id, $_POST["price"]);
		$post->save();

		return redirect("my_posts");
	}


	/**
	 * Delete post and redirect
	 */
	public function delete_post() {
		Post::delete($_GET["id"]);
		return redirect("my_posts");
	}

}
