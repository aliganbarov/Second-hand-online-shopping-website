<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Food;
use App\Models\Pet;
use App\Models\Cloth;

class ProductsController {

	/**
	 * Save product
	 */
	public function product_save() {
		if (!isset($_SESSION["user_id"])) {
			$_SESSION["user_id"] = "NULL";
		}
		if (!isset($_SESSION["comp_page_id"])) {
			$_SESSION["comp_page_id"] = "NULL";
		}
		if (!isset($_POST["picture"])) {
			$_POST["picture"] = "NULL";
		}

		if ($_POST["product_type"] == "pet") {
			$this->createPet();
		} else if ($_POST["product_type"] == "food") {
			$this->createFood();
		} else if ($_POST["product_type"] == "cloth") {
			$this->createCloth();
		} else {
			$this->createProduct();
		}
	}

	/**
	 * Create basic product and redirect
	 */
	public function createProduct() {
		$product = new Product($_POST["name"], $_POST["description"], $_POST["picture"], 
			$_POST["stock_quantity"], $_SESSION["comp_page_id"], $_SESSION["user_id"]);
		$product->save();
		return redirect('my_products');
	}

	
	/**
	 * Create new Food and redirect
	 */
	public function createFood() {
		$food = new Food($_POST["type"], $_POST["time_of_preparation"], $_POST["name"], 
			$_POST["description"], $_POST["picture"], $_POST["stock_quantity"], 
			$_SESSION["comp_page_id"], $_SESSION["user_id"]);
		$food->save();
		return redirect('my_products');
	}


	/**
	 * Create new Pet and redirect
	 */
	public function createPet() {
		$pet = new Pet($_POST["gender"], $_POST["breed"], $_POST["age"], $_POST["time_spent_with_owner"], 
			$_POST["name"], $_POST["description"], $_POST["picture"], $_POST["stock_quantity"], 
			$_SESSION["comp_page_id"], $_SESSION["user_id"]);
		$pet->save();
		return redirect('my_products');
	}


	/**
	 * Create new Cloth and redirect
	 */
	public function createCloth() {
		$cloth = new Cloth($_POST["size"], $_POST["color"], $_POST["type"], $_POST["material"], 
			$_POST["name"], $_POST["description"], $_POST["picture"], $_POST["stock_quantity"], 
			$_SESSION["comp_page_id"], $_SESSION["user_id"]);
		$cloth->save();
		return redirect('my_products');
	}


}