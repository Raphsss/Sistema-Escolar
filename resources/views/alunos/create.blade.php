@extends('layouts.master')

@section('title', 'Cadastro de Aluno')


@section('content')

<form action="{{ route('alunos.store') }}" method="post">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">

    <label for="ra">RA:</label>
    <input type="text" name="ra" id="ra">

    <label for="curso">Curso:</label>
    <input type="text" name="curso" id="curso">

    <button type="submit">Cadastrar</button>
</form>

@endsection()