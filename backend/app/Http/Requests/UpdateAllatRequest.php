<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAllatRequest extends FormRequest
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
            "nev"=>["string", "max:100"],
            "kor"=>["integer", "min:0", "max:25"],
            "oltva"=>["boolean", "required"],
            "fajta"=>["required", "string", "max:100"],
            "gazdi_id"=>["required", "exists:gazdik,id"],
        ];
    }
}
