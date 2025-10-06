@props(['type' => 'submit', 'class' => ''])

<button type="{{ $type }}"
    class="w-full py-3 px-4 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-500 focus:ring-opacity-50 transition-all {{ $class }}"
    {{ $attributes }}>
    {{ $slot }}
</button>
