<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMerchRequest extends FormRequest
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
            "artist_id" => ["required", "integer", "exists:artists,id", "min:0"],
            "name" => ["required", "string", "min:0", "max:100"],
            "description" => ["string", "required"],
            "type" => ["required", "string", "max:30", "in:music,clothing"],
            "imageUrl" => ["required", "string", "max:255"],
        ];
    }
}
