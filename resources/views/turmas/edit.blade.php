@extends('layouts.master')

@section('title', 'Editar turma')

@section('content')
    <form action="{{ route('turmas.update', $turma->id) }}" method="post"
        class="max-w-md mx-auto bg-gray-900 p-8 rounded-xl shadow-lg flex flex-col gap-6">
        @csrf
        @method('PUT')

        <x-form-input label="Nome" name="nome" placeholder="Nome da Turma" :error="$errors->first('nome')" value="{{ $turma->nome }}"
            required="true" />

        <x-form-input label="Código" name="codigo" placeholder="Código da Turma" :error="$errors->first('codigo')"
            value="{{ $turma->codigo }}" required="true" />

        <x-button>Atualizar</x-button>
    </form>
@endsection
