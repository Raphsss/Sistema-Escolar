@extends('layouts.master')

@section('title', 'Editar aluno')


@section('content')
    <form action="{{ route('alunos.update', $aluno->id) }}" method="post"
        class="max-w-md mx-auto bg-gray-900 p-8 rounded-xl shadow-lg flex flex-col gap-6">
        @csrf
        @method('PUT')
        <x-form-input label="Nome" name="nome" placeholder="Nome" :error="$errors->first('nome')" value="{{ $aluno->nome }}" />

        <x-form-input label="RA" name="ra" placeholder="RA" :error="$errors->first('ra')" value="{{ $aluno->ra }}" />

        <x-form-input type="email" label="E-mail" name="email" placeholder="email" :error="$errors->first('email')"
            value="{{ $aluno->email }}" />

        <x-form-input type="date" label="Data nascimento" name="data_nascimento" placeholder="Data Nascimento"''
            value="{{ $aluno->data_nascimento }}" :error="$errors->first('data_nascimento')" />

        <x-form-select label="Sexo" name="sexo" :error="$errors->first('sexo')">
            <option value="Masculino" {{ ($aluno->sexo ?? old('sexo')) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="Feminino" {{ ($aluno->sexo ?? old('sexo')) == 'Feminino' ? 'selected' : '' }}>Feminino</option>
            <option value="Outro" {{ ($aluno->sexo ?? old('sexo')) == 'Outro' ? 'selected' : '' }}>Outro</option>
        </x-form-select>

        <x-form-input label="Telefone" name="telefone" placeholder="Telefone" :error="$errors->first('telefone')"
            value="{{ $aluno->telefone }}" />

        <x-button>Atualizar</x-button>
    </form>
@endsection
