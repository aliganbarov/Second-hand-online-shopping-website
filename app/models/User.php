<?php

namespace App\Models;

use App\Core\Database\Connection;
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

	/*
	 * PDO instance
	 * @var PDO
	 */
	protected $pdo;

	/*
	 * Create pdo instance
	 */
	public function __construct() {
		$queryBuilder = new QueryBuilder();
	}

	/*
	 * Get all users from User table
	 */
	public static function getAllUsers() {
		$queryBuilder = new QueryBuilder(Connection::make(require 'config.php'));
		return $queryBuilder->selectAll('User');
	}

}