<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TartozkodikResource extends JsonResource
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
            "rendelo_id"=>$this->rendelo_id,
            "leiras"=>$this->leiras,
            "idopont"=>$this->idopont,
            "kifizetve"=>$this->kifizetve ? "igen" : "nem"
        ];
    }
}
