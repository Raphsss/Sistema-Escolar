@extends('layouts.master')

@section('title', 'Cadastro de Aluno')


@section('content')

    <form action="{{ route('professors.store') }}" method="post"
        class="max-w-md mx-auto bg-gray-900 p-8 rounded-xl shadow-lg flex flex-col gap-6">
        @csrf
        <x-form-input label="Nome" name="nome" placeholder="Nome" :error="$errors->first('nome')" />

        <x-button>Salvar</x-button>
    </form>

@endsection
