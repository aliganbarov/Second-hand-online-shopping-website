<?php

namespace App\Models;

use App\Core\Database\QueryBuilder;

class Post {

	private $id;
	private $user_id;
	private $region;
	private $duration;
	private $date;
	private $product_id;
	private $apartment_id;
	private $price;

	/*
	 * Get all posts
	 */
	public static function getAllPosts() {
		$queryBuilder = new QueryBuilder();
		$posts = $queryBuilder->selectAll('Post');
		// attach related product and user to each post object
		foreach ($posts as $post) {
			$product = $queryBuilder->selectFilter('Product', "id={$post->product_id}");
			$post->product = $product;

			$user = $queryBuilder->selectFilter('User', "id={$post->user_id}");
			$post->user = $user;
		}

		return $posts;
	}
}
