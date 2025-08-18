@extends('layouts.master')

@section('title', 'Editar aluno')


@section('content')
    <form action="{{ route('alunos.update', $aluno->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $aluno->nome }}">

        <label for="ra">RA:</label>
        <input type="text" name="ra" id="ra" value="{{ $aluno->ra }}">

        <label for="curso">Curso:</label>
        <input type="text" name="curso" id="curso" value="{{ $aluno->curso }}">

        <button type="submit">Atualizar</button>
    </form>
@endsection
