@extends('layouts.master')

@section('title', 'Listagem de Alunos')


@section('content')

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-100">Alunos</h2>
        <a href="{{ route('alunos.create') }}" class="px-4 py-2 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">+ Aluno</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-gray-900 rounded-xl shadow-lg">
            <thead>
                <tr class="text-left text-gray-400 border-b border-gray-800">
                    <th class="py-3 px-4">Nome</th>
                    <th class="py-3 px-4">RA</th>
                    <th class="py-3 px-4">Turma</th>
                    <th class="py-3 px-4">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                    <tr class="border-b border-gray-800 hover:bg-gray-800 transition">
                        <td class="py-2 px-4"><a href="{{ route('alunos.show', $aluno->id) }}" class="text-blue-400 hover:underline">{{  $aluno->nome }}</a></td>
                        <td class="py-2 px-4">{{ $aluno->ra }}</td>
                        <td class="py-2 px-4">{{ $aluno->turma }}</td>
                        <td class="py-2 px-4 flex gap-2">
                            <a href="{{ route('alunos.edit', $aluno->id) }}" class="px-3 py-1 rounded bg-blue-700 text-white text-xs font-semibold hover:bg-blue-800 transition">Atualizar</a>
                            <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este aluno?')" class="px-3 py-1 rounded bg-red-700 text-white text-xs font-semibold hover:bg-red-800 transition">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
