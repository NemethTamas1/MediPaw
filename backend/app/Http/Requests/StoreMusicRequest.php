<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMusicRequest extends FormRequest
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
            //Music modell mezők
            'format' => ['required', 'string', 'in:Bakelit,Kazetta,CD'],
            "price" => ["required", "integer", "min:0"],

            //Merch modell kiegészítők
            'artist_id' => ['required', 'integer', 'exists:artists,id'],
            'name' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string', 'max:255'],
        ];
    }
}
