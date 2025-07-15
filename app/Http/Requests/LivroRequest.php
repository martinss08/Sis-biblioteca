<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroRequest extends FormRequest
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
            'titulo' => ['required', 'min:3', 'max:150', 'unique:livros,titulo'],
            'autor' => ['required', 'min:3', 'max:150', 'string'],
            'isbn' => ['required'],
            'ano' => ['required', 'integer', 'min:1500', 'max:' . date('Y')],
            'quantidade' => ['required', 'integer', 'min:1', 'max:1000'],

        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'O título é obrigatório.',
            'titulo.min' => 'O título deve ter ao menos :min caracteres.',
            'titulo.max' => 'O título não pode ultrapassar :max caracteres.',
            'titulo.unique' => 'Este título já está cadastrado.',

            'autor.required' => 'O autor é obrigatório.',
            'autor.min' => 'O nome do autor deve ter ao menos :min caracteres.',
            'autor.max' => 'O nome do autor não pode ultrapassar :max caracteres.',
            'autor.string' => 'O autor deve ser um texto válido.',

            'isbn.required' => 'O ISBN é obrigatório.',
            // 'isbn.regex' => 'O ISBN deve conter 10 ou 13 dígitos, podendo terminar com X.',

            'ano.required' => 'O ano de publicação é obrigatório.',
            'ano.digits' => 'O ano deve conter exatamente :digits dígitos.',
            'ano.integer' => 'O ano deve ser um número inteiro válido.',
            'ano.after_or_equal' => 'O ano deve ser maior ou igual a 1500.',
            'ano.before_or_equal' => 'O ano não pode ser maior que o ano atual.',

            'quantidade.required' => 'A quantidade é obrigatória.',
            'quantidade.integer' => 'A quantidade deve ser um número inteiro.',
            'quantidade.min' => 'A quantidade deve ser no mínimo :min.',
            'quantidade.max' => 'A quantidade deve ser no máximo :max.',
        ];
    }
}
