<?php

namespace Tsi\Php\interfaces;

interface iDAO {

    public function create($data):bool;
    public function read(int $id = null):array;
    public function update():bool;
    public function delete($id):bool;
    public function filter(array $filters):array;
}

// para o controller