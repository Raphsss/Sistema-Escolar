@extends('layouts.master')

@section('title', 'Exibir aluno')

@section('content')
    <div>
        <h1>Informaçẽs do aluno</h1>

        <p>Nome: {{ $aluno->nome }}</p>
        <p>RA: {{ $aluno->ra }}</p>
        <p>Curso: {{ $aluno->curso }}</p>
    </div>
@endsection