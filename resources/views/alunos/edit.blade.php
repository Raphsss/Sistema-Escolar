@extends('layouts.master')

@section('title', 'Editar aluno')


@section('content')
    <form action="{{ route('alunos.update', $aluno->id) }}" method="post" class="max-w-md mx-auto bg-gray-900 p-8 rounded-xl shadow-lg flex flex-col gap-6">
        @csrf
        @method('PUT')
        <div>
            <label for="nome" class="block text-gray-300 mb-1">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ $aluno->nome }}" class="w-full px-4 py-2 rounded-lg bg-gray-800 text-gray-100 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
        </div>
        <div>
            <label for="ra" class="block text-gray-300 mb-1">RA</label>
            <input type="text" name="ra" id="ra" value="{{ $aluno->ra }}" class="w-full px-4 py-2 rounded-lg bg-gray-800 text-gray-100 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
        </div>
        <div>
            <label for="curso" class="block text-gray-300 mb-1">Curso</label>
            <input type="text" name="curso" id="curso" value="{{ $aluno->curso }}" class="w-full px-4 py-2 rounded-lg bg-gray-800 text-gray-100 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
        </div>
        <button type="submit" class="w-full py-2 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">Atualizar</button>
    </form>
@endsection
