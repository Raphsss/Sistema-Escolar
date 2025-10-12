@extends('layouts.master')

@section('title', 'Novo Aluno')

@section('content')
<div class="p-12">
    <x-page-header 
        title="Novo Aluno"
        subtitle="Preencha os dados para cadastrar um novo aluno"
        :backUrl="route('alunos.index')"
    />

    <div class="max-w-3xl">
        <form action="{{ route('alunos.store') }}" method="post"
            class="bg-zinc-900 border border-zinc-800 rounded-xl p-8">
            @csrf

            <div class="space-y-8">
                <x-form-input 
                    label="Nome completo" 
                    name="nome" 
                    placeholder="Digite o nome completo do aluno"
                    :error="$errors->first('nome')" 
                    value="{{ old('nome') }}" 
                />

                <div class="grid grid-cols-2 gap-6">
                    <x-form-input 
                        label="Registro Acadêmico" 
                        name="ra" 
                        placeholder="202300123"
                        :error="$errors->first('ra')" 
                        value="{{ old('ra') }}" 
                    />

                    <x-form-input 
                        type="email" 
                        label="E-mail" 
                        name="email"
                        placeholder="aluno@email.com"
                        :error="$errors->first('email')" 
                        value="{{ old('email') }}" 
                    />
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <x-form-input 
                        type="date" 
                        label="Data de nascimento"
                        name="data_nascimento"
                        value="{{ old('data_nascimento') }}"
                        :error="$errors->first('data_nascimento')" 
                    />

                    <x-form-select label="Sexo" name="sexo" :error="$errors->first('sexo')">
                        <option value="">Selecione</option>
                        <option value="Masculino" {{ old('sexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="Feminino" {{ old('sexo') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                        <option value="Outro" {{ old('sexo') == 'Outro' ? 'selected' : '' }}>Outro</option>
                    </x-form-select>
                </div>

                <x-form-input 
                    label="Telefone" 
                    name="telefone"
                    placeholder="(11) 99999-9999"
                    :error="$errors->first('telefone')" 
                    value="{{ old('telefone') }}" 
                />

                <x-form-select label="Turma" name="turma" :error="$errors->first('turma')">
                    <option value="">Selecione uma turma</option>
                    @foreach ($turmas as $turma)
                        <option value="{{ $turma->id }}" {{ old('turma') == $turma->id ? 'selected' : '' }}>
                            {{ $turma->codigo }}
                        </option>
                    @endforeach
                </x-form-select>
            </div>

            <x-form-actions 
                :cancelUrl="route('alunos.index')"
                submitText="Cadastrar Aluno"
            />
        </form>
    </div>
</div>
@endsection
