@props(['title'])

<div class="bg-zinc-900 border border-zinc-800 rounded-xl p-8">
    <h2 class="text-sm font-medium text-zinc-400 uppercase tracking-wider mb-8">{{ $title }}</h2>
    {{ $slot }}
</div>
