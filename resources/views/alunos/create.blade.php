@extends('layouts.master')

@section('title', 'Cadastro de Aluno')


@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('alunos.store') }}" method="post" class="max-w-md mx-auto bg-gray-900 p-8 rounded-xl shadow-lg flex flex-col gap-6">
    @csrf
    <div>
        <label for="nome" class="block text-gray-300 mb-1">Nome</label>
        <input type="text" name="nome" id="nome" class="w-full px-4 py-2 rounded-lg bg-gray-800 text-gray-100 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600" >
    </div>
    <div>
        <label for="ra" class="block text-gray-300 mb-1">RA</label>
        <input type="text" name="ra" id="ra" class="w-full px-4 py-2 rounded-lg bg-gray-800 text-gray-100 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600" >
    </div>
    <div>
        <label for="curso" class="block text-gray-300 mb-1">Curso</label>
        <input type="text" name="curso" id="curso" class="w-full px-4 py-2 rounded-lg bg-gray-800 text-gray-100 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600" >
    </div>
    <button type="submit" class="w-full py-2 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">Cadastrar</button>
</form>

@endsection()