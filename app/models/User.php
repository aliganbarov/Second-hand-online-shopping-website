<?php

namespace App\Models;

use App\Core\Database\QueryBuilder;

class User {

	protected $id;
	protected $email;
	protected $password;
	protected $occupation;
	protected $phone_number;
	protected $name;
	protected $location;
	protected $dob;
	protected $address;

	protected $queryBuilder;

	/*
	 * Instantiates queryBuilder
	 *
	 * @param string email
	 * @param string password
	 * @param string occupation
	 * @param string phone_number
	 * @param string name
	 * @param string location
	 * @param string dob
	 * @param string address 
	 */
	public function __construct($email, $password, $occupation, $phone_number, 
								$name, $location, $dob, $address) {
		$this->queryBuilder = new QueryBuilder();

		$this->email = $email;
		$this->password = $password;
		$this->occupation = $occupation;
		$this->phone_number = $phone_number;
		$this->name = $name;
		$this->location = $location;
		$this->dob = $dob;
		$this->address = $address;
	}

	/**
	 * Get all users from User table
	 */
	public static function getAllUsers() {
		return $queryBuilder->selectAll('User');
	}


	/**
	 * Get specific user
	 * 
	 * @param string email
	 */
	public static function getUser($email) {
		$queryBuilder = new QueryBuilder();
		return $queryBuilder->selectFilter("User", "email='{$email}'");
	}


	/**
	 * Save user
	 */
	public function save() {
		return $this->queryBuilder->insert('User', 'email, password, occupation, phone_number, 
			name, location, dob, address', "'{$this->email}', '{$this->password}', 
			'{$this->occupation}', '{$this->phone_number}', '{$this->name}', '$this->location', 
			'{$this->dob}', '{$this->address}'");
	}

}