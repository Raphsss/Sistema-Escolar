<aside class="fixed top-0 left-0 h-screen w-64 bg-gray-950 text-gray-200 border-r border-gray-800 z-40 flex flex-col">
    <!-- Logo / título -->
    <div class="px-6 py-5 text-xl font-semibold tracking-wide border-b border-gray-800">
        SisEscolar
    </div>

    <!-- Menu -->
    <nav class="mt-6 flex flex-col gap-2 px-3">
        <x-sidebar-link 
            href="{{ route('alunos.index') }}"
            label="Alunos"
            :icon="'<path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M17 20h5V4H2v16h5m10 0v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z\' />'"
        />
        <x-sidebar-link 
        href="{{ route('turmas.index') }}"
            label="Turmas"
            :icon="'<path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M12 6v6l4 2\' />'"
        />
        
    </nav>

    <!-- Footer -->
    <div class="mt-auto px-4 pb-5">
        <a href="#"
            class="flex items-center gap-2 py-2 px-3 rounded-lg text-sm text-gray-400 hover:text-white hover:bg-gray-800 transition-colors">
            <svg class="w-4 h-4 opacity-75" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7" />
            </svg>
            <span>Sign out</span>
        </a>
    </div>  
</aside>
