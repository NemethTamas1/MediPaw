<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClothingRequest extends FormRequest
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
            // Clothing mezők
            "size" => ["required", "string", "in:XS,S,M,L,XL"],
            "sex" => ["required", "string", "max:10", "in:M,F,U"],
            "color" => ["required", "string", "max:30"],
            "price" => ["required", "min:0", "integer"],

            // Merch mezők
            'artist_id' => ['required', 'integer', 'exists:artists,id'],
            'name' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string', 'max:255'],
        ];
    }
}
