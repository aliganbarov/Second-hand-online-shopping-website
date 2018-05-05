<?php

namespace App\Models;

use App\Core\Database\QueryBuilder;
use App\Models\Food;
use App\Models\Pet;
use App\Models\Cloth;

class Product {

	protected $id;
	protected $name;
	protected $description;
	protected $picture;
	protected $stock_quantity;
	protected $comp_page_id;
	protected $user_id;

	protected $queryBuilder;

	/*
	 * Instantiates queryBuilder
	 *
	 * @param string name
	 * @param string description
	 * @param string picture
	 * @param int stock_quantity
	 * @param int comp_page_id
	 * @param int user_id
	 */
	public function __construct($name, $description, $picture, $stock_quantity, $comp_page_id=null, $user_id=null) {
		$this->name = $name;
		$this->description = $description;
		$this->picture = $picture;
		$this->stock_quantity = $stock_quantity;
		$this->comp_page_id = $comp_page_id;
		$this->user_id = $user_id;

		$this->queryBuilder = new QueryBuilder();
	}


	/**
	 * Save product and return id
	 */
	public function save() {
		// save pic
		$uploaddir = 'public/pictures/';
		$uploadfile = $uploaddir.basename($_FILES['picture']['name']);

		if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
			echo "File is valid, and was successfully uploaded.\n";
		} else {
			echo "Failed to upload file!\n";
		}
		return $this->queryBuilder->insert('Product', 'name, description, picture, stock_quantity, 
			comp_page_id, user_id', "'{$this->name}', '{$this->description}', 
			'{$uploadfile}', {$this->stock_quantity}, {$this->comp_page_id}, 
			{$this->user_id}");
	}


	/**
	 * Get all products of current user
	 */
	public static function getAllProductsOfUser() {
		$queryBuilder = new QueryBuilder();
		if (isset($_SESSION["user_id"])) {
			$products = $queryBuilder->selectFilter('Product', "user_id={$_SESSION["user_id"]}");
		} else if (isset($_SESSION["company_id"])) {
			$products = $queryBuilder->selectFilter('Product', "comp_page_id={$_SESSION["company_id"]}");
		}

		// attach food, pet and cloth
		foreach($products as $product) {
			$product->food = Food::getFood($product->id);
			$product->pet = Pet::getPet($product->id);
			$product->cloth = Cloth::getCloth($product->id);
		}
		return $products;
	}

}
