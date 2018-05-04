<?php

namespace App\Controllers;

use App\Models\Food;

class ProductsController {

	/**
	 * Save product
	 */
	public function product_save() {
	
		if ($_POST["product_type"] == "pet") {
			$this->createPet();
		} else if ($_POST["product_type"] == "food") {
			$this->createFood();
		} else {
			$this->createCloth();
		}
	}

	/**
	 * Create new Food
	 */
	public function createFood() {
		if (!isset($_POST["user_id"])) {
			$_POST["user_id"] = "NULL";
		}
		if (!isset($_POST["comp_page_id"])) {
			$_POST["comp_page_id"] = "NULL";
		}
		if (!isset($_POST["picture"])) {
			$_POST["picture"] = "NULL";
		}
		$food = new Food($_POST["type"], $_POST["time_of_preparation"], $_POST["name"], 
			$_POST["description"], $_POST["picture"], $_POST["stock_quantity"], 
			$_POST["comp_page_id"], $_POST["user_id"]);
		$id = $food->save();
		
	}


}