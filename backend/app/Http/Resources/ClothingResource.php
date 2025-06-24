<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClothingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "merch_id" => $this->merch_id,
            "name" => $this->name,
            "size" => $this->size,
            "sex" => $this->sex,
            "color" => $this->color,
            "price" => $this->price
        ];
    }
}
