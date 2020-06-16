<?php

namespace App\Contracts\Repositories;

interface BuilderRepository {
    public function search(string $query);
    public function filter(array $filters = []);
}