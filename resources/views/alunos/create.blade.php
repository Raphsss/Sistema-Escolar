@extends('layouts.master')

@section('title', 'Novo Aluno')

@section('content')
    <div class="p-12">
        <!-- Header -->
        <div class="mb-12">
            <div class="flex items-center gap-6">
                <a href="{{ route('alunos.index') }}"
                    class="p-2 text-zinc-400 hover:text-zinc-200 hover:bg-zinc-800 rounded-lg transition-all duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <div>
                    <h1 class="text-3xl font-semibold text-zinc-50 tracking-tight">Novo Aluno</h1>
                    <p class="text-zinc-500 mt-2">Preencha os dados para cadastrar um novo aluno</p>
                </div>
            </div>
        </div>

        <!-- Formulário -->
        <div class="max-w-3xl">
            <form action="{{ route('alunos.store') }}" method="post"
                class="bg-zinc-900 border border-zinc-800 rounded-xl p-8">
                @csrf

                <div class="space-y-8">
                    <div>
                        <x-form-input label="Nome completo" name="nome" placeholder="Digite o nome completo do aluno"
                            :error="$errors->first('nome')" value="{{ old('nome') }}" />
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <x-form-input label="Registro Acadêmico" name="ra" placeholder="202300123" :error="$errors->first('ra')"
                            value="{{ old('ra') }}" />

                        <x-form-input type="email" label="E-mail" name="email" placeholder="aluno@email.com"
                            :error="$errors->first('email')" value="{{ old('email') }}" />
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <x-form-input type="date" label="Data de nascimento" name="data_nascimento"
                            value="{{ old('data_nascimento') }}" :error="$errors->first('data_nascimento')" />

                        <x-form-select label="Sexo" name="sexo" :error="$errors->first('sexo')">
                            <option value="">Selecione</option>
                            <option value="Masculino" {{ old('sexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                            <option value="Feminino" {{ old('sexo') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                            <option value="Outro" {{ old('sexo') == 'Outro' ? 'selected' : '' }}>Outro</option>
                        </x-form-select>
                    </div>

                    <div>
                        <x-form-input label="Telefone" name="telefone" placeholder="(11) 99999-9999" :error="$errors->first('telefone')"
                            value="{{ old('telefone') }}" />
                    </div>

                    <div>
                        <x-form-input label="Turma" name="turma" placeholder="" :error="$errors->first('turma')"
                            value="{{ old('') }}" />
                    </div>
                </div>

                <!-- Ações -->
                <div class="flex gap-4 mt-10 pt-8 border-t border-zinc-800">
                    <a href="{{ route('alunos.index') }}"
                        class="flex-1 py-3 text-center text-zinc-300 hover:text-zinc-50 text-sm font-medium rounded-lg border border-zinc-700 hover:border-zinc-600 transition-all duration-200">
                        Cancelar
                    </a>
                    <button type="submit"
                        class="flex-1 py-3 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                        Cadastrar Aluno
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
