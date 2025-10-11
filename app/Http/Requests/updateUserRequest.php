<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class updateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|min:3|max:255',
            'ra' => 'required|min:3|max:8',
            'email' => [
                'required',
                'email',
                Rule::unique('alunos', 'email')->ignore($this->route('aluno'))
            ],
            'data_nascimento' => 'required|date',
            'sexo' => 'required',
            'telefone' => 'required|min:10|max:15',
            'turma' => 'required'
        ];
    }
}
