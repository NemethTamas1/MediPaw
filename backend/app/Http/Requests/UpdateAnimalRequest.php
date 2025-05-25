<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnimalRequest extends FormRequest
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
            "name"=>["string", "max:100"],
            "age"=>["integer", "min:0", "max:25"],
            "breed"=>["required", "string", "min:0"],
            "colour"=>["required", "string", "max:100"],
            "weight"=>["required", "numeric", "min:0"],
        ];
    }
}
