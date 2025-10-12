@props(['cancelUrl', 'submitText' => 'Salvar'])

<div class="flex gap-4 mt-10 pt-8 border-t border-zinc-800">
    <a href="{{ $cancelUrl }}"
        class="flex-1 py-3 text-center text-zinc-300 hover:text-zinc-50 text-sm font-medium rounded-lg border border-zinc-700 hover:border-zinc-600 transition-all duration-200">
        Cancelar
    </a>
    <button type="submit"
        class="flex-1 py-3 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
        {{ $submitText }}
    </button>
</div>
