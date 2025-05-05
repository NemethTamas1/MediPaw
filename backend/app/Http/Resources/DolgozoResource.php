<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DolgozoResource extends JsonResource
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
            "nev"=>$this->name,
            "telefon"=>$this->telefon,
            "email"=>$this->email,
            "role"=>$this->role,
            "beosztas"=>$this->beosztas
        ];
    }
}
