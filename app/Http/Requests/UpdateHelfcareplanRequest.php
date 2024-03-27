<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHelfcareplanRequest extends FormRequest
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
            'name' => 'required|min:2|max:100',
            'description' => 'required|min:10|max:200',
            'discount' => 'required|numeric|min:0|max:100',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'description' => 'desscrição',
            'discount' => 'desconto',
        ];
    }
}
