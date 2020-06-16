<?php

namespace App\Contracts\Repositories;
interface Repository {
    public function create();
    public function find(int $id);
    public function update(array $data, $id);
    public function delete(int $id);
}