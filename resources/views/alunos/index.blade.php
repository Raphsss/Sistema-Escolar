@extends('layouts.master')

@section('title', 'Listagem de Alunos')

@section('content')
    <div class="p-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-white">Alunos</h1>
            <button
                class="flex items-center gap-2 px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                <a href="{{ route('alunos.create') }}">Novo Aluno</a>
            </button>
        </div>

        <!-- Tabela -->
        <div class="bg-slate-900 rounded-xl overflow-hidden">
            <!-- Header da Tabela -->
            <div class="grid grid-cols-4 gap-4 p-4 bg-slate-800 border-b border-slate-700">
                <div class="text-sm font-medium text-gray-400 uppercase tracking-wider">NOME</div>
                <div class="text-sm font-medium text-gray-400 uppercase tracking-wider">MATRÍCULA</div>
                <div class="text-sm font-medium text-gray-400 uppercase tracking-wider">CÓDIGO</div>
                <div class="text-sm font-medium text-gray-400 uppercase tracking-wider">AÇÕES</div>
            </div>

            <!-- Corpo da Tabela -->
            @foreach ($alunos as $aluno)
                <div
                    class="grid grid-cols-4 gap-4 p-4 border-b border-slate-700 hover:bg-slate-800 transition-colors group">
                    <!-- Nome e Email -->
                    <div class="flex flex-col">
                        <a href="{{ route('alunos.show', $aluno->id) }}"
                            class="font-medium text-white hover:text-indigo-400 transition-colors">
                            {{ $aluno->nome }}
                        </a>
                        <span class="text-sm text-gray-400">{{ $aluno->email ?? 'joao.silva@example.com' }}</span>
                    </div>

                    <!-- Matrícula -->
                    <div class="flex items-center">
                        <span class="text-gray-300">{{ $aluno->ra }}</span>
                    </div>

                    <!-- Código -->
                    <div class="flex items-center">
                        <span class="text-gray-300">{{ $aluno->turma }}</span>
                    </div>

                    <!-- Ações -->
                    <div class="flex items-center gap-2">
                        <a href="{{ route('alunos.edit', $aluno->id) }}"
                            class="p-2 text-gray-400 hover:text-indigo-400 hover:bg-slate-700 rounded-lg transition-colors"
                            title="Editar">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </a>

                        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este aluno?')"
                                class="p-2 text-gray-400 hover:text-red-400 hover:bg-slate-700 rounded-lg transition-colors"
                                title="Excluir">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
