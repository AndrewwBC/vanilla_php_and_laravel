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

    public function updateById($field, $newValue, $userId){

        $update = $this->db->prepare("UPDATE users SET $field = :newValue WHERE id = :userId RETURNING $field");
        $update->bindParam(':newValue', $newValue, PDO::PARAM_STR);
        $update->bindParam(':userId', $userId, PDO::PARAM_STR);
        $update->execute();

        echo json_encode($update->fetchAll(PDO::FETCH_ASSOC));

    }

     public function getColumns(): array {
        return [];
    }
    public function create($data){
        $username = $data["username"];
        $email = $data["email"];
        $password = $data["password"];
      
        $createUser = $this->db->prepare("INSERT INTO users(username, email, password) VALUES(?,?,?) RETURNING *");

        $createUser->bindParam(1, $username, PDO::PARAM_INT);
        $createUser->bindParam(2, $email, PDO::PARAM_INT);
        $createUser->bindParam(3, $password, PDO::PARAM_INT);

        $createUser->execute();

        return $createUser->fetch(PDO::FETCH_ASSOC);
        
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