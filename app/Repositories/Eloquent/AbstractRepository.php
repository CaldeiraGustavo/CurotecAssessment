<?php

namespace App\Repositories\Eloquent;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbstractRepository.
 */
abstract class AbstractRepository
{
    /**
     * @var Model
     */
    protected $model;

    protected $wheres;

    protected $query;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    abstract protected function resolveModel(): Model;

    public function find($id, $columns = ['*']): ?Model
    {
        return $this->model->find($id, $columns);
    }

    public function findOrFail($id, $columns = ['*']): ?Model
    {
        return $this->model->findOrFail($id, $columns);
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function where($column, $value, $operator = '=')
    {
        return $this->model->where($column, $value, $operator);
    }

    public function paginate(int $limit): Paginator
    {
        return $this->model->paginate($limit);
    }
}
