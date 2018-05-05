<?php

namespace App\Models;

use App\Models\Product;
use App\Core\Database\QueryBuilder;

class Pet extends Product {

	private $gender;
	private $breed;
	private $age;
	private $time_spent_with_owner;

	/*
	 * Constructor
	 *
	 * @param string gender
	 * @param string breed
	 * @param float age
	 * @param int time_spent_with_owner
	 * @param string name
	 * @param string description
	 * @param string picture
	 * @param int stock_quantity
	 * @param int comp_page_id
	 * @param int user_id
	 */
	public function __construct($gender, $breed, $age, $time_spent_with_owner, $name, 
								$description, $picture, $stock_quantity, $comp_page_id, $user_id) {
		parent::__construct($name, $description, $picture, $stock_quantity, $comp_page_id, $user_id, 'Pet');
		$this->gender = $gender;
		$this->breed = $breed;
		$this->age = $age;
		$this->time_spent_with_owner = $time_spent_with_owner;
	}


	/**
	 * Save Pet and return id
	 */
	public function save() {
		$queryBuilder = new QueryBuilder();
		$parent_id = parent::save();
		return $queryBuilder->insert('Pet', 'id, gender, breed, age, time_spent_with_owner', 
				"'{$parent_id}', '{$this->gender}', '{$this->breed}', '{$this->age}', '{$this->time_spent_with_owner}'");
	}


	/**
	 * Get Pet
	 *
	 * @param int id
	 */
	public static function getPet($id) {
		$queryBuilder = new QueryBuilder();
		return $queryBuilder->selectFilter('Pet', "id={$id}");
	} 


	/**
	 * Delete pet
	 *
	 * @param int $id
	 */
	public static function delete($id) {
		$queryBuilder = new QueryBuilder();
		$queryBuilder->delete('Pet', "id={$id}");
	}


	/**
	 * Update Pet
	 *
	 * @param string gender
	 * @param string breed
	 * @param float age
	 * @param int time_spent_with_owner
	 * @param string name
	 * @param string description
	 * @param string picture
	 * @param int stock_quantity
	 * @param int comp_page_id
	 * @param int user_id
	 */
	public static function updatePet($id, $name, $description, $stock_quantity, 
								$gender, $breed, $age, $time_spent_with_owner) {
		parent::update($id, $name, $description, $stock_quantity);
		$queryBuilder = new QueryBuilder();
		$queryBuilder->update('Pet', "gender='{$gender}', breed='{$breed}', 
			age={$age}, time_spent_with_owner={$time_spent_with_owner}", "id={$id}");
	}

}
