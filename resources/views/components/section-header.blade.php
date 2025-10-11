@props(['title', 'count' => null])

<div class="flex items-center justify-between mb-6">
    <h2 class="section-header">{{ $title }}</h2>
    
    @if($count !== null)
        <span class="badge-primary">
            {{ $count }} {{ $count === 1 ? Str::singular($title) : $title }}
        </span>
    @endif
</div>
