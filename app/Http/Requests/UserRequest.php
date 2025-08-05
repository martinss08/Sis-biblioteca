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
        $userId = $this->route('id');

        return [
            'name'     => ['required', 'min:3', 'max:100', 'unique:users,name,' . $userId],
            'email'    => ['required', 'email', 'unique:users,email,' . $userId],
            'password' => $this->isMethod('post') ? 'required|min:6' : 'nullable|min:6',
            // 'tipo'     => ['required']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome deve ser preenchido',
            'name.min'      => 'O campo nome deve ter no minimo 3 caracteres',
            'name.max'      => 'O campo nome deve ter no maximo 100 caracteres',
            'name.max'      => 'O este nome ja esta em uso',

            'email.required' => 'O campo deve ser preenchido',
            'email.email' => 'Deve ser passado um email valido',
            'email.unique' => 'O email ja esta em uso',

            'password.required' => 'O campo deve ser corretamente preenchido',
            'password.min'      => 'Deve ter no minimo 6 caracteres',
            
            // 'user.tipo'     => 'O campo deve ser corretamente preenchido',
        ];

    }
}
