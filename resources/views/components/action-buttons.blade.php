@props(['editUrl', 'deleteAction', 'deleteMessage' => 'Confirma a exclusão?'])

<div class="flex gap-3">
    @if($editUrl)
        <a href="{{ $editUrl }}"
            class="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
            Editar
        </a>
    @endif

    @if($deleteAction)
        <form action="{{ $deleteAction }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('{{ $deleteMessage }}')"
                class="px-5 py-2.5 bg-zinc-800 hover:bg-red-600 text-zinc-300 hover:text-white text-sm font-medium rounded-lg transition-all duration-200">
                Excluir
            </button>
        </form>
    @endif
</div>
