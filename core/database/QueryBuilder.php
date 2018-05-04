<?php

namespace App\Core\Database;

use PDO;
use App\Core\Database\Connection;

class QueryBuilder
{
    /**
     * The PDO instance.
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Create a new QueryBuilder instance.
     *
     */
    public function __construct()
    {
        $this->pdo = Connection::make();
    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Insert a record into a table.
     *
     * @param string $table
     * @param string  $parameters
     * @param string $values
     */
    public function insert($table, $parameters, $values)
    {
        $sql = "INSERT INTO {$table} {$parameters} VALUES ({$values})";

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
        } catch (\Exception $e) {
            var_dump($e);
        }
    }

    /**
     * Select with filtering
     *
     * @param string $table
     * @param string $condition
     */
    public function selectFilter($table, $condition) {
        $sql = "SELECT * FROM {$table} WHERE {$condition}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

}
