@extends('layouts.master')

@section('title', 'Detalhes do Aluno')

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
                        <h1 class="text-3xl font-semibold text-zinc-50 tracking-tight">{{ $aluno->nome }}</h1>
                        <p class="text-zinc-500 mt-2">RA: {{ $aluno->ra }}</p>
                    </div>
                </div>

                <x-action-buttons 
                    :editUrl="route('alunos.edit', $aluno->id)"
                    :deleteAction="route('alunos.destroy', $aluno->id)"
                    deleteMessage="Confirma a exclusão deste aluno?"
                />
            </div>
        </div>

        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2 space-y-6">
                <x-info-card title="Dados Pessoais">
                    <div class="space-y-8">
                        <div class="grid grid-cols-2 gap-8">
                            <x-info-field label="Nome Completo" :value="$aluno->nome" />
                            <x-info-field 
                                label="Data de Nascimento" 
                                :value="$aluno->data_nascimento ? \Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y') : null" 
                            />
                        </div>

                        <div class="grid grid-cols-2 gap-8">
                            <x-info-field label="E-mail" :value="$aluno->email" type="email" />
                            <x-info-field label="Telefone" :value="$aluno->telefone" type="tel" />
                        </div>

                        <x-info-field label="Sexo" :value="$aluno->sexo" />
                    </div>
                </x-info-card>

                <x-info-card title="Dados Acadêmicos">
                    <div class="space-y-8">
                        <div class="grid grid-cols-2 gap-8">
                            <x-info-field label="Registro Acadêmico" :value="$aluno->ra" type="bold" />
                            <x-info-field label="Turma" :value="$aluno->turma->nome ?? null" />
                        </div>
                    </div>
                </x-info-card>
            </div>

            <div class="space-y-6">

                <!-- Metadados -->
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-8 space-y-6">
                    <div>
                        <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">Cadastrado em</label>
                        <p class="text-zinc-300 text-sm">
                            {{ $aluno->created_at ? $aluno->created_at->format('d/m/Y') : '—' }}
                        </p>
                    </div>

                    <div>
                        <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">Última atualização</label>
                        <p class="text-zinc-300 text-sm">
                            {{ $aluno->updated_at ? $aluno->updated_at->format('d/m/Y \à\s H:i') : '—' }}
                        </p>
                    </div>

                    <div class="pt-6 border-t border-zinc-800">
                        <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">ID do Sistema</label>
                        <p class="text-zinc-400 text-sm font-mono">#{{ str_pad($aluno->id, 6, '0', STR_PAD_LEFT) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
