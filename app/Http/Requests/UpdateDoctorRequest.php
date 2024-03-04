<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDoctorRequest extends FormRequest
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
                'email' => 'required|email|max:100|unique:doctors,email,' . $this->doctor->id,
                'password' => 'required|string|min:6|max:254',
                'wasbornat' => 'required|date',
                'address' => 'required|string|min:10|max:100',
                'tell' => 'required|string|min:9|max:30',
                'cpf' => 'required|string|size:11',
                'workhours' => 'required|string|in:diurno,noturno,integral',
                'crm' => 'required|integer|size:6',
                'pic' => 'required|file',
                'specialty_id' => 'required|exists:specialties,id|integer',
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
            'workhours' => 'turno',
            'pic' => 'foto',
            'specialty_id' => 'id do plano de saúde',
        ];
    }
}
