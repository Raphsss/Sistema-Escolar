@extends('layouts.master')

@section('title', 'Cadastro de Aluno')


@section('content')

    <form action="{{ route('alunos.store') }}" method="post"
        class="max-w-md mx-auto bg-gray-900 p-8 rounded-xl shadow-lg flex flex-col gap-6">
        @csrf
        <x-form-input label="Nome" name="nome" placeholder="Nome" :error="$errors->first('nome')" />

        <x-form-input label="RA" name="ra" placeholder="RA" :error="$errors->first('ra')" />

        <x-form-input label="E-mail" name="email" placeholder="email" :error="$errors->first('email')" />

        <x-form-input label="Data nascimento" name="data_nascimento" placeholder="Data Nascimento" :error="$errors->first('data_nascimento')" />

        <x-form-select label="Curso" name="curso_id" :options="$cursos" :error="$errors->first('curso_id')" />

        <x-form-input label="Sexo" name="sexo" placeholder="sexo" :error="$errors->first('sexo')" />

        <x-form-input label="Telefone" name="Telefone" placeholder="Telefone" :error="$errors->first('Telefone')" />

        <x-button>Salvar</x-button>
    </form>

@endsection
