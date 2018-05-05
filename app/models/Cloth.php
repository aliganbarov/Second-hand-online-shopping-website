<?php

namespace App\Models;

use App\Models\Product;
use App\Core\Database\QueryBuilder;

class Cloth extends Product {

	private $size;
	private $color;
	private $type;


	/*
	 * Constructor
	 *
	 * @param string size
	 * @param string color
	 * @param string type
	 * @param string material
	 * @param string name
	 * @param string description
	 * @param string picture
	 * @param int stock_quantity
	 * @param int comp_page_id
	 * @param int user_id
	 */
	public function __construct($size, $color, $type, $material, $name, $description, $picture,
								$stock_quantity, $comp_page_id, $user_id) {
		parent::__construct($name, $description, $picture, $stock_quantity, $comp_page_id, $user_id);
		$this->size = $size;
		$this->color = $color;
		$this->type = $type;
		$this->material = $material;
	}


	/**
	 * Save Cloth and return id
	 */
	public function save() {
		$queryBuilder = new QueryBuilder();
		$parent_id = parent::save();
		$cloth_id = $queryBuilder->insert('Cloth', 'id, size, color, type_, material', 
				"{$parent_id}, '{$this->size}', '{$this->color}', '{$this->type}', '{$this->material}'");
	}


	/**
	 * Get Cloth
	 *
	 * @param int id
	 */
	public static function getCloth($id) {
		$queryBuilder = new QueryBuilder();
		$cloth = $queryBuilder->selectFilter('Cloth', "id={$id}");
		return $cloth;
	} 
}