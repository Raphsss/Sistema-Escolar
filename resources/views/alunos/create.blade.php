@extends('layouts.master')

@section('title', 'Cadastro de Aluno')


@section('content')

    <form action="{{ route('alunos.store') }}" method="post"
        class="max-w-md mx-auto bg-gray-900 p-8 rounded-xl shadow-lg flex flex-col gap-6">
        @csrf
        <x-form-input label="Nome" name="nome" placeholder="Nome" :error="$errors->first('nome')" value="{{ old('nome') }}"/>

        <x-form-input label="RA" name="ra" placeholder="RA" :error="$errors->first('ra')" value="{{ old('ra') }}"/>

        <x-form-input type="email" label="E-mail" name="email" placeholder="email" :error="$errors->first('email')" value="{{ old('email') }}"/>

        <x-form-input type="date" label="Data nascimento" name="data_nascimento" placeholder="Data Nascimento" value="{{ old('data_nascimento') }}"
            :error="$errors->first('data_nascimento')" />

        <x-form-select label="Sexo" name="sexo" :error="$errors->first('sexo')">
            <option value="Masculino" {{ old('sexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="Feminino" {{ old('sexo') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
            <option value="Outro" {{ old('sexo') == 'Outro' ? 'selected' : '' }}>Outro</option>
        </x-form-select>

        <x-form-input label="Telefone" name="telefone" placeholder="Telefone" :error="$errors->first('telefone')" value="{{ old('telefone') }}"/>

        <x-button>Salvar</x-button>
    </form>

@endsection
