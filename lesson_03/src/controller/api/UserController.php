<?php

namespace Tsi\Php\controller\api;

use Exception;
use PhpParser\Error;
use Tsi\Php\model\User as ModelUsers;
use Tsi\Php\repository\UserRepository;
use Tsi\Php\traits\userRepositoryTrait;



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
		$data = $_POST;

		$userCreated = $this->userRepository->create($data);

		return json_encode($userCreated);
	}
}
