{{-- filepath: /home/raphs/Repos/Biblioteca-Laravel-/resources/views/components/form-select.blade.php --}}
@props([
    'label' => '',
    'name',
    'error' => null,
    'id' => $name,
])

<div>
    @if ($label)
        <label for="{{ $id }}"
            class="block mb-2 text-sm font-medium {{ $error ? 'text-red-700 dark:text-red-500' : 'text-gray-900 dark:text-white' }}">
            {{ $label }}
        </label>
    @endif

    <select name="{{ $name }}" id="{{ $id }}"
        {{ $attributes->merge([
            'class' =>
                'bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ' .
                ($error
                    ? 'border-red-500 bg-red-50 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500'
                    : 'border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white'),
        ]) }}
        aria-describedby="{{ $error ? $id . '-error' : '' }}">
        {{ $slot }}
    </select>

    @if ($error)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500" id="{{ $id }}-error">
            <span class="font-medium">Ops!</span> {{ $error }}
        </p>
    @endif
</div>
