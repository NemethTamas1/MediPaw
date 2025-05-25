<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTreatmentRequest extends FormRequest
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
            "worker_id"=>["integer", "min:0", "exists:workers,id"],
            "clinic_id"=>["integer", "min:0", "exists:clinics,id"],
            "description"=>["string", "max:255", "nullable"],
            "date"=>["date", "nullable"],
            "paid"=>["boolean"],
            "animal_id"=>["integer", "min:0", "exists:animals,id"]

            //Jó a date? Vagy dateTime?
        ];
    }
}
