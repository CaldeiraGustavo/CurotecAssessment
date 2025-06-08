<?php

namespace App\Services;

use App\Models\Task;
use App\Repositories\Contracts\TaskRepositoryInterface;

class TaskService
{
    public function __construct(
        private TaskRepositoryInterface $repository
    ) {}

    /**
     * Delete task by ID.
     *
     * @param  int  $id
     *
     * @throws ModelNotFoundException
     */
    public function destroy(string $id): bool
    {
        return $this->repository->findOrFail($id)->delete();
    }

    /**
     * Create new Task.
     *
     * @param  int  $id
     *
     * @throws ModelNotFoundException
     */
    public function store(array $data): Task
    {
        return $this->repository->create($data);
    }

    /**
     * Return task by ID.
     *
     * @param  int  $id
     *
     * @throws ModelNotFoundException
     */
    public function show(string $id): Task
    {
        return $this->repository->findOrFail($id);
    }

    /**
     * Update task by ID.
     *
     * @param  int  $id
     *
     * @throws ModelNotFoundException
     */
    public function update(array $data, string $id): bool
    {
        return $this->repository->findOrFail($id)->update($data);
    }
}
