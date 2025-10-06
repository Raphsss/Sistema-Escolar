@extends('layouts.master')

@section('title', 'Detalhes do Aluno')

@section('content')
    <div class="p-8">
        <!-- Header com Breadcrumb -->
        <div class="mb-8">
            <div class="flex items-center gap-4 mb-4">
                <a href="{{ route('alunos.index') }}"
                    class="p-2 text-gray-400 hover:text-white hover:bg-slate-700 rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <div>
                    <h1 class="text-3xl font-bold text-white">{{ $aluno->nome }}</h1>
                    <p class="text-gray-400 mt-1">Informações detalhadas do aluno</p>
                </div>
            </div>

            <!-- Actions Bar -->
            <div class="flex gap-3">
                <a href="{{ route('alunos.edit', $aluno->id) }}"
                    class="flex items-center gap-2 px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Editar Aluno
                </a>

                <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este aluno?')"
                        class="flex items-center gap-2 px-4 py-2.5 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        Excluir
                    </button>
                </form>
            </div>
        </div>

        <!-- Grid de Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Card Principal - Dados Pessoais -->
            <div class="lg:col-span-2 bg-slate-800 rounded-xl p-6 space-y-6">
                <div class="border-b border-slate-700 pb-4">
                    <h2 class="text-xl font-semibold text-white flex items-center gap-2">
                        <svg class="w-6 h-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Dados Pessoais
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nome Completo -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-400 uppercase tracking-wide">Nome Completo</label>
                        <p class="text-lg text-white font-medium">{{ $aluno->nome }}</p>
                    </div>

                    <!-- Email -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-400 uppercase tracking-wide">E-mail</label>
                        <p class="text-lg text-white font-medium flex items-center gap-2">
                            {{ $aluno->email ?? 'Não informado' }}
                            @if ($aluno->email)
                                <a href="mailto:{{ $aluno->email }}"
                                    class="text-indigo-400 hover:text-indigo-300 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </a>
                            @endif
                        </p>
                    </div>

                    <!-- Data de Nascimento -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-400 uppercase tracking-wide">Data de
                            Nascimento</label>
                        <p class="text-lg text-white font-medium">
                            {{ $aluno->data_nascimento ? \Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y') : 'Não informado' }}
                        </p>
                    </div>

                    <!-- Sexo -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-400 uppercase tracking-wide">Sexo</label>
                        <p class="text-lg text-white font-medium">{{ $aluno->sexo ?? 'Não informado' }}</p>
                    </div>

                    <!-- Telefone -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-400 uppercase tracking-wide">Telefone</label>
                        <p class="text-lg text-white font-medium flex items-center gap-2">
                            {{ $aluno->telefone ?? 'Não informado' }}
                            @if ($aluno->telefone)
                                <a href="tel:{{ $aluno->telefone }}"
                                    class="text-indigo-400 hover:text-indigo-300 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sidebar - Cards de Resumo -->
            <div class="space-y-6">
                <!-- Card RA -->
                <div class="bg-slate-800 rounded-xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wide">Registro Acadêmico</h3>
                        <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                        </svg>
                    </div>
                    <p class="text-3xl font-bold text-white">{{ $aluno->ra }}</p>
                </div>

                <!-- Card Curso/Turma -->
                <div class="bg-slate-800 rounded-xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wide">Curso/Turma</h3>
                        <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <p class="text-3xl font-bold text-white">{{ $aluno->curso ?? 'N/A' }}</p>
                    @if ($aluno->turma)
                        <p class="text-sm text-gray-400 mt-2">Turma: {{ $aluno->turma }}</p>
                    @endif
                </div>

                <!-- Card Status -->
                <div class="bg-slate-800 rounded-xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wide">Status</h3>
                        <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-500/10 text-green-400 border border-green-500/20">
                        Ativo
                    </span>
                </div>
            </div>
        </div>

        <!-- Card de Atividades Recentes (opcional) -->
        <div class="mt-6 bg-slate-800 rounded-xl p-6">
            <div class="border-b border-slate-700 pb-4 mb-6">
                <h2 class="text-xl font-semibold text-white flex items-center gap-2">
                    <svg class="w-6 h-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Informações Adicionais
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-indigo-500/10 rounded-lg">
                        <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Data de Cadastro</p>
                        <p class="text-white font-medium">
                            {{ $aluno->created_at ? $aluno->created_at->format('d/m/Y') : 'Não disponível' }}</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="p-3 bg-indigo-500/10 rounded-lg">
                        <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Última Atualização</p>
                        <p class="text-white font-medium">
                            {{ $aluno->updated_at ? $aluno->updated_at->format('d/m/Y') : 'Não disponível' }}</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="p-3 bg-indigo-500/10 rounded-lg">
                        <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">ID do Sistema</p>
                        <p class="text-white font-medium">#{{ $aluno->id }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
