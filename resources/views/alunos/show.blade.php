@extends('layouts.master')

@section('title', 'Exibir aluno')

@section('content')
    <div class="max-w-md mx-auto bg-gray-900 p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-gray-100 mb-6">Informações do aluno</h1>
        <div class="space-y-3">
            <p class="text-gray-300"><span class="font-semibold text-gray-100">Nome:</span> {{ $aluno->nome }}</p>
            <p class="text-gray-300"><span class="font-semibold text-gray-100">RA:</span> {{ $aluno->ra }}</p>
            <p class="text-gray-300"><span class="font-semibold text-gray-100">Curso:</span> {{ $aluno->curso }}</p>
        </div>
    </div>
@endsection