@extends('layouts.master')

@section('title', 'Detalhes da Turma')

@section('content')
    <div class="p-12">
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

                <x-action-buttons :editUrl="route('turmas.edit', $turma->id)" :deleteAction="route('turmas.destroy', $turma->id)" deleteMessage="Confirma a exclusão desta turma?" />
            </div>
        </div>

        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2 space-y-6">
                <x-info-card title="Informações da Turma">
                    <div class="space-y-8">
                        <div class="grid grid-cols-2 gap-8">
                            <x-info-field label="Nome da Turma" :value="$turma->nome" />
                            <x-info-field label="Código" :value="$turma->codigo" type="bold" />
                        </div>
                    </div>
                </x-info-card>

                <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-8">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-sm font-medium text-zinc-400 uppercase tracking-wider">Alunos Matriculados</h2>
                        <span class="px-3 py-1 bg-zinc-800 text-zinc-300 text-xs font-medium rounded-full">
                            {{ $turma->alunos->count() }} {{ $turma->alunos->count() === 1 ? 'aluno' : 'alunos' }}
                        </span>
                    </div>

                    @if ($turma->alunos->isEmpty())
                        <x-empty-state message="Nenhum aluno matriculado nesta turma" :icon="'<path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z\'/> ?>'" />
                    @else
                        <div class="space-y-3">
                            @foreach ($turma->alunos as $aluno)
                                <div
                                    class="flex items-center justify-between p-4 bg-zinc-800/50 hover:bg-zinc-800 border border-zinc-700/50 rounded-lg transition-all duration-200 group">
                                    <div class="flex items-center gap-4">
                                        <div>
                                            <h3 class="text-zinc-50 font-medium text-sm">{{ $aluno->nome }}</h3>
                                            <p class="text-zinc-500 text-xs mt-0.5">Matrícula: {{ $aluno->ra }}</p>
                                        </div>
                                    </div>

                                    <a href="{{ route('alunos.show', $aluno->id) }}"
                                        class="opacity-0 group-hover:opacity-100 px-3 py-1.5 bg-zinc-700 hover:bg-indigo-600 text-zinc-300 hover:text-white text-xs font-medium rounded-lg transition-all duration-200">
                                        Ver perfil
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <div class="space-y-6">

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
