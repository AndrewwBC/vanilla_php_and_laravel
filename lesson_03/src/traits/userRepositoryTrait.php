<?php

namespace Tsi\Php\traits;

use Tsi\Php\repository\UserRepository;

trait userRepositoryTrait {
    protected UserRepository $userRepository;
    public function getUserRepo() {
        $this->userRepository = new UserRepository();
    }
}