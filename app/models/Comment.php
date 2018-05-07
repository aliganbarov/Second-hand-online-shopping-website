<?php

namespace App\Models;

use App\Core\Database\QueryBuilder;

class Comment {

	private $from_user_id;
	private $to_user_id;
	private $date;
	private $comment;


	/**
	 * Save comment
	 *
	 * @param int $from_user_id
	 * @param int $to_user_id
	 * @param string $comment
	 */
	public static function save($from_user_id, $to_user_id, $comment) {
		$queryBuilder = new QueryBuilder();
		$queryBuilder->insert("Comment", "from_user_id, to_user_id, comment, date_",
				"{$from_user_id}, {$to_user_id}, '{$comment}', NOW()");
	}

}
