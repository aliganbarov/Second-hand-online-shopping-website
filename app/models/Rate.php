<?php

namespace App\Models;

use App\Core\Database\QueryBuilder;

class Rate {

	private $from_user_id;
	private $to_user_id;
	private $rate;

	/**
	 * Save rate
	 *
	 * @param int $from_user_id
	 * @param int $to_user_id
	 * @param int rate
	 */
	public static function save ($from_user_id, $to_user_id, $rate) {
		$queryBuilder = new QueryBuilder();
		$queryBuilder->delete("Rates", "from_user_id={$from_user_id} and to_user_id={$to_user_id}");
		$queryBuilder->insert("Rates", "from_user_id, to_user_id, rate", 
				"{$from_user_id}, {$to_user_id}, {$rate}");

	}

}