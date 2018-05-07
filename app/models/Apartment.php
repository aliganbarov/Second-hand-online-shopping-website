<?php

namespace App\Models;

use App\Core\Database\QueryBuilder;

class Apartment {

	private $id;
	private $type;
	private $no_of_rooms;
	private $address;

	/**
	 * Save new apartment and return id
	 *
	 * @param string $type
	 * @param int $no_of_rooms
	 * @param string $address
	 * @param int $user_id
	 */
	public static function new($type, $no_of_rooms, $address, $user_id) {
		$queryBuilder = new QueryBuilder();
		return $queryBuilder->insert('Apartment', 'type_, no_of_rooms, address, user_id', 
			"'{$type}', {$no_of_rooms}, '{$address}', {$user_id}");
	}


	/**
	 * Retrieve all user's apartments
	 *
	 * @param int $user_id
	 */
	public static function getAllApartmentsOfUser($user_id) {
		$queryBuilder = new QueryBuilder();
		return $queryBuilder->selectFilter('Apartment', "user_id={$user_id}");
	}


	/**
	 * Delete apartment
	 *
	 * @param int $id
	 */
	public static function delete($id) {
		$queryBuilder = new QueryBuilder();
		$queryBuilder->delete("Apartment", "id={$id}");
	}
}