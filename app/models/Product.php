<?php

namespace App\Models;

use App\Core\Database\QueryBuilder;

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
	 * Save product
	 */
	public function save() {
		return $this->queryBuilder->insert('Product', 'name, description, picture, stock_quantity, 
			comp_page_id, user_id', "'{$this->name}', '{$this->description}', 
			'{$this->picture}', {$this->stock_quantity}, {$this->comp_page_id}, 
			{$this->user_id}");
	}

}
