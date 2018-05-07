<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Product;
use App\Models\Apartment;

class PagesController {

	/**
	 * Show the main page
	 */
	public function index() {
		return view('index', Post::getAllPosts());
	}

	/**
	 * Show the register page
	 */
	public function register_page() {
		return view('register_page');
	}


	/**
	 * Show the login page
	 */
	public function login_page() {
		return view('login_page');
	}


	/**
	 * Show add product page
	 */
	public function add_product() {
		return view('add_product');
	}


	/**
	 * Show the my_products page
	 */
	public function my_products() {
		return view('my_products', Product::getAllProductsOfUser());
	}


	/**
	 * Show the edit product page
	 */
	public function edit_product() {
		return view('edit_product', Product::getProduct($_GET["id"]));
	}


	/**
	 * Show the product details page
	 */
	public function product_details() {
		return view('product_details', Product::getProduct($_GET["id"]));
	}


	/**
	 * Show the post product page
	 */
	public function post() {
		return view('post');
	}


	/**
	 * Show the my posts page
	 */
	public function my_posts() {
		return view('my_posts', Post::getAllPostsOfUser());
	}


	/**
	 * Show the post details page
	 */
	public function post_details() {
		return view('post_details', Post::getPost($_GET["id"]));
	}


	/**
	 * Show the add apartment page
	 */
	public function add_apartment() {
		return view('add_apartment');
	}


	/**
	 * Show the my apartments page
	 */
	public function my_apartments() {
		return view('my_apartments', Apartment::getAllApartmentsOfUser($_SESSION["user_id"]));
	}

}