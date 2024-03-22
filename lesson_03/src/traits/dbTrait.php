<?php

namespace Tsi\Php\traits;
use PDO;
use Tsi\Php\database\Connection;

trait dbTrait {
    protected PDO $connection;
    public function getConnection() {
        $this->connection = Connection::getConnection();
    }

}