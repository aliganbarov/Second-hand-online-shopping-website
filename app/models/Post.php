<?php

namespace App\Models;

use App\Core\Database\QueryBuilder;
use App\Models\Product;

class Post {

	private $id;
	private $user_id;
	private $region;
	private $duration;
	private $product_id;
	private $apartment_id;
	private $price;


	/**
	 *	Constructor
	 *
	 * @param int $user_id
	 * @param string $region
	 * @param float $duration
	 * @param int product_id
	 * @param int apartment_id
	 * @param float $price
	 */
	public function __construct($user_id, $region, $duration, $product_id, $apartment_id, $price) {
		$this->user_id = $user_id;
		$this->region = $region;
		$this->duration = $duration;
		$this->product_id = $product_id;
		$this->apartment_id = $apartment_id;
		$this->price = $price;
	}


	/**
	 * Get all posts
	 */
	public static function getAllPosts() {
		$queryBuilder = new QueryBuilder();
		$posts = $queryBuilder->selectAll('Post');
		// attach related product, apartment and user to each post object
		foreach ($posts as $post) {
			if (isset($post->product_id)) {
				$post->product = $queryBuilder->selectFilter('Product', "id={$post->product_id}");
			} else {
				$post->apartment = $queryBuilder->selectFilter('Apartment', "id={$post->apartment_id}");
			}
			$post->user = $queryBuilder->selectFilter('User', "id={$post->user_id}");
		}

		return $posts;
	}


	/**
	 * Get all posts of user
	 */
	public static function getAllPostsOfUser() {
		$queryBuilder = new QueryBuilder();
		$posts = $queryBuilder->selectFilter('Post', "user_id={$_SESSION["user_id"]}");
		// attach related product and apartment to each post object
		foreach ($posts as $post) {
			if (isset($post->product_id)) {
				$post->product = $queryBuilder->selectFilter('Product', "id={$post->product_id}");
			} else {
				$post->apartment = $queryBuilder->selectFilter('Apartment', "id={$post->apartment_id}");
			}
		}
		return $posts;
	}


	/**
	 * Save the Post
	 */
	public function save() {
		$queryBuilder = new QueryBuilder();
		$queryBuilder->insert("Post", "user_id, region, duration, date_, product_id, apartment_id, price", 
			"{$this->user_id}, '{$this->region}', '{$this->duration}', CURDATE(), {$this->product_id}, 
			{$this->apartment_id}, '{$this->price}'");
	}


	/**
	 * Delete Post
	 *
	 * @param int $id
	 */
	public function delete($id) {
		$queryBuilder = new QueryBuilder();
		$queryBuilder->delete("Post", "id={$id}");
	}


	/**
	 * Get Post information
	 *
	 * @param int $id
	 */
	public static function getPost($id) {
		$queryBuilder = new QueryBuilder();
		$post = $queryBuilder->selectFilter("Post", "id={$id}");
		$post[0]->user = $queryBuilder->selectFilter("User", "id={$post[0]->user_id}");
		if (isset($post[0]->product_id)) {
			$post[0]->product = Product::getProduct($post[0]->product_id);
		}
		if (isset($post[0]->apartment_id)) {
			$post[0]->apartment = $queryBuilder->selectFilter("Apartment", "id={$post[0]->apartment_id}");
		}
		return $post;
	}
}
