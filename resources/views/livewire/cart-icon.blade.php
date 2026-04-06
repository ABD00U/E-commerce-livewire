<a href="{{ route('cart') }}" class="relative group p-3 border border-transparent ">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black/40 group-hover:text-black transition-colors"
        fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
    </svg>

    @if ($cartCount > 0)
        <span
            class="absolute rounded-full top-5 right-1 bg-black text-white text-[9px] font-black h-4 w-4 flex items-center justify-center tracking-tighter ring-2 ring-white">
            {{ $cartCount }}
        </span>
    @endif
</a>
