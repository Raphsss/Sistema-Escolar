<aside class="fixed left-0 top-0 h-screen w-64 bg-zinc-900 border-r border-zinc-800">
    <!-- Logo -->
    <div class="h-16 flex items-center px-6 border-b border-zinc-800">
        <span class="text-lg font-semibold text-zinc-50 tracking-tight">SisEscolar</span>
    </div>

    <!-- Navigation -->
    <nav class="p-6 space-y-1">
        <a href="{{ route('alunos.index') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-lg text-zinc-400 hover:text-zinc-50 hover:bg-zinc-800/50 transition-all duration-200 group">
            <svg class="w-5 h-5 text-zinc-500 group-hover:text-zinc-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
            </svg>
            <span class="text-sm font-medium">Alunos</span>
        </a>

        <a href="{{ route('turmas.index') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-lg text-zinc-400 hover:text-zinc-50 hover:bg-zinc-800/50 transition-all duration-200 group">
            <svg class="w-5 h-5 text-zinc-500 group-hover:text-zinc-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
            <span class="text-sm font-medium">Turmas</span>
        </a>
    </nav>

    <!-- Logout -->
    <div class="absolute bottom-0 left-0 right-0 p-6 border-t border-zinc-800">
        <a href="#"
            class="flex items-center gap-3 px-4 py-3 rounded-lg text-zinc-500 hover:text-zinc-300 hover:bg-zinc-800/50 transition-all duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            <span class="text-sm font-medium">Sair</span>
        </a>
    </div>
</aside>
