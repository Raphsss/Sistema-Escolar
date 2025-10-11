@props(['title' => null, 'compact' => false])

<div {{ $attributes->merge(['class' => $compact ? 'card-compact' : 'card']) }}>
    @if($title)
        <h2 class="section-header mb-6">{{ $title }}</h2>
    @endif
    
    {{ $slot }}
</div>
