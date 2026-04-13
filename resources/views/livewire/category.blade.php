<div class="max-w-[1440px] mx-auto px-6 py-16 lg:px-12 bg-[#FCFCFB]" style="font-family: 'DM Sans', sans-serif;">

    <div class="flex flex-col xl:flex-row xl:items-end justify-between gap-10 mb-16 border-b border-black/10 pb-16">
        <div class="max-w-2xl">
            <div class="mb-5 flex items-center gap-4 text-[11px] font-bold uppercase tracking-[0.4em] text-black/40">
                <span class="h-px w-10 bg-black/30"></span>
                Hardware Inventory 01
            </div>
            <h1 class="text-6xl tracking-tighter text-black sm:text-8xl leading-[0.9]"
                style="font-family: 'DM Serif Display', serif;">
                The <em class="italic font-light text-black/20">Collections.</em>
            </h1>
            <p class="text-black/60 mt-8 text-base leading-relaxed max-w-md font-light">
                Precision-engineered components and curated electronics optimized for the modern digital ecosystem.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row items-end gap-4 w-full xl:w-auto">
            <div class="relative w-full sm:w-80 group">
                <input wire:model.live.debounce.300ms="search" type="text" placeholder="Search Registry..."
                    class="w-full bg-white border border-black/10 rounded-none py-5 pl-6 pr-12 text-[12px] font-bold uppercase tracking-widest text-black focus:ring-0 focus:border-black transition-all placeholder:text-black/20 shadow-sm group-hover:border-black/30">
                <div class="absolute inset-y-0 right-0 pr-5 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-black/20 group-focus-within:text-black transition-colors" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <div class="w-full sm:w-64">
                <div class="relative">
                    <select wire:model.live="category"
                        class="w-full px-6 py-5 border border-black/10 rounded-none bg-white text-[11px] font-bold uppercase tracking-widest focus:outline-none focus:border-black transition-all appearance-none cursor-pointer shadow-sm hover:border-black/30">
                        <option value="">Filter: All Protocols</option>
                        <option value="computing">Computing</option>
                        <option value="audio">Audio</option>
                        <option value="mobile">Mobile</option>
                        <option value="smart-home">Smart Home</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 pr-5 flex items-center pointer-events-none">
                        <svg class="h-3 w-3 text-black/40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7" stroke-width="2.5" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#F4F4F2]  p-6" style="font-family: 'DM Sans', sans-serif;">


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @forelse($products as $product)
                <div
                    class="group relative bg-white border-r border-b border-black/[0.08] transition-all duration-500 hover:bg-black">

                    <div class="p-8">
                        <div class="flex justify-between items-start mb-12">
                            <span
                                class="text-[8px] font-bold uppercase tracking-[0.3em] text-black/40 group-hover:text-white/40 transition-colors">
                                P-{{ str_pad($product->id, 3, '0', STR_PAD_LEFT) }}
                            </span>
                            <span class="text-[9px] font-medium text-black/20 group-hover:text-white/20">
                                {{ $product->category }}
                            </span>
                        </div>

                        <div
                            class="aspect-square mb-12 flex items-center justify-center grayscale transition-all duration-700 group-hover:grayscale-0 group-hover:scale-110">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:mix-blend-normal">
                        </div>

                        <div class="space-y-1">
                            <h3
                                class="text-sm font-bold tracking-tight text-black group-hover:text-white transition-colors uppercase">
                                {{ $product->name }}
                            </h3>
                            <div class="flex justify-between items-end">
                                <p class="text-[11px] text-black/40 group-hover:text-white/60 transition-colors">
                                    ${{ number_format($product->price, 0) }}
                                </p>

                                <a href="{{ route('product', $product->id) }}" class="relative w-5 h-5">
                                    <span
                                        class="absolute top-1/2 left-0 w-full h-[1px] bg-black/20 group-hover:bg-white transition-all"></span>
                                    <span
                                        class="absolute left-1/2 top-0 h-full w-[1px] bg-black/20 group-hover:bg-white transition-all group-hover:rotate-90"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('product', $product->id) }}" class="absolute inset-0 z-20"></a>
                </div>
            @empty
                <div class="col-span-full py-40 text-center border-r border-b border-black/[0.08]">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-black/20">Void / No Data
                        Found</span>
                </div>
            @endforelse
        </div>

        <div class="mt-24 flex justify-center">
            {{ $products->links('vendor.pagination.default') }}
        </div>
    </div>
</div>
</div>
