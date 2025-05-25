<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkerRequest extends FormRequest
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
            "name"=>["required", "string", "min:0", "max:255"],
            "phone"=>["required", "string", "min:0", "max:100"],
            "role"=>["required", "string", "in:admin,user"],
            "post"=>["required", "string", "in:orvos,takarito,asszisztens"],
            "email"=>["required", "string", "email:rfc"],
            "password"=>["required", "string", "min:8"],
        ];
    }
}
