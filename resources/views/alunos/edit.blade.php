@extends('layouts.master')

@section('title', 'Editar aluno')


@section('content')
    <form action="{{ route('alunos.update', $aluno->id) }}" method="post"
        class="max-w-md mx-auto bg-gray-900 p-8 rounded-xl shadow-lg flex flex-col gap-6">
        @csrf
        @method('PUT')
        <x-form-input label="Nome" name="nome" placeholder="Nome" :error="$errors->first('nome')" :value="$aluno->nome"/>

        <x-form-input label="RA" name="ra" placeholder="RA" :error="$errors->first('ra')" :value="$aluno->ra"/>

        <x-form-input label="Curso" name="curso" placeholder="Curso" :error="$errors->first('curso')" :value="$aluno->curso"/>
        <button type="submit"
            class="w-full py-2 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">Atualizar</button>
    </form>
@endsection
