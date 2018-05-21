<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Rate;
use App\Models\Comment;

class UserController {

	/**
	 * Register user
	 */
	public function register() {
		$user = new User($_POST["email"], $_POST["password"], $_POST["occupation"], $_POST["phone_number"],
						$_POST["name"], $_POST["location"], $_POST["dob"], $_POST["address"]);
		$user->save();
		return redirect('login');
	}


	/**
	 * User login
	 */
	public function login() {
		$user = User::getUser($_POST["email"]);
		if ($user) {
			if ($user[0]->password == $_POST["password"]) {
				$_SESSION["login"] = true;
				$_SESSION["user_id"] = $user[0]->id;
				return redirect('');
			}
		}
		return redirect('login');
	}


	/**
	 * User logout
	 */
	public function logout() {
		$_SESSION["login"] = null;
		return redirect('');
	}


	/**
	 * Store rate given to user
	 */
	public function rate_user() {
		if ($_SESSION["user_id"] != $_GET["to_user_id"]) {
			Rate::save($_SESSION["user_id"], $_GET["to_user_id"], $_GET["rate"]);
		}
		return redirect("view_user?id={$_GET["to_user_id"]}");
	}


	/**
	 * Add comment to user
	 */
	public function add_comment() {
		Comment::save($_SESSION["user_id"], $_POST["to_user_id"], $_POST["comment"]);
		return redirect("view_user?id={$_POST["to_user_id"]}");
	}
}

