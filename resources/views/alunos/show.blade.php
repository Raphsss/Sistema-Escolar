@extends('layouts.master')

@section('title', 'Detalhes do Aluno')

@section('content')
    <div class="p-8">
        <!-- Header Simplificado -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <a href="{{ route('alunos.index') }}"
                        class="p-2 text-gray-400 hover:text-white hover:bg-slate-700 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                    <div>
                        <h1 class="text-2xl font-semibold text-white">{{ $aluno->nome }}</h1>
                        <p class="text-sm text-gray-400 mt-1">RA: {{ $aluno->ra }}</p>
                    </div>
                </div>

                <!-- Ações -->
                <div class="flex gap-3">
                    <a href="{{ route('alunos.edit', $aluno->id) }}"
                        class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors">
                        Editar
                    </a>
                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este aluno?')"
                            class="px-4 py-2 bg-slate-700 hover:bg-red-600 text-white text-sm font-medium rounded-lg transition-colors">
                            Excluir
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Informações do Aluno -->
        <div class="bg-slate-800 rounded-lg overflow-hidden">
            <!-- Dados Pessoais -->
            <div class="p-6 border-b border-slate-700">
                <h2 class="text-sm font-medium text-gray-400 uppercase mb-4">Dados Pessoais</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="text-sm text-gray-400">Nome Completo</label>
                        <p class="text-base text-white mt-1">{{ $aluno->nome }}</p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-400">E-mail</label>
                        <p class="text-base text-white mt-1">
                            @if ($aluno->email)
                                <a href="mailto:{{ $aluno->email }}"
                                    class="text-indigo-400 hover:underline">{{ $aluno->email }}</a>
                            @else
                                <span class="text-gray-500">Não informado</span>
                            @endif
                        </p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-400">Data de Nascimento</label>
                        <p class="text-base text-white mt-1">
                            {{ $aluno->data_nascimento ? \Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y') : 'Não informado' }}
                        </p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-400">Sexo</label>
                        <p class="text-base text-white mt-1">{{ $aluno->sexo ?? 'Não informado' }}</p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-400">Telefone</label>
                        <p class="text-base text-white mt-1">
                            @if ($aluno->telefone)
                                <a href="tel:{{ $aluno->telefone }}"
                                    class="text-indigo-400 hover:underline">{{ $aluno->telefone }}</a>
                            @else
                                <span class="text-gray-500">Não informado</span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <!-- Dados Acadêmicos -->
            <div class="p-6 border-b border-slate-700">
                <h2 class="text-sm font-medium text-gray-400 uppercase mb-4">Dados Acadêmicos</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="text-sm text-gray-400">Registro Acadêmico</label>
                        <p class="text-base text-white mt-1">{{ $aluno->ra }}</p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-400">Curso</label>
                        <p class="text-base text-white mt-1">{{ $aluno->curso ?? 'Não informado' }}</p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-400">Turma</label>
                        <p class="text-base text-white mt-1">{{ $aluno->turma ?? 'Não informado' }}</p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-400">Status</label>
                        <p class="text-base text-white mt-1">
                            <span class="text-green-400">● Ativo</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Metadados -->
            <div class="p-6 bg-slate-700/30">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm">
                    <div>
                        <span class="text-gray-400">Cadastrado em:</span>
                        <span class="text-white ml-2">{{ $aluno->created_at ? $aluno->created_at->format('d/m/Y') : 'N/A' }}</span>
                    </div>
                    <div>
                        <span class="text-gray-400">Atualizado em:</span>
                        <span class="text-white ml-2">{{ $aluno->updated_at ? $aluno->updated_at->format('d/m/Y') : 'N/A' }}</span>
                    </div>
                    <div>
                        <span class="text-gray-400">ID:</span>
                        <span class="text-white ml-2">#{{ $aluno->id }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
