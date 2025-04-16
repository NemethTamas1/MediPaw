<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AllatResource extends JsonResource
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
            "kor"=>$this->kor,
            "fajta"=>$this->fajta,
            "szin"=>$this->szin,
            "suly"=>$this->suly . " kg",

            //Kérdés, hogy a leírást vissza kell-e adni.
            //Továbbá kérdés, hogy a rendelőt vissza kell-e adni ahol az állatot ellátták.
        ];
    }
}
