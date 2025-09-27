@props(['label', 'name', 'type' => 'text', 'placeholder' => '', 'error' => null, 'id' => null, 'value' => ''])

@php
    $id = $id ?? $name;
@endphp

<div>
    <label for="{{ $id }}"
        class="block mb-2 text-sm font-medium {{ $error ? 'text-red-700 dark:text-red-500' : 'text-gray-300' }}">
        {{ $label }}
    </label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" value="{{ $value }}"
        aria-describedby="{{ $error ? $id . '-error' : '' }}"
        class="w-full px-4 py-2 rounded-lg {{ $error ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : 'bg-gray-800 text-gray-100 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600' }}"
        placeholder="{{ $placeholder }}">
    @if ($error)
        <p id="{{ $id }}-error" class="mt-2 text-sm text-red-600 dark:text-red-500">
            {{ $error }}
        </p>
    @endif
</div>
