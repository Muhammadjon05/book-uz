<?php

namespace App\Repositories\GenericRepositories;

use App\Repositories\GenericRepositories\IGenericRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


class GenericRepository implements IGenericRepository
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function insert(Model $model): Model
    {
        $model->save();
        return $model;
    }

    public function insertRange(Collection $models): void
    {
        $this->model->insert($models->toArray());
    }

    public function hasAny(callable $callback): bool
    {
        return $this->model->where($callback)->exists();
    }

    public function selectAll(callable $callback = null): Collection
    {
        return $this->model->when($callback, function ($query) use ($callback) {
            $query->where($callback);
        })->get();
    }

    public function selectSingle(callable $callback): ?Model
    {
        return $this->model->where($callback)->first();
    }

    public function selectFirst(callable $callback): ?Model
    {
        return $this->model->where($callback)->first();
    }

    public function update(Model $model): Model
    {
        $model->update();
        return $model;
    }

    public function delete(Model $model): void
    {
        $model->delete();
    }
}
