@extends('layouts.master')

@section('title', 'Editar Aluno')

@section('content')
    <div class="p-12">
        <x-page-header 
            title="Editar Aluno"
            :subtitle="$aluno->nome"
            :backUrl="route('alunos.index')"
        />

        <div class="max-w-3xl">
            <form action="{{ route('alunos.update', $aluno->id) }}" method="post"
                class="bg-zinc-900 border border-zinc-800 rounded-xl p-8">
                @csrf
                @method('PUT')

                <div class="space-y-8">
                    <x-form-input 
                        label="Nome completo" 
                        name="nome"
                        placeholder="Digite o nome completo do aluno"
                        :error="$errors->first('nome')" 
                        value="{{ $aluno->nome }}" 
                    />

                    <div class="grid grid-cols-2 gap-6">
                        <x-form-input 
                            label="Registro Acadêmico" 
                            name="ra"
                            placeholder="202300123"
                            :error="$errors->first('ra')" 
                            value="{{ $aluno->ra }}" 
                        />

                        <x-form-input 
                            type="email" 
                            label="E-mail" 
                            name="email"
                            placeholder="aluno@email.com"
                            :error="$errors->first('email')" 
                            value="{{ $aluno->email }}" 
                        />
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <x-form-input 
                            type="date" 
                            label="Data de nascimento"
                            name="data_nascimento"
                            value="{{ $aluno->data_nascimento }}"
                            :error="$errors->first('data_nascimento')" 
                        />

                        <x-form-select label="Sexo" name="sexo" :error="$errors->first('sexo')">
                            <option value="">Selecione</option>
                            <option value="Masculino" {{ ($aluno->sexo ?? old('sexo')) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                            <option value="Feminino" {{ ($aluno->sexo ?? old('sexo')) == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                            <option value="Outro" {{ ($aluno->sexo ?? old('sexo')) == 'Outro' ? 'selected' : '' }}>Outro</option>
                        </x-form-select>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <x-form-input 
                            label="Telefone" 
                            name="telefone"
                            placeholder="(11) 99999-9999"
                            :error="$errors->first('telefone')" 
                            value="{{ $aluno->telefone }}" 
                        />

                        <x-form-select label="Turma" name="turma" :error="$errors->first('turma')">
                            <option value="">Selecione uma turma</option>
                            @foreach ($turmas as $turma)
                                <option value="{{ $turma->id }}" {{ old('turma_id', $aluno->turma_id) == $turma->id ? 'selected' : '' }}>
                                    {{ $turma->codigo }}
                                </option>
                            @endforeach
                        </x-form-select>
                    </div>
                </div>

                <x-form-actions 
                    cancelUrl="javascript:history.back()"
                    submitText="Salvar Alterações"
                />
            </form>
        </div>
    </div>
@endsection
