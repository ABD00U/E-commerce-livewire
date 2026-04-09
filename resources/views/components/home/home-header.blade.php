<div class="mx-4 mb-12 flex min-h-[380px] overflow-hidden rounded-xl bg-[#F0EDE8] lg:mx-8 border border-black/5"
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
                <span
                    class="rounded-none border border-black/10 bg-black/5 px-4 py-1.5 text-[9px] font-bold uppercase tracking-[0.15em] text-black/70">
                    {{ $tag }}
                </span>
            @endforeach
        </div>
    </div>

    <div class="relative hidden w-[350px] flex-shrink-0 overflow-hidden lg:block xl:w-[450px]">

        <img src="{{ asset('images/premium-desk-hero.png') }}" alt="Premium Electronics Desk Setup"
            class="h-full w-full object-cover contrast-[1.1] grayscale-[30%] brightness-[0.9] transition-transform duration-1000 hover:scale-110">

        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>

        <div class="absolute bottom-8 right-8 bg-black px-6 py-5 text-white shadow-2xl">
            <span class="block text-xs font-bold uppercase tracking-[0.2em] opacity-60">Verified</span>
            <span class="mt-1 block text-2xl font-light tracking-tight"
                style="font-family: 'DM Serif Display', serif;">Grade A+</span>
        </div>
    </div>
</div>
