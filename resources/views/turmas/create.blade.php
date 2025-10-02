@extends('layouts.master')

@section('title', 'Cadastro de Turma')

@section('content')

    <form action="{{ route('turmas.store') }}" method="post"
        class="max-w-md mx-auto bg-gray-900 p-8 rounded-xl shadow-lg flex flex-col gap-6">
        @csrf

        <x-form-input label="Nome da Turma" name="nome" placeholder="Nome da Turma" :error="$errors->first('nome')"
            value="{{ old('nome') }}" required="true" />

        <x-form-input label="Código" name="codigo" placeholder="Código da Turma" :error="$errors->first('codigo')"
            value="{{ old('codigo') }}" required="true" />

        <x-button>
            Salvar
        </x-button>
    </form>

@endsection
