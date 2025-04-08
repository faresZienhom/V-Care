<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorTitleRequest;
use App\Http\Resources\DoctorTitleResource;
use App\Models\DoctorTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DoctorTitleController extends Controller
{
    public function index(){
        $titles= DoctorTitle::get();
        // return response()->json(['titles'=>DoctorTitleResource::collection($titles)]);
        // return response()->success(DoctorTitleResource::collection($titles));
        return Response::success(DoctorTitleResource::collection($titles));

    }

    function show(DoctorTitle $title) {
        return response()->json(['data' => new DoctorTitleResource($title)]);
    }
    function store(DoctorTitleRequest $request) {
        $title = DoctorTitle::create($this->mapRequestToColumns($request->validated()));
        return response()->json(['data' => new DoctorTitleResource($title)],201);
    }
    function edit(DoctorTitle $title, DoctorTitleRequest $request) {
        $title->update($this->mapRequestToColumns($request->validated()));
        return response()->json([],204);
    }
    function delete(DoctorTitle $title) {
        $title->delete();
        return response()->json([],204);
    }
    private function mapRequestToColumns($data)  {
        return ['name' => $data['doctor_name']];
    }

}
