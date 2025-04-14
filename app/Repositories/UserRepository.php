<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function all(): \Illuminate\Database\Eloquent\Collection
    {
        return User::all();
    }

    public function create(array $data): ?User
    {
        return User::create($data);
    }

    public function update(array $data, int $id): int
    {
        $model = User::findOrFail($id);

        return $model->update($data);
    }

    public function delete(int $id): bool
    {
        $model = User::findOrFail($id);

        return $model->delete();
    }

    public function find(int $id): ?User
    {
        return User::find($id);
    }
}