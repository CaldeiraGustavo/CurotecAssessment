<?php

namespace App\Repositories\Eloquent;

use App\Models\Task;
use App\Repositories\Contracts\TaskRepositoryInterface;

/**
 * Class TaskRepository.
 */
class TaskRepository extends AbstractRepository implements TaskRepositoryInterface
{
    /**
     * @return string
     *                Return the model
     */
    protected function resolveModel(): Model
    {
        return app(Task::class);
    }
}
