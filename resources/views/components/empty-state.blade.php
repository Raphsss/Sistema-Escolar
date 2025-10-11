@props(['icon', 'message'])

<div class="flex items-center justify-center py-12">
    <div class="text-center">
        <svg class="w-12 h-12 text-zinc-700 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            {!! $icon !!}
        </svg>
        <p class="text-zinc-500 text-sm">{{ $message }}</p>
    </div>
</div>
