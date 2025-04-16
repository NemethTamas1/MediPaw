<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKezelesRequest extends FormRequest
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
            "id"=>["integer", "min:0"],
            "orvos_id"=>["integer", "min:0", "exists:dolgozok,id"],
            "rendelo_id"=>["integer", "min:0", "exists:rendelok,id"],
            "leiras"=>["string", "max:255", "nullable"],
            "idopont"=>["date", "nullable"],
            "kifizetve"=>["boolean"],
            "allat_id"=>["integer", "min:0", "exists:allatok,id"]

            //Jó a date? Vagy dateTime?
        ];
    }
}
