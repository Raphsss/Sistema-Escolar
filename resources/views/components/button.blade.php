@props(['type' => 'submit','class' => ''])

<button type="{{ $type }}"
    class="w-full py-2 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition {{ $class }}"
    {{-- Atributos extras não listados no props --}}
    {{ $attributes }}>

    {{-- conteúdo do botão --}}
    {{ $slot }}
</button>
