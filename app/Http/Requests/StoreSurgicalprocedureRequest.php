<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSurgicalprocedureRequest extends FormRequest
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
            'specialty_id' => 'required',
            'doctor_id' => 'required',
            'inicialtime' => 'required',
            'finaltime' => 'required',
            'value' => 'required',
            'patient_id' => 'nullable',
        ];
    }
}
