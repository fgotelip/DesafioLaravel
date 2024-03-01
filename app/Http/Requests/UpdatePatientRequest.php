<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:254',
            'email' => 'required|email|unique:patients,email,' . $this->patient->id,
            'password' => 'required',
            'wasbornat' => 'required',
            'address' => 'required',
            'tell' => 'required',
            'cpf' => 'required',
            'typeofblood' => 'required',
            'pic' => 'required',
            'helfcareplan_id' => 'required|exists:helfcareplans,id|integer',
        ];
    }
}
