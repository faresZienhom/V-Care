<?php
namespace App\Repositories\Interfaces;

interface DoctorTitleInterface{
    function getAll();
    function getById($id);
    function create($data);
    function edit($id, $data);
    function delete($id);
}