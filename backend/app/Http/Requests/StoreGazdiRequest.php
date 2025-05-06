<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGazdiRequest extends FormRequest
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
            "id"=>["integer", "required", "min:0"],
            "nev"=>["required", "string", "max:100"],
            "cim"=>["required", "string", "max:255"],
            "telefon"=>["required", "string", "min:0"],
            "email"=>["required", "email:rfc"],
            "password"=>["required", "string", "min:8"]
        ];
    }
}
