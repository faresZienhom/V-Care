<?php
namespace App\Repositories;

use App\Models\DoctorTitle;
use App\Repositories\Interfaces\DoctorTitleInterface;

class DoctorTitleRepository implements DoctorTitleInterface{
    function getAll() {
        return DoctorTitle::get();
    }
    function getById($id) {
        return DoctorTitle::find($id);
    }
    function create($data) {
        return DoctorTitle::create($data);
    }
    function edit($id, $data) {
        return DoctorTitle::where('id',$id)->update($data);
    }
    function delete($id) {
        return DoctorTitle::where('id',$id)->delete();
    }
}
