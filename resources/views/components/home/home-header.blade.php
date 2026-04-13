<div class="mx-4 mb-12 flex min-h-[420px] overflow-hidden rounded-xl bg-[#F0EDE8] lg:mx-8 border border-black/5"
    style="font-family: 'DM Sans', sans-serif;">

    <div class="flex flex-1 flex-col justify-between p-10 sm:p-16">
        <div>
            <div class="mb-8 flex items-center gap-3 text-[10px] font-bold uppercase tracking-[0.25em] text-black">
                <span class="h-px w-8 bg-black"></span>
                Next-Gen Tech
            </div>

            <h2 class="mb-6 text-5xl leading-[0.95] tracking-tight text-black sm:text-7xl"
                style="font-family: 'DM Serif Display', serif;">
                The Future of<br><em class="italic font-light text-black/40">Innovation.</em>
            </h2>

            <p class="mb-10 max-w-sm text-[15px] font-medium leading-relaxed text-black/60">
                Explore a curated selection of high-performance devices.
                From professional workstations to everyday essentials, <span class="text-black font-semibold">expertly
                    tested.</span>
            </p>

            <div class="flex items-center gap-8">
                <a href="{{ route('categories') }}"
                    class="rounded-none bg-black px-9 py-4 text-[11px] font-bold uppercase tracking-widest text-white transition hover:bg-black/80 hover:scale-[1.02] transform duration-200">
                    Browse Gear
                </a>
                <a href="{{ route('categories') }}"
                    class="text-[11px] font-bold uppercase tracking-widest text-black/40 transition hover:text-black border-b border-black/10 hover:border-black pb-1">
                    New Arrivals →
                </a>
            </div>
        </div>

        <div class="mt-12 flex flex-wrap gap-3">
            @foreach (['Computing', 'Audio', 'Mobile', 'Smart Home'] as $tag)
                <a href="{{ route('categories', ['category' => str_replace(' ', '-', strtolower($tag))]) }}"
                    class="rounded-none border border-black/10 bg-black/5 px-4 py-1.5 text-[9px] font-bold uppercase tracking-[0.15em] text-black/70 transition-all duration-200 hover:bg-black hover:text-white hover:border-black">
                    {{ $tag }}
                </a>
            @endforeach
        </div>
    </div>

    <div class="relative hidden w-[350px] flex-shrink-0 overflow-hidden lg:block xl:w-[500px] bg-black">
        <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?q=80&w=2070&auto=format&fit=crop"
            alt="Minimalist Workstation"
            class="h-full w-full object-cover contrast-[1.1] grayscale-[20%] brightness-[0.8] transition-transform duration-1000 hover:scale-105">

        {{-- Subtle architectural overlay --}}
        <div class="absolute inset-0 bg-gradient-to-l from-black/20 via-transparent to-transparent"></div>

        <div
            class="absolute bottom-8 right-8 bg-black/90 backdrop-blur-sm px-8 py-6 text-white shadow-2xl border border-white/10">
            <span class="block text-[10px] font-black uppercase tracking-[0.3em] opacity-50">Verified Status</span>
            <span class="mt-1 block text-3xl font-light tracking-tighter"
                style="font-family: 'DM Serif Display', serif;">Grade A+</span>
        </div>
    </div>
</div>
