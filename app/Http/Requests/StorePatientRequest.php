<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
            'email' => 'required|email|max:100|unique:doctors,email',
            'password' => 'required|string|min:6|max:30',
            'wasbornat' => 'required|date',
            'address' => 'nullable|string|min:10|max:100',
            'tell' => 'nullable|string|min:9|max:30',
            'cpf' => 'nullable|string|size:15',
            'typeofblood' => 'nullable|string|min:2|max:3',
            'pic' => 'nullable|file',
            'helfcareplan_id' => 'nullable|exists:helfcareplans,id|integer',
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
