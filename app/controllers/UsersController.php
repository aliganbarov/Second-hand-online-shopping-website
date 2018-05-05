<?php

namespace App\Controllers;

use App\Models\User;

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
}

