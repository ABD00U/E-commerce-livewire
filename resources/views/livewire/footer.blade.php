<footer class="border-t border-[#E5E2DC] bg-[#F0EDE8] text-black" style="font-family: 'DM Sans', sans-serif;">

    <div
        class="mx-auto grid max-w-[1400px] grid-cols-1 gap-12 px-4 pb-12 pt-16 sm:grid-cols-2 sm:px-6 lg:grid-cols-4 lg:px-8">

        {{-- Brand --}}
        <div class="sm:col-span-2 lg:col-span-1">
            <a href="/" class="mb-4 block text-[1.3rem] text-black font-bold"
                style="font-family: 'DM Serif Display', serif;">NEX<em class="italic">MART</em></a>
            <p class="mb-5 max-w-[240px] text-[13px] font-medium leading-relaxed text-black/70">
                The best place to buy and sell high-quality products across fashion, electronics &amp; automotive.
            </p>

            <div class="flex gap-2">
                {{-- Social icons updated to black borders --}}
                <a href="#"
                    class="flex h-8 w-8 items-center justify-center rounded-full border border-black/20 text-black transition hover:bg-black hover:text-white">
                    <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.737-8.835L1.254 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                    </svg>
                </a>
                <a href="#"
                    class="flex h-8 w-8 items-center justify-center rounded-full border border-black/20 text-black transition hover:bg-black hover:text-white">
                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="2" width="20" height="20" rx="5" />
                        <circle cx="12" cy="12" r="4" />
                        <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
                    </svg>
                </a>
            </div>
        </div>

        {{-- Navigation --}}
        <div>
            <p class="mb-5 text-[10px] font-bold uppercase tracking-[0.15em] text-black">Navigation</p>
            <ul class="space-y-3">
                <li><button wire:click="handleRoute('sell')"
                        class="text-[13px] font-medium text-black/60 transition hover:text-black">Start
                        Selling</button>
                </li>
                @foreach ([['/', 'Home'], [route('about'), 'About Us'], [route('contact'), 'Contact']] as [$href, $label])
                    <li><a href="{{ $href }}"
                            class="text-[13px] font-medium text-black/60 transition hover:text-black">{{ $label }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Account --}}
        <div>
            <p class="mb-5 text-[10px] font-bold uppercase tracking-[0.15em] text-black">Account</p>
            <ul class="space-y-3">
                <li>
                    <button wire:click="handleRoute('history')"
                        class="text-[13px] font-medium text-black/60 transition hover:text-black">Order History</button>
                </li>

            </ul>
        </div>

        {{-- Newsletter --}}
        <div>
            <p class="mb-5 text-[10px] font-bold uppercase tracking-[0.15em] text-black">Stay Updated</p>
            <p class="mb-4 text-[13px] font-medium leading-relaxed text-black/60">Get the latest deals straight to your
                inbox.</p>
            <div class="flex">
                <input type="email" placeholder="Your email"
                    class="flex-1 border border-black/10 bg-white px-3 py-2.5 text-[12px] text-black placeholder-black/30 outline-none transition focus:border-black focus:ring-0">
                <button
                    class="bg-black px-4 py-2.5 text-[11px] font-medium uppercase tracking-wider text-white transition hover:bg-gray-800">
                    Join
                </button>
            </div>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="mx-auto max-w-[1400px] border-t border-black/5 px-4 py-6 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-center justify-between gap-2">
            <p class="text-[11px] tracking-wide text-black/40">&copy; 2026 NexMart Inc. All rights reserved.</p>
            <p class="text-[11px] tracking-wide text-black/40 font-medium">Built with care for great shopping.</p>
        </div>
    </div>
</footer>
