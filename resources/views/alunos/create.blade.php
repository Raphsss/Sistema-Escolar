@extends('layouts.master')

@section('title', 'Novo Aluno')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6">
        <div class="flex items-center gap-3 mb-2">
            <a href="{{ route('alunos.index') }}" class="p-2 text-gray-400 hover:text-white hover:bg-slate-700 rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            <h1 class="text-2xl font-semibold text-white">Novo Aluno</h1>
        </div>
    </div>

    <!-- Formulário -->
    <div class="max-w-3xl">
        <form action="{{ route('alunos.store') }}" method="post" class="bg-slate-800 rounded-lg p-6 space-y-6">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <x-form-input 
                        label="Nome completo" 
                        name="nome" 
                        placeholder="Digite o nome completo" 
                        :error="$errors->first('nome')" 
                        value="{{ old('nome') }}"
                    />
                </div>
                
                <x-form-input 
                    label="Registro Acadêmico (RA)" 
                    name="ra" 
                    placeholder="Ex: 202300123" 
                    :error="$errors->first('ra')" 
                    value="{{ old('ra') }}"
                />
                
                <x-form-input 
                    type="email" 
                    label="E-mail" 
                    name="email" 
                    placeholder="exemplo@email.com" 
                    :error="$errors->first('email')" 
                    value="{{ old('email') }}"
                />
                
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
                
                <div class="md:col-span-2">
                    <x-form-input 
                        label="Telefone" 
                        name="telefone" 
                        placeholder="(11) 99999-9999" 
                        :error="$errors->first('telefone')" 
                        value="{{ old('telefone') }}"
                    />
                </div>
            </div>
            
            <!-- Botões -->
            <div class="flex gap-3 pt-4 border-t border-slate-700">
                <a href="{{ route('alunos.index') }}" 
                   class="flex-1 py-2.5 text-center bg-slate-700 text-white text-sm font-medium rounded-lg hover:bg-slate-600 transition-colors">
                    Cancelar
                </a>
                <button type="submit" class="flex-1 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors">
                    Salvar Aluno
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
