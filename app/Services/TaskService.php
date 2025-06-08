<?php

namespace App\Services;

use App\Repositories\Contracts\{TaskInterface};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use LdapRecord\Exceptions\AlreadyExistsException;

class TaskService
{
    public function __construct(
        private TaskInterface $repository
    ) {
    }

    public function destroy(int $id): bool
    {
        return $this->repository->find($id)->delete();
    }
}
