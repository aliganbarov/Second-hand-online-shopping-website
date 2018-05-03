<?php

namespace App\Controllers;

use App\Models\User;

class PagesController {

	/**
	 * Show the main page.
	 */
	public function index() {
		// var_dump(User::getAllUsers());
		// die();
		return view('index', User::getAllUsers());
	}


}