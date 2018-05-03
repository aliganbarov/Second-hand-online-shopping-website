<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class Connection
{
    /**
     * Create a new PDO connection.
     *
     */
    public static function make()
    {
        $config = require 'config.php';
        $config = $config["database"];
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
