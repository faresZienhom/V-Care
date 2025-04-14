<?php
namespace App\Services;

use App\Models\DoctorTitle;
use App\Repositories\Interfaces\DoctorTitleInterface;

class DoctorTitleService{
    public function __construct(public DoctorTitleInterface $repository) {
    }
    function index() {
        return $this->repository->getAll();
    }
    function getById($id) {
        return $this->repository->getById($id);
    }
    function store($data) {
        return $this->repository->create($data);
    }
    function edit($id, $data) {
        return $this->repository->edit($id,$data);
    }
    function delete($id) {
        return $this->repository->delete($id);
    }
}