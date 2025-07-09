<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MerchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "image_url" => $this->image_url,
            "type" => $this->type,
            "artist_id" => $this->artist_id,

            // Polimorf kapcsolt modell mezői — biztonságosan
            "price" => $this->merchable?->price,
            "format" => $this->merchable?->format ?? null,
            "size" => $this->merchable?->size ?? null,
            "color" => $this->merchable?->color ?? null,
            "sex" => $this->merchable?->sex ?? null,
        ];
    }
}
