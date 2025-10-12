@props(['columns'])

<div {{ $attributes->merge(['class' => 'grid gap-8 px-8 py-4 bg-zinc-900/50 border-b border-zinc-800']) }}>
    @foreach($columns as $column)
        <div class="{{ $column['class'] ?? '' }} text-xs font-medium text-zinc-500 uppercase tracking-wider">
            {{ $column['label'] }}
        </div>
    @endforeach
</div>
