<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KeeperResource extends JsonResource
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
            "address"=>$this->address,
            "phone"=>$this->phone,
            "email"=>$this->email,
            "animals" => AnimalResource::collection($this->whenLoaded('animals'))
        ];
    }
}
