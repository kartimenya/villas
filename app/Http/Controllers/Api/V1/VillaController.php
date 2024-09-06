<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Villa\VillaRequest;
use App\Http\Resources\VillaResource;
use App\Models\Villa;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class VillaController extends Controller
{
    public function index(VillaRequest $request)
    {
        $data = $request->validated();

        $villas = Villa::query()
            ->where([
                'country_id' => $data['country_id'],
                'city_id' => $data['city_id'],
                'area_id' => $data['area_id'],
            ])
            ->whereBetween('numberOfToilets', $data['numberOfToilets'])
            ->whereBetween('numberOfBathrooms', $data['numberOfBathrooms'])
            ->whereBetween('numberOfFloors', $data['numberOfFloors'])
            ->whereBetween('numberOfBedrooms', $data['numberOfBedrooms'])
            ->whereHas('apartments', function (Builder $query) use ($data) {
                $query->whereBetween('cost', $data['price']);
            })->get();


        return VillaResource::collection($villas);
    }
}
