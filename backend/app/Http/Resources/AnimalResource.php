<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=>$this->id,
            "name"=>$this->name,
            "age"=>$this->age,
            "breed"=>$this->breed,
            "colour"=>$this->colour,
            "weight"=>$this->weight . " kg",

            //Kérdés, hogy a leírást vissza kell-e adni.
            //Továbbá kérdés, hogy a rendelőt vissza kell-e adni ahol az állatot ellátták.
        ];
    }
}
