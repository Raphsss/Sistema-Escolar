@props(['title', 'subtitle' => null, 'backUrl' => null])

<div class="mb-12">
    <div class="flex items-center gap-6">
        @if($backUrl)
            <a href="{{ $backUrl }}"
                class="p-2 text-zinc-400 hover:text-zinc-200 hover:bg-zinc-800 rounded-lg transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
        @endif
        <div>
            <h1 class="text-3xl font-semibold text-zinc-50 tracking-tight">{{ $title }}</h1>
            @if($subtitle)
                <p class="text-zinc-500 mt-2">{{ $subtitle }}</p>
            @endif
        </div>
    </div>
</div>
