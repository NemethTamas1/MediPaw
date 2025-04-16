<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RendeloResource extends JsonResource
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
            "allat_id"=>$this->allat_id,
            "gazdi_id"=>$this->gazdi_id,
            "dolgozo_id"=>$this->dolgozo_id,
            "cim"=>$this->cim,
            "nyitvatartas"=>$this->nyitvatartas,
            "dolgozok"=>DolgozoResource::collection($this->whenLoaded("dolgozok")),
            "allatok"=>AllatResource::collection($this->whenLoaded("allatok"))
        ];
    }
}
