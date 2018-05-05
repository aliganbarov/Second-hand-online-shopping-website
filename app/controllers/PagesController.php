<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Post;

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
		
	}

}