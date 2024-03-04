<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSpecialtyRequest extends FormRequest
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
            'description' => 'required|min:10|max:100',
            'value' => 'required|numeric',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'description' => 'desscrição',
            'value' => 'preço',
        ];
    }
}
