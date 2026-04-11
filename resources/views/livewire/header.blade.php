<nav class="sticky top-0 z-50 border-b border-black/5 bg-[#FAFAF8]/95 backdrop-blur-md"
    style="font-family: 'DM Sans', sans-serif;">
    <div class="mx-auto flex h-[60px] max-w-[1400px] items-center justify-between gap-8 px-4 sm:px-6 lg:px-8">

        {{-- Logo --}}
        <a href="/" class="text-[1.35rem] tracking-tight text-black font-bold"
            style="font-family: 'DM Serif Display', serif;">
            NEX<span class="italic">MART</span>
        </a>

        {{-- Links --}}
        <div class="hidden items-center gap-8 md:flex">
            @php
                $navLinks = [
                    ['href' => '/', 'label' => 'Home', 'active' => request()->is('/')],
                    ['href' => route('about'), 'label' => 'About', 'active' => request()->routeIs('about')],
                    [
                        'href' => route('categories'),
                        'label' => 'Categories',
                        'active' => request()->routeIs('categories'),
                    ],
                ];
            @endphp

            @foreach ($navLinks as $link)
                <a href="{{ $link['href'] }}"
                    class="text-[13px] transition-colors duration-200 {{ $link['active'] ? 'text-black font-semibold' : 'text-black/50 hover:text-black' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach

            <button wire:click="handleRoute('history')"
                class="text-[13px] text-black/50 transition hover:text-black">Order
                History</button>
        </div>

        {{-- Actions --}}
        <div class="flex items-center gap-4">
            <button wire:click="handleRoute('sell')"
                class="rounded-sm border border-black px-5 py-2 text-[11px] font-bold uppercase tracking-widest text-black transition hover:bg-black hover:text-white">
                Sell Now
            </button>

            <div class="h-4 w-px bg-black/10"></div>

            @if (auth()->check())
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="flex items-center gap-1.5 text-[12px] font-medium text-black/60 transition hover:text-black">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Logout
                    </button>
                </form>
            @else
                <a href="/login"
                    class="flex items-center gap-1.5 text-[12px] font-medium text-black/60 transition hover:text-black">
                    <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.963-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Login
                </a>
            @endif

            @auth
                <div class="relative text-black">
                    @livewire('cart-icon')
                </div>
            @endauth
        </div>
    </div>
</nav>
