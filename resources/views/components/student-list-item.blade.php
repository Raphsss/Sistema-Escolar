<div class="list-item group">
    <div class="flex items-center gap-4">
        <div>
            <h3 class="text-zinc-50 font-medium text-sm">{{ $aluno->nome }}</h3>
            <p class="text-muted mt-0.5">Matrícula: {{ $aluno->ra }}</p>
        </div>
    </div>

    <a href="{{ route('alunos.show', $aluno->id) }}" 
        class="opacity-0 group-hover:opacity-100 px-3 py-1.5 bg-zinc-700 hover:bg-indigo-600 text-zinc-300 hover:text-white text-xs font-medium rounded-lg transition-all duration-200">
        Ver perfil
    </a>
</div>
