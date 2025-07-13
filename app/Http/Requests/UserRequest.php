<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'user.name'     => ['required', 'min:3', 'max:100', 'unique:user,name'],
            'user.email'    => ['required', 'email', 'unique:user,email'],
            'user.password' => ['required', 'min:6'],
            'user.tipo'     => ['required']
        ];
    }

    public function messages()
    {
        return [
            'user.required' => 'O campo nome deve ser preenchido',
            'user.min'      => 'O campo nome deve ter no minimo 3 caracteres',
            'user.max'      => 'O campo nome deve ter no maximo 100 caracteres',
            'user.max'      => 'O este nome ja esta em uso',

            'user.email' => 'O campo deve ser preenchido',
            'user.email' => 'Deve ser passado um email valido',
            'user.email' => 'O email ja esta em uso',

            'user.password' => 'O campo deve ser corretamente preenchido',
            'user.min'      => 'Deve ter no minimo 6 caracteres',
            
            'user.tipo'     => 'O campo deve ser corretamente preenchido',
        ];

    }
}
