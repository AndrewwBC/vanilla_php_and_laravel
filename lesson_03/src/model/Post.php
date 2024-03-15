<?php

namespace Tsi\Php\model;

use Tsi\Php\database\Connection;
use Exception;
use PDO;

class Post {
    private string $description;
    private string $user_id;

    public function __construct(string $description, string $user_id){
        $this->description = $description;
        $this->user_id = $user_id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }

    public function setUserId(string $user_id) {
        $this->user_id = $user_id;
    }

}