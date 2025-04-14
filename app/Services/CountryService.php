<?php

namespace App\Services;

use App\Repositories\Interfaces\CountryRepositoryInterface;

class CountryService
{
    public function __construct(protected CountryRepositoryInterface $repository)
    {

    }

    public function all()
    {
        return $this->repository->all();
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(array $data, int $id)
    {
        return $this->repository->update($data, $id);
    }

    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }
}