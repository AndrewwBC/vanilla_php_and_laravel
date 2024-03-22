<?php

namespace Tsi\Php\repository;
use PDO;
use Tsi\Php\database\Connection;
use Tsi\Php\interfaces\iDAO;

class UserRepository implements iDAO {

    private PDO $db;
    
    public function __construct() {
        $this->db = Connection::getConnection();
    }

    public function getUsers() {
        $users = $this->db->prepare("SELECT * FROM USERS");
        $users->execute();

        echo json_encode($users->fetchAll(PDO::FETCH_ASSOC));
    }

    public function getUserById($id) {

        $user = $this->db->prepare("SELECT * FROM users WHERE users.id = ?");
        $user->bindParam(1, $id, PDO::PARAM_INT);
        $user->execute();

        echo json_encode($user->fetchAll(PDO::FETCH_ASSOC));

    }

     public function getColumns(): array {
        return [];
    }
    public function create($data):bool{
      
        print_r($data);
    
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