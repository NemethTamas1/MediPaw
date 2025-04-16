<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRendeloRequest extends FormRequest
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
            "id"=>["required", "integer", "min:0"],
            "allat_id"=>["required", "integer", "min:0", "exists:allatok,id"],
            "gazdi_id"=>["required", "integer", "min:0", "exists:gazdik,id"],
            "dolgozo_id"=>["required", "integer", "min:0", "exists:dolgozok,id"],
            "cim"=>["required", "string", "max:255"],
            "nyitvatartas"=>["required", "string", "max:255"],
        ];
    }
}
