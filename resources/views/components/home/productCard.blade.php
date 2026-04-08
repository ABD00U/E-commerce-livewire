<div class="group relative border border-black/5 bg-white transition-all duration-300 hover:border-black/20 hover:shadow-[0_10px_30px_-15px_rgba(0,0,0,0.1)]"
    style="font-family: 'DM Sans', sans-serif;">

    {{-- Product Image Area --}}
    <a href="{{ route('product', $item->id) }}" class=" relative block h-64 overflow-hidden bg-[#F5F4F0] z-0">

        {{-- Status Tags --}}
        <div class="absolute left-3 top-3 z-10 flex flex-col gap-2">
            @if ($item->is_new)
                <span class="bg-black px-2.5 py-1 text-[9px] font-bold uppercase tracking-[0.15em] text-white">
                    New Release
                </span>
            @endif
            <span
                class="bg-white/90 backdrop-blur-sm border border-black/5 px-2.5 py-1 text-[9px] font-bold uppercase tracking-[0.15em] text-black">
                In Stock
            </span>
        </div>

        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
            class="h-full w-full object-contain p-8 transition-transform duration-700 group-hover:scale-110">

        {{-- Technical Quick-View Overlay --}}
        <div
            class="absolute inset-x-0 bottom-0 translate-y-full bg-black/80 p-4 text-white backdrop-blur-sm transition-transform duration-300 group-hover:translate-y-0">
            <p class="text-[9px] font-bold uppercase tracking-widest opacity-60">Key Specification</p>
            <p class="text-[11px] font-medium leading-tight">High-Performance Hardware • 1 Year Warranty</p>
        </div>
    </a>

    @if (auth()->id() !== $item->user_id)
        <button wire:click.stop="addToCart({{ $item->id }})" type="button"
            class="absolute top-3 z-10 right-3 flex h-10 w-10 items-center justify-center rounded-none border border-black/10 bg-white text-black opacity-0 transition-all duration-300 group-hover:opacity-100 hover:bg-black hover:text-white">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
        </button>
    @endif

    {{-- Product Info --}}
    <div class="p-5">
        <div class="mb-2 flex items-center justify-between">
            <p class="text-[10px] font-bold uppercase tracking-[0.15em] text-black/40">{{ $item->category }}</p>
            @if (auth()->id() !== $item->user_id)
                <div class="flex items-center gap-1">
                    <span class="text-[10px] font-bold text-black">{{ $item->rating ?? '4.8' }}</span>
                    <svg class="h-2.5 w-2.5 text-black" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
            @endif
        </div>

        <a href="{{ route('product', $item->id) }}"
            class="mb-4 block truncate text-[15px] font-medium text-black transition hover:text-black/60">
            {{ $item->name }}
        </a>

        <div class="flex items-center justify-between border-t border-black/5 pt-4">
            <span class="text-[1.2rem] font-medium text-black" style="font-family: 'DM Serif Display', serif;">
                ${{ number_format($item->price, 2) }}
            </span>

            @if (auth()->id() === $item->user_id)
                <span class="border border-black px-3 py-1 text-[9px] font-bold uppercase tracking-widest text-black">
                    Your Device
                </span>
            @else
                <button
                    class="text-[10px] font-bold uppercase tracking-widest text-black border-b border-black/20 hover:border-black transition-all">
                    Details
                </button>
            @endif
        </div>
    </div>
</div>
