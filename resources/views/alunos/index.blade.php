@extends('layouts.master')

@section('title', 'Listagem de Alunos')


@section('content')

    <button>
        <a href="{{ route('alunos.create') }}">+ Aluno</a>
    </button>

    <div>
        <table>
            <tr>
                <th>Nome</th>
                <th>RA</th>
                <th>Curso</th>
                <th>Ações</th>
            </tr>
            @foreach ($alunos as $aluno)
                <tr>
                    <td><a href="{{ route('alunos.show', $aluno->id) }}">{{  $aluno->nome }}</a></td>
                    <td>{{ $aluno->ra }}</td>
                    <td>{{ $aluno->curso }}</td>
                    <td><a href="{{ route('alunos.edit', $aluno->id) }}">Atualizar</a></td>
                    <td>
                        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este aluno?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
