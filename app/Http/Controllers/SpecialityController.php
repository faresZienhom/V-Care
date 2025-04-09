<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SpecialityResource;
use App\Http\Requests\SpecialityRequest;

class SpecialityController extends Controller
{
    public function index()
    {
        $specialities = Speciality::paginate(10);
        return response()->json(['Speciality Data' => SpecialityResource::collection($specialities)]);
    }


    public function show(Speciality $speciality)
    {
        return response()->json(['Speciality Data' => new SpecialityResource($speciality)]);
    }

    public function store(SpecialityRequest $request)
    {
        $speciality = Speciality::create($this->mapRequestToCulomns($request->validated()));
        return response()->json(['Speciality Data' => new SpecialityResource($speciality)], 201);
    }

    public function edit(SpecialityRequest $request, Speciality $speciality)
    {

        $speciality->update($this->mapRequestToCulomns($request->validated()));
        return response()->json(['Speciality Data' => new SpecialityResource($speciality)], 201);
    }


    public function destroy(Speciality $speciality)
    {

        $speciality->delete();
        return response()->json(['Speciality Data' => new SpecialityResource($speciality)], 201);
    }

    private function mapRequestToCulomns($data)
    {
        return ['name' => $data['speciality_name']];
    }
}