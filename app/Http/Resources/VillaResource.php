<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VillaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'hasParking' => $this->hasParking,
            'hasPool' => $this->hasPool,
            'hasInstallmentPlan' => $this->hasInstallmentPlan,
            'hasManagementCompany' => $this->hasManagementCompany,
            'numberOfToilets' => $this->numberOfToilets,
            'numberOfBathrooms' => $this->numberOfBathrooms,
            'numberOfFloors' => $this->numberOfFloors,
            'numberOfBedrooms' => $this->numberOfBedrooms,
            'apartments' => ApartmentsResource::collection($this->apartments)
        ];
    }
}
