@props(['href', 'label', 'icon'])

<a href="{{ $href }}"
    class="flex items-center gap-3 py-3 px-3 rounded-lg text-gray-300 hover:bg-slate-800 hover:text-white transition-colors group">
    <div class="w-5 h-5 text-gray-400 group-hover:text-white">
        <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            {!! $icon !!}
        </svg>
    </div>
    <span class="font-medium">{{ $label }}</span>
</a>
