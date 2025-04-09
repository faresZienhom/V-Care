<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Http\Requests\CountryRequest;
use App\Services\CountryService;

class CountryController extends Controller
{
    public function __construct(protected CountryService $service) {
    }
    public function index()
    {
        return response()->json(['Countries' => CountryResource::collection($this->service->all() )]);
    }


    public function show($id)
    {
        return response()->json(['Country' => new CountryResource($this->service->find($id))]);
    }

    public function store(CountryRequest $request)
    {
        return response()->json(['Country' => new CountryResource($this->service->create($this->mapRequestToCulomns($request->validated())))]);
    }


    public function edit(CountryRequest $request, $id)
    {
        return response()->json(['Country' => new CountryResource($this->service->update($this->mapRequestToCulomns($request->validated()),$id))], 204);
    }


    public function destroy($id)
    {
        $this->service->delete($id);
        return response()->json([], 204);
    }

    private function mapRequestToCulomns($data)
    {
        return ['name' => $data['country_name']];
    }
}