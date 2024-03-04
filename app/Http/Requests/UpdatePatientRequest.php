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
            'name' => 'required|string|min:2|max:100',
            'email' => 'required|email|unique:patients,email,' . $this->patient->id,
            'password' => 'required|string|min:6|max:254',
            'wasbornat' => 'required|date',
            'address' => 'required|string|min:10|max:100',
            'tell' => 'required|string|min:9|max:30',
            'cpf' => 'required|string|size:11',
            'typeofblood' => 'required|string|min:2|max:3',
            'pic' => 'required|file',
            'helfcareplan_id' => 'required|exists:helfcareplans,id|integer',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'password' => 'senha',
            'wasbornat' => 'data de nascimento',
            'address' => 'endereço',
            'tell' => 'telefone',
            'typeofblood' => 'tipo sanguíneo',
            'pic' => 'foto',
            'helfcareplan_id' => 'id do plano de saúde'
        ];
    }
}
