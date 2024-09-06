<?php

namespace App\Http\Requests\Villa;

use Illuminate\Foundation\Http\FormRequest;

class VillaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'country_id' => ['integer'],
            'city_id' => ['integer'],
            'area_id' => ['integer'],
            'price' => ['integer'],
            'numberOfToilets' => ['array'],
            'numberOfBathrooms' => ['array'],
            'numberOfFloors' => ['array'],
            'numberOfBedrooms' => ['array'],
        ];
    }
}
