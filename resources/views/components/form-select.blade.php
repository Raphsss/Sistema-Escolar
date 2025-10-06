@props([
    'label' => '',
    'name',
    'error' => null,
    'id' => $name,
])

<div class="space-y-2">
    @if ($label)
        <label for="{{ $id }}"
            class="block text-sm font-medium {{ $error ? 'text-red-400' : 'text-gray-300' }}">
            {{ $label }}
        </label>
    @endif

    <select name="{{ $name }}" id="{{ $id }}"
        {{ $attributes->merge([
            'class' =>
                'w-full px-4 py-3 rounded-lg border transition-colors ' .
                ($error
                    ? 'bg-red-50 border-red-500 text-red-900 focus:ring-red-500 focus:border-red-500'
                    : 'bg-slate-800 text-gray-100 border-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 hover:border-slate-500'),
        ]) }}
        aria-describedby="{{ $error ? $id . '-error' : '' }}">
        {{ $slot }}
    </select>

    @if ($error)
        <p class="text-sm text-red-400 flex items-center gap-1" id="{{ $id }}-error">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd" />
            </svg>
            {{ $error }}
        </p>
    @endif
</div>
