<section class="py-24 bg-[#FAFAF8]" style="font-family: 'DM Sans', sans-serif;">
    <div class="mx-auto max-w-[1400px] px-4 sm:px-6 lg:px-8">

        <div class="mb-12">
            <h2 class="text-3xl tracking-tight text-black" style="font-family: 'DM Serif Display', serif;">
                Browse by <em class="italic font-light text-black/40">Spec.</em>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-black/10 border border-black/10">
            @foreach ([['name' => 'Computing', 'slug' => 'computing', 'count' => '120+ Units', 'img' => 'photo-1519389950473-47ba0277781c'], ['name' => 'Audio', 'slug' => 'audio', 'count' => '85 Units', 'img' => 'photo-1505740420928-5e560c06d30e'], ['name' => 'Mobile', 'slug' => 'mobile', 'count' => '42 Units', 'img' => 'photo-1511707171634-5f897ff02aa9'], ['name' => 'Smart Home', 'slug' => 'smart-home', 'count' => '12 Units', 'img' => 'photo-1558002038-1055907df827']] as $cat)
                {{-- Routing handled via 'category' parameter --}}
                <a href="{{ route('categories', ['category' => $cat['slug']]) }}"
                    class="group relative block aspect-[4/5] overflow-hidden bg-white">

                    {{-- Technical Image Layer --}}
                    <img src="https://images.unsplash.com/{{ $cat['img'] }}?auto=format&fit=crop&q=80&w=800"
                        alt="{{ $cat['name'] }}"
                        class="absolute inset-0 h-full w-full object-cover grayscale opacity-80 transition-all duration-1000 group-hover:scale-110 group-hover:grayscale-0 group-hover:opacity-100">

                    {{-- Minmaze Gradient Overlay (Depth) --}}
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-90 transition-opacity duration-700">
                    </div>

                    {{-- Content Layer --}}
                    <div class="absolute inset-0 flex flex-col justify-end p-10">
                        <p
                            class="text-[8px] font-black uppercase tracking-[0.4em] text-white/50 mb-3 transform transition-transform duration-500 group-hover:-translate-y-1">
                            {{ $cat['count'] }}
                        </p>

                        <h3 class="text-3xl text-white tracking-tighter leading-none"
                            style="font-family: 'DM Serif Display', serif;">
                            {{ $cat['name'] }}
                        </h3>

                        {{-- Interactive Maze Line --}}
                        <div
                            class="relative mt-6 h-px w-8 bg-white/30 overflow-hidden transition-all duration-700 group-hover:w-full">
                            <div
                                class="absolute inset-0 bg-white translate-x-[-100%] group-hover:translate-x-[0%] transition-transform duration-700 delay-100">
                            </div>
                        </div>

                        <span
                            class="mt-4 text-[9px] font-bold uppercase tracking-[0.2em] text-white opacity-0 transform translate-y-2 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                            Open Protocol
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
