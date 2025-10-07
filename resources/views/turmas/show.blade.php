@extends('layouts.master')

@section('title', 'Detalhes da Turma')

@section('content')
    <div class="p-12">
        <!-- Header Espaçoso -->
        <div class="mb-12">
            <div class="flex items-start justify-between">
                <div class="flex items-start gap-6">
                    <a href="javascript:history.back()"
                        class="mt-1 p-2 text-zinc-400 hover:text-zinc-200 hover:bg-zinc-800 rounded-lg transition-all duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                    <div>
                        <h1 class="text-3xl font-semibold text-zinc-50 tracking-tight">{{ $turma->nome }}</h1>
                        <p class="text-zinc-500 mt-2">Código: {{ $turma->codigo }}</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <a href="{{ route('turmas.edit', $turma->id) }}"
                        class="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                        Editar
                    </a>
                    <form action="{{ route('turmas.destroy', $turma->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Confirma a exclusão desta turma?')"
                            class="px-5 py-2.5 bg-zinc-800 hover:bg-red-600 text-zinc-300 hover:text-white text-sm font-medium rounded-lg transition-all duration-200">
                            Excluir
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Grid de Informações -->
        <div class="grid grid-cols-3 gap-6">
            <!-- Coluna Principal - 2/3 -->
            <div class="col-span-2 space-y-6">
                <!-- Informações da Turma -->
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-8">
                    <h2 class="text-sm font-medium text-zinc-400 uppercase tracking-wider mb-8">Informações da Turma</h2>
                    
                    <div class="space-y-8">
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">Nome da Turma</label>
                                <p class="text-zinc-50 text-base">{{ $turma->nome }}</p>
                            </div>

                            <div>
                                <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">Código</label>
                                <p class="text-zinc-50 text-base font-medium">{{ $turma->codigo }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alunos da Turma (Placeholder) -->
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-8">
                    <h2 class="text-sm font-medium text-zinc-400 uppercase tracking-wider mb-6">Alunos Matriculados</h2>
                    
                    <div class="flex items-center justify-center py-12">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-zinc-700 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                            </svg>
                            <p class="text-zinc-500 text-sm">Nenhum aluno matriculado nesta turma</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar - 1/3 -->
            <div class="space-y-6">
                <!-- Status -->
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-8">
                    <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-4">Status</label>
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                        <span class="text-zinc-50 text-sm font-medium">Ativa</span>
                    </div>
                </div>

                <!-- Metadados -->
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-8 space-y-6">
                    <div>
                        <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">Cadastrada em</label>
                        <p class="text-zinc-300 text-sm">
                            {{ $turma->created_at ? $turma->created_at->format('d/m/Y') : '—' }}
                        </p>
                    </div>

                    <div>
                        <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">Última atualização</label>
                        <p class="text-zinc-300 text-sm">
                            {{ $turma->updated_at ? $turma->updated_at->format('d/m/Y \à\s H:i') : '—' }}
                        </p>
                    </div>

                    <div class="pt-6 border-t border-zinc-800">
                        <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">ID do Sistema</label>
                        <p class="text-zinc-400 text-sm font-mono">#{{ str_pad($turma->id, 6, '0', STR_PAD_LEFT) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
