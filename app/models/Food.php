<?php

namespace App\Models;

use App\Models\Product;
use App\Core\Database\QueryBuilder;

class Food extends Product {

	// private $id;
	private $type;
	private $time_of_preparation;


	/*
	 * Constructor
	 *
	 * @param string type
	 * @param string time_of_preparation
	 * @param string name
	 * @param string description
	 * @param string picture
	 * @param int stock_quantity
	 * @param int comp_page_id
	 * @param int user_id
	 */
	public function __construct($type, $time_of_preparation, $name, $description, $picture,
								$stock_quantity, $comp_page_id, $user_id) {
		parent::__construct($name, $description, $picture, $stock_quantity, $comp_page_id, $user_id);
		$this->type = $type;
		$this->time_of_preparation = $time_of_preparation;
	}


	/**
	 * Save Food and return id
	 */
	public function save() {
		$queryBuilder = new QueryBuilder();
		$parent_id = parent::save();
		return $queryBuilder->insert('Food', 'id, type_, time_of_preparation', 
			"'{$parent_id}', '{$this->type}', '{$this->time_of_preparation}'");
	}


	/**
	 * Get Food
	 *
	 * @param int id
	 */
	public static function getFood($id) {
		$queryBuilder = new QueryBuilder();
		return $queryBuilder->selectFilter('Food', "id={$id}");
	} 
}