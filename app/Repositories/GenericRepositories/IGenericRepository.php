<?php

namespace App\Repositories\GenericRepositories;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface IGenericRepository
{
    public function insert(Model $model): Model;
    public function insertRange(Collection $models): void;
    public function hasAny(callable $callback): bool;
    public function selectAll(callable $callback = null): Collection;
    public function selectSingle(callable $callback): ?Model;
    public function selectFirst(callable $callback): ?Model;

    public function update(Model $model): Model;

    public function delete(Model $model): void;
}
