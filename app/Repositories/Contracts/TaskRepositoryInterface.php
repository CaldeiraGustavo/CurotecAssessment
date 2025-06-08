<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;

interface TaskRepositoryInterface
{
    public function create(array $data): Model;

    public function findOrFail($id, $columns = ['*']): ?Model;
}
