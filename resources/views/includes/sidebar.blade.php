<aside class="flex flex-col h-screen w-64 bg-gray-950 text-gray-200 border-r border-gray-800">
    <!-- Logo / título -->
    <div class="px-6 py-5 text-xl font-semibold tracking-wide border-b border-gray-800">
        SisBiblioteca
    </div>

    <!-- Menu -->
    <nav class="mt-6 flex flex-col gap-2 px-3">
        <a href="{{ route('alunos.index') }}"
            class="flex items-center gap-3 py-2.5 px-3 rounded-lg hover:bg-gray-800 hover:text-white transition-colors">
            <svg class="w-5 h-5 opacity-75" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5V4H2v16h5m10 0v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
            </svg>
            <span>Alunos</span>
        </a>
        <a href="#"
            class="flex items-center gap-3 py-2.5 px-3 rounded-lg hover:bg-gray-800 hover:text-white transition-colors">
            <svg class="w-5 h-5 opacity-75" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
            </svg>
            <span>Livros</span>
        </a>
        <a href="#"
            class="flex items-center gap-3 py-2.5 px-3 rounded-lg hover:bg-gray-800 hover:text-white transition-colors">
            <svg class="w-5 h-5 opacity-75" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
            </svg>
            <span>Categorias</span>
        </a>
        <a href="#"
            class="flex items-center gap-3 py-2.5 px-3 rounded-lg hover:bg-gray-800 hover:text-white transition-colors">
            <svg class="w-5 h-5 opacity-75" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A4 4 0 1112 15v6" />
            </svg>
            <span>Autores</span>
        </a>
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
