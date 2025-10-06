<aside class="fixed left-0 top-0 h-screen w-64 bg-slate-900 border-r border-slate-700">
    <!-- Header da Sidebar -->
    <div class="flex items-center gap-3 p-6 border-b border-slate-700">
        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
            </svg>
        </div>
        <span class="text-xl font-semibold text-white">SisEscolar</span>
    </div>

    <!-- Navigation -->
    <nav class="p-4 space-y-2">
        <x-sidebar-link href="{{ route('alunos.index') }}" label="Alunos" :icon="'<path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z\'/>'" />

        <x-sidebar-link href="{{ route('turmas.index') }}" label="Turmas" :icon="'<path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4\'/>'" />
    </nav>

    <!-- Sair Button -->
    <div class="absolute bottom-6 left-4 right-4">
        <a href="#"
            class="flex items-center gap-3 py-2.5 px-3 rounded-lg text-gray-400 hover:bg-slate-800 hover:text-white transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            <span>Sair</span>
        </a>
    </div>
</aside>
