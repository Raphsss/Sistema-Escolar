
<aside class="flex flex-col h-screen w-64 bg-gray-900 text-white justify-between">
    <div>
        <div class="px-6 py-4 text-2xl font-bold border-b border-gray-700">SisBiblioteca</div>
        <nav class="mt-4 flex flex-col gap-1 px-4">
            <a href="{{ route('alunos.index') }}" class="py-2 px-3 rounded hover:bg-gray-800">Alunos</a>
            <a href="#" class="py-2 px-3 rounded hover:bg-gray-800">Livros</a>
            <a href="#" class="py-2 px-3 rounded hover:bg-gray-800">Categorias</a>
            <a href="#" class="py-2 px-3 rounded hover:bg-gray-800">Autores</a>
        </nav>
    </div>
    <div class="px-4 pb-4">
        <a href="#" class="block w-full text-sm text-gray-400 hover:text-gray-200 py-2 transition-colors">Sign out</a>
    </div>
</aside>
