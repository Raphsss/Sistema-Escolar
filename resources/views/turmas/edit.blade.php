@extends('layouts.master')

@section('title', 'Editar Turma')

@section('content')
    <div class="p-12">
        <x-page-header 
            title="Editar Turma"
            :subtitle="$turma->nome"
            :backUrl="route('turmas.index')"
        />

        <div class="max-w-2xl">
            <form action="{{ route('turmas.update', $turma->id) }}" method="post"
                class="bg-zinc-900 border border-zinc-800 rounded-xl p-8">
                @csrf
                @method('PUT')

                <div class="space-y-8">
                    <x-form-input 
                        label="Nome da Turma" 
                        name="nome"
                        placeholder="Digite o nome da turma"
                        :error="$errors->first('nome')" 
                        value="{{ $turma->nome }}" 
                    />

                    <x-form-input 
                        label="Código" 
                        name="codigo"
                        placeholder="Digite o código da turma"
                        :error="$errors->first('codigo')"
                        value="{{ $turma->codigo }}" 
                    />
                </div>

                <x-form-actions 
                    cancelUrl="javascript:history.back()"
                    submitText="Salvar Alterações"
                />
            </form>
        </div>
    </div>
@endsection
