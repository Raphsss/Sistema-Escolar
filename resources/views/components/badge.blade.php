@props(['variant' => 'primary'])

@php
    $classes = [
        'primary' => 'badge-primary',
        'success' => 'badge-success',
    ][$variant] ?? 'badge-primary';
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
