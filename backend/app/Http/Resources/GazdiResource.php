<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GazdiResource extends JsonResource
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
            "nev"=>$this->nev,
            "cim"=>$this->cim,
            "telefon"=>$this->telefon,
            "email"=>$this->email
        ];
    }
}
