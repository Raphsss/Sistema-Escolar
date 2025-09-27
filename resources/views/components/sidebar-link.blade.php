@props(['href', 'label', 'icon'])

<a href="{{ $href }}"
    class="flex items-center gap-3 py-2.5 px-3 rounded-lg hover:bg-gray-800 hover:text-white transition-colors">
    <svg class="w-5 h-5 opacity-75" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"
        focusable="false">
        {!! $icon !!}
    </svg>
    <span>{{ $label }}</span>
</a>
