@extends('layouts.master')

@section('title', 'Cadastro de Aluno')

@section('content')
    <div class="p-8">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center gap-4 mb-2">
                <a href="{{ route('alunos.index') }}"
                    class="p-2 text-gray-400 hover:text-white hover:bg-slate-700 rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <div>
                    <h1 class="text-3xl font-bold text-white">Cadastro de Aluno</h1>
                    <p class="text-gray-400 mt-1">Preencha os dados para cadastrar um novo aluno</p>
                </div>
            </div>
        </div>

        <!-- Formulário -->
        <div class="max-w-4xl">
            <form action="{{ route('alunos.store') }}" method="post" class="bg-slate-800 p-8 rounded-xl space-y-6">
                @csrf

                <!-- Grid de campos -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <x-form-input label="Nome completo" name="nome" placeholder="Digite o nome completo"
                            :error="$errors->first('nome')" value="{{ old('nome') }}" />
                    </div>

                    <x-form-input label="Registro Acadêmico (RA)" name="ra" placeholder="Ex: 202300123"
                        :error="$errors->first('ra')" value="{{ old('ra') }}" />

                    <x-form-input type="email" label="E-mail" name="email" placeholder="exemplo@email.com"
                        :error="$errors->first('email')" value="{{ old('email') }}" />

                    <x-form-input type="date" label="Data de nascimento" name="data_nascimento"
                        value="{{ old('data_nascimento') }}" :error="$errors->first('data_nascimento')" />

                    <x-form-select label="Sexo" name="sexo" :error="$errors->first('sexo')">
                        <option value="">Selecione uma opção</option>
                        <option value="Masculino" {{ old('sexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="Feminino" {{ old('sexo') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                        <option value="Outro" {{ old('sexo') == 'Outro' ? 'selected' : '' }}>Outro</option>
                    </x-form-select>

                    <div class="md:col-span-2">
                        <x-form-input label="Telefone" name="telefone" placeholder="(11) 99999-9999" :error="$errors->first('telefone')"
                            value="{{ old('telefone') }}" />
                    </div>
                </div>

                <!-- Botões de ação -->
                <div class="flex gap-4 pt-6 border-t border-slate-700">
                    <a href="{{ route('alunos.index') }}"
                        class="flex-1 py-3 px-4 bg-slate-700 text-gray-300 font-medium rounded-lg hover:bg-slate-600 transition-colors text-center">
                        Cancelar
                    </a>
                    <button type="submit"
                        class="flex-1 py-3 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-colors flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Salvar Aluno
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
