<section class="py-24 bg-[#FAFAF8]" style="font-family: 'DM Sans', sans-serif;">
    <div class="mx-auto max-w-[1400px] px-4 sm:px-6 lg:px-8">

        <div class="mb-12">
            <h2 class="text-3xl tracking-tight text-black" style="font-family: 'DM Serif Display', serif;">
                Browse by <em class="italic font-light text-black/40">Spec.</em>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach ([
    ['name' => 'Computing', 'count' => '120+ Items', 'img' => 'your-actual-laptop-image.jpg'],
    ['name' => 'Audio', 'count' => '85 Items', 'img' => 'your-headphone-image.png'],
    {{-- ... and so on --}}
            ] as $cat)
                      <a href="#" class="group relative block aspect-[4/5] overflow-hidden bg-black">
                  <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=800"
     alt="{{ $cat['name'] }}"
     class="absolute inset-0 h-full w-full object-cover opacity-70 transition-transform duration-700 group-hover:scale-110 group-hover:opacity-50">
       <div class="absolute inset-0 flex flex-col justify-end p-8">
                        <p class="text-[9px] font-bold uppercase tracking-[0.3em] text-white/60 mb-2">
                            {{ $cat['count'] }}</p>
                        <h3 class="text-2xl text-white font-medium" style="font-family: 'DM Serif Display', serif;">
                            {{ $cat['name'] }}</h3>
                        <span class="mt-4 w-0 h-px bg-white transition-all duration-500 group-hover:w-full"></span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
