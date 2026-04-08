<div>
    <x-home.home-header />

    <x-home.rooms />

    <section class="mx-auto max-w-[1400px] px-4 sm:px-6 lg:px-8 py-24">
        <div class="mb-12 flex items-end justify-between border-b border-black/5 pb-8">
            <div>
                <div class="mb-3 flex items-center gap-3 text-[10px] font-bold uppercase tracking-[0.25em] text-black">
                    <span class="h-px w-8 bg-black"></span>
                    Latest Tech
                </div>
                <h2 class="text-4xl tracking-tight text-black sm:text-5xl"
                    style="font-family: 'DM Serif Display', serif;">
                    New <em class="italic font-light text-black/40">Arrivals.</em>
                </h2>
            </div>
            <a href="{{ route('categories') }}"
                class="text-[11px] font-bold uppercase tracking-widest text-black/40 transition hover:text-black">
                Browse All Gear →
            </a>
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($productsData as $product)
                <x-home.productCard :item="$product" />
            @endforeach
        </div>
    </section>

    <x-home.shipping />

    <x-home.our-customers />
</div>
