<?php

namespace App\Contracts\Repositories;

use App\Contracts\Repositories\Repository;

interface FooRepository extends Repository {
    public function all();
}