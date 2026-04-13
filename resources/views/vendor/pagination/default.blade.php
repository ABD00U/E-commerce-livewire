@if ($paginator->hasPages())
    <div class="flex items-center gap-1" style="font-family: 'DM Sans', sans-serif;">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <span class="px-4 py-2 text-[9px] font-bold uppercase tracking-[0.3em] text-black/20 cursor-not-allowed">
                ← Prev
            </span>
        @else
            <button wire:click="previousPage"
                class="px-4 py-2 text-[9px] font-bold uppercase tracking-[0.3em] text-black/40 hover:text-black transition-colors cursor-pointer">
                ← Prev
            </button>
        @endif

        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-3 py-2 text-[9px] font-bold text-black/20">...</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span
                            class="px-4 py-2 text-[9px] font-bold uppercase tracking-[0.3em] text-black border-b border-black">
                            {{ $page }}
                        </span>
                    @else
                        <button wire:click="gotoPage({{ $page }})"
                            class="px-4 py-2 text-[9px] font-bold uppercase tracking-[0.3em] text-black/30 hover:text-black transition-colors cursor-pointer">
                            {{ $page }}
                        </button>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <button wire:click="nextPage"
                class="px-4 py-2 text-[9px] font-bold uppercase tracking-[0.3em] text-black/40 hover:text-black transition-colors cursor-pointer">
                Next →
            </button>
        @else
            <span class="px-4 py-2 text-[9px] font-bold uppercase tracking-[0.3em] text-black/20 cursor-not-allowed">
                Next →
            </span>
        @endif

    </div>
@endif
