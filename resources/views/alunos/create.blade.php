@extends('layouts.master')

@section('title', 'Cadastro de Aluno')


@section('content')

    <form action="{{ route('alunos.store') }}" method="post"
        class="max-w-md mx-auto bg-gray-900 p-8 rounded-xl shadow-lg flex flex-col gap-6">
        @csrf
        <x-form-input label="Nome" name="nome" placeholder="Nome" :error="$errors->first('nome')" />

        <x-form-input label="RA" name="ra" placeholder="RA" :error="$errors->first('ra')" />

        <x-form-input label="Curso" name="curso" placeholder="Curso" :error="$errors->first('curso')" />
        <button type="submit"
            class="w-full py-2 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">Cadastrar</button>
    </form>

@endsection
