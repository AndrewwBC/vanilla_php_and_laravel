<?php

namespace Tsi\Php\model;

use Tsi\Php\database\Connection;
use Exception;
use PDO;

class User {
    private string $username;
    private string $email;
    private string $password;

    public function __construct(string $username, string $email, string $password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setUsername(string $username): void {
        $this->username = $username;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

}