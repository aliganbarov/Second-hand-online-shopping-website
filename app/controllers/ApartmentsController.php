<?php

namespace App\Controllers;

use App\Models\Apartment;

class ApartmentsController {

	/**
	 * Save apartment and redirect
	 */
	public function add_apartment() {
		$id = Apartment::new($_POST["type"], $_POST["no_of_rooms"], $_POST["address"], $_SESSION["user_id"]);
		return redirect("my_apartments");
	}


	/**
	 * Deletes apartment and redirects
	 */
	public function delete_apartment() {
		Apartment::delete($_GET["id"]);
		return redirect("my_apartments");
	}

}