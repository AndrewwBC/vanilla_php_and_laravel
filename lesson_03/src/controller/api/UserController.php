<?php

namespace Tsi\Php\controller\api;

use ErrorException;
use Exception;
use Tsi\Php\model\User as ModelUsers;
use Tsi\Php\repository\UserRepository;

class UserController extends Controller{
	private ModelUsers $model;
	private UserRepository $userRepository;
	
    public function __construct() {
		try {
			$this->userRepository = new UserRepository();
			$this->model = new ModelUsers();
			$this->setHeader(200);
		} catch (Exception $error) {
			$this->setHeader(500, "Erro ao conectar ao banco!");
			json_encode(["error" => $error->getMessage()]);
		}
	}

    public function index () {
		$users = $this->userRepository->getUsers();
		return json_encode($users);
	}
    public function show($id) {
		$user = $this->userRepository->getUserById($id);
		return json_encode($user);
    }

	public function store(){

	 	foreach ($_POST as $chave => $valor) {
			if (empty($valor)) {
				echo json_encode(["error"=> "Preencha todos os campos"]);
				return;
			}
    	}

		$userCreated = $this->userRepository->create($_POST);
		echo json_encode($userCreated);
	}

	public function update($id){

		$userId = $id;
		$fieldToBeUpdated = $_POST["field"];
		$newValue = $_POST["newValue"];

		return $this->userRepository->updateById($fieldToBeUpdated, $newValue, $userId);
	}
}
