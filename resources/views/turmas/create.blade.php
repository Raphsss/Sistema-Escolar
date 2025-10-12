@extends('layouts.master')

@section('title', 'Nova Turma')

@section('content')
<div class="p-12">
    <x-page-header 
        title="Nova Turma"
        subtitle="Preencha os dados para cadastrar uma nova turma"
        :backUrl="route('turmas.index')"
    />

    <div class="max-w-2xl">
        <form action="{{ route('turmas.store') }}" method="post" class="bg-zinc-900 border border-zinc-800 rounded-xl p-8">
            @csrf
            
            <div class="space-y-8">
                <x-form-input 
                    label="Nome da Turma" 
                    name="nome"
                    placeholder="Digite o nome da turma"
                    :error="$errors->first('nome')" 
                    value="{{ old('nome') }}"
                />

                <x-form-input 
                    label="Código" 
                    name="codigo"
                    placeholder="Digite o código da turma"
                    :error="$errors->first('codigo')" 
                    value="{{ old('codigo') }}"
                />
            </div>
            
            <x-form-actions 
                :cancelUrl="route('turmas.index')"
                submitText="Cadastrar Turma"
            />
        </form>
    </div>
</div>
@endsection
