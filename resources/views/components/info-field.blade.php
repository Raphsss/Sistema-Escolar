@props(['label', 'value' => null, 'type' => 'text'])

<div>
    <label class="block text-xs text-zinc-500 uppercase tracking-wider mb-2">{{ $label }}</label>
    @if($type === 'email' && $value)
        <a href="mailto:{{ $value }}"
            class="text-blue-400 hover:text-blue-300 text-base transition-colors duration-200">
            {{ $value }}
        </a>
    @elseif($type === 'tel' && $value)
        <a href="tel:{{ $value }}"
            class="text-blue-400 hover:text-blue-300 text-base transition-colors duration-200">
            {{ $value }}
        </a>
    @elseif($value)
        <p class="text-zinc-50 text-base {{ $type === 'bold' ? 'font-medium' : '' }}">{{ $value }}</p>
    @else
        <p class="text-zinc-500 text-base">—</p>
    @endif
</div>
