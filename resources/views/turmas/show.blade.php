@extends('layouts.master')

@section('title', 'Exibir turma')

@section('content')
    <div class="max-w-md mx-auto bg-gray-900 p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-gray-100 mb-6">Informações da turma</h1>
        <div class="space-y-3">
            <p class="text-gray-300">
                <span class="font-semibold text-gray-100">Nome:</span> {{ $turma->nome }}
            </p>
            <p class="text-gray-300">
                <span class="font-semibold text-gray-100">Código:</span> {{ $turma->codigo }}
            </p>
        </div>
    </div>
@endsection
