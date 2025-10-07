@extends('layouts.master')

@section('title', 'Detalhes do Aluno')

@section('content')
    <div class="p-12">
        <div class="mb-12">
            <div class="flex items-start justify-between">
                <div class="flex items-start gap-6">
                    <!--  Seta para voltar  -->
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

                <div class="flex gap-3">
                    <a href="{{ route('alunos.edit', $aluno->id) }}"
                        class="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                        Editar
                    </a>
                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Confirma a exclusão deste aluno?')"
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
                <!-- Dados Pessoais -->
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-8">
                    <h2 class="text-sm font-medium text-zinc-400 uppercase tracking-wider mb-8">Dados Pessoais</h2>
                    
                    <div class="space-y-8">
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">Nome Completo</label>
                                <p class="text-zinc-50 text-base">{{ $aluno->nome }}</p>
                            </div>

                            <div>
                                <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">Data de Nascimento</label>
                                <p class="text-zinc-50 text-base">
                                    {{ $aluno->data_nascimento ? \Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y') : '—' }}
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">E-mail</label>
                                @if ($aluno->email)
                                    <a href="mailto:{{ $aluno->email }}"
                                        class="text-blue-400 hover:text-blue-300 text-base transition-colors duration-200">
                                        {{ $aluno->email }}
                                    </a>
                                @else
                                    <p class="text-zinc-500 text-base">—</p>
                                @endif
                            </div>

                            <div>
                                <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">Telefone</label>
                                @if ($aluno->telefone)
                                    <a href="tel:{{ $aluno->telefone }}"
                                        class="text-blue-400 hover:text-blue-300 text-base transition-colors duration-200">
                                        {{ $aluno->telefone }}
                                    </a>
                                @else
                                    <p class="text-zinc-500 text-base">—</p>
                                @endif
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">Sexo</label>
                            <p class="text-zinc-50 text-base">{{ $aluno->sexo ?? '—' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Dados Acadêmicos -->
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-8">
                    <h2 class="text-sm font-medium text-zinc-400 uppercase tracking-wider mb-8">Dados Acadêmicos</h2>
                    
                    <div class="space-y-8">
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">Registro Acadêmico</label>
                                <p class="text-zinc-50 text-base font-medium">{{ $aluno->ra }}</p>
                            </div>

                            <div>
                                <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">Turma</label>
                                <p class="text-zinc-50 text-base">{{ $aluno->turma->nome ?? '—' }}</p>
                            </div>
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
                        <span class="text-zinc-50 text-sm font-medium">Ativo</span>
                    </div>
                </div>

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
