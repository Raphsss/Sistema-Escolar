@extends('layouts.master')

@section('title', 'Editar Turma')

@section('content')
    <div class="p-12">
        <!-- Header -->
        <div class="mb-12">
            <div class="flex items-center gap-6">
                <a href="{{ route('turmas.index') }}"
                    class="p-2 text-zinc-400 hover:text-zinc-200 hover:bg-zinc-800 rounded-lg transition-all duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <div>
                    <h1 class="text-3xl font-semibold text-zinc-50 tracking-tight">Editar Turma</h1>
                    <p class="text-zinc-500 mt-2">{{ $turma->nome }}</p>
                </div>
            </div>
        </div>

        <!-- Formulário -->
        <div class="max-w-2xl">
            <form action="{{ route('turmas.update', $turma->id) }}" method="post"
                class="bg-zinc-900 border border-zinc-800 rounded-xl p-8">
                @csrf
                @method('PUT')

                <div class="space-y-8">
                    <div>
                        <x-form-input 
                            label="Nome da Turma" 
                            name="nome" 
                            placeholder="Digite o nome da turma"
                            :error="$errors->first('nome')" 
                            value="{{ $turma->nome }}" 
                        />
                    </div>

                    <div>
                        <x-form-input 
                            label="Código" 
                            name="codigo" 
                            placeholder="Digite o código da turma"
                            :error="$errors->first('codigo')"
                            value="{{ $turma->codigo }}" 
                        />
                    </div>
                </div>

                <!-- Ações -->
                <div class="flex gap-4 mt-10 pt-8 border-t border-zinc-800">
                    <a href="{{ route('turmas.index') }}"
                        class="flex-1 py-3 text-center text-zinc-300 hover:text-zinc-50 text-sm font-medium rounded-lg border border-zinc-700 hover:border-zinc-600 transition-all duration-200">
                        Cancelar
                    </a>
                    <button type="submit"
                        class="flex-1 py-3 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                        Salvar Alterações
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
