<?php

namespace Tsi\Php\model;


use Tsi\Php\interfaces\iDAO;
use Tsi\Php\model\ModelExemplo;

class User extends ModelExemplo {
    private string $username;
    private string $email;
    private string $password;

    public function __construct(string $username = '', string $email = '', string $password = ''){
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


    public function getColumns(): array {
        return [];
    }
    public function create():bool{
       return true;
      }
    public function read(int $id = null):array{
        return [];
    }
    public function update():bool{
        return true;
    }
    public function delete($id):bool{
       return true;

    }
    public function filter(array $filters):array{
        return [];

    }

}