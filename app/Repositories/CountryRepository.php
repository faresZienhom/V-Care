<?php

namespace App\Repositories;

use App\Models\Country;
use App\Repositories\Interfaces\CountryRepositoryInterface;

class CountryRepository implements CountryRepositoryInterface
{
    public function all(): \Illuminate\Database\Eloquent\Collection
    {
        return Country::all();
    }

    public function create(array $data): ?Country
    {
        return Country::create($data);
    }

    public function update(array $data, int $id): int
    {
        $model = Country::findOrFail($id);

        return $model->update($data);
    }

    public function delete(int $id): bool
    {
        $model = Country::findOrFail($id);

        return $model->delete();
    }

    public function find(int $id): ?Country
    {
        return Country::find($id);
    }
}