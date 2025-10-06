@extends('layouts.master')

@section('title', 'Turmas')

@section('content')
    <div class="p-12">
        <!-- Header com Espaço Generoso -->
        <div class="flex justify-between items-center mb-12">
            <div>
                <h1 class="text-3xl font-semibold text-zinc-50 tracking-tight">Turmas</h1>
                <p class="text-zinc-500 mt-2">Gerencie as turmas cadastradas no sistema</p>
            </div>
            <a href="{{ route('turmas.create') }}"
                class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                Adicionar Turma
            </a>
        </div>

        <!-- Tabela Limpa -->
        <div class="bg-zinc-900 border border-zinc-800 rounded-xl overflow-hidden">
            <!-- Header -->
            <div class="grid grid-cols-12 gap-8 px-8 py-4 bg-zinc-900/50 border-b border-zinc-800">
                <div class="col-span-5 text-xs font-medium text-zinc-500 uppercase tracking-wider">Turma</div>
                <div class="col-span-4 text-xs font-medium text-zinc-500 uppercase tracking-wider">Código</div>
                <div class="col-span-3 text-xs font-medium text-zinc-500 uppercase tracking-wider text-right">Ações</div>
            </div>

            <!-- Linhas -->
            @foreach ($turmas as $turma)
                <div
                    class="grid grid-cols-12 gap-8 px-8 py-5 border-b border-zinc-800/50 hover:bg-zinc-800/30 transition-colors duration-200">
                    <div class="col-span-5 flex items-center">
                        <a href="{{ route('turmas.show', $turma->id) }}"
                            class="text-zinc-50 hover:text-blue-400 transition-colors duration-200 font-medium">
                            {{ $turma->nome }}
                        </a>
                    </div>

                    <div class="col-span-4 flex items-center text-zinc-300">
                        {{ $turma->codigo }}
                    </div>

                    <div class="col-span-3 flex items-center justify-end gap-3">
                        <a href="{{ route('turmas.edit', $turma->id) }}"
                            class="text-zinc-400 hover:text-zinc-200 transition-colors duration-200" title="Editar">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </a>

                        <form action="{{ route('turmas.destroy', $turma->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Confirma a exclusão desta turma?')"
                                class="text-zinc-400 hover:text-red-400 transition-colors duration-200" title="Excluir">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
