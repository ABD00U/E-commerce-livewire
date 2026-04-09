<div class="max-w-[1440px] mx-auto px-6 py-16 lg:px-12" style="font-family: 'DM Sans', sans-serif;">

    <div class="flex flex-col xl:flex-row xl:items-end justify-between gap-10 mb-16 border-b border-black/5 pb-12">
        <div class="max-w-xl">
            <div class="mb-3 flex items-center gap-3 text-[10px] font-bold uppercase tracking-[0.3em] text-black/40">
                <span class="h-px w-8 bg-black/20"></span>
                Hardware Inventory
            </div>
            <h1 class="text-5xl tracking-tighter text-black sm:text-7xl" style="font-family: 'DM Serif Display', serif;">
                The <em class="italic font-light text-black/30">Collections.</em>
            </h1>
            <p class="text-black/50 mt-6 text-sm leading-relaxed max-w-md">
                Precision-engineered components and curated electronics for the modern ecosystem.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row items-end gap-6 w-full xl:w-auto">
            <div class="relative w-full sm:w-72 group">
                <input wire:model.live.debounce.300ms="search" type="text" placeholder="Search Registry..."
                    class="w-full bg-[#FAFAF8] border border-black/5 rounded-none py-4 pl-5 pr-10 text-[12px] font-bold uppercase tracking-widest text-black focus:ring-1 focus:ring-black focus:border-black transition-all placeholder:text-black/20">
                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-black/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <div class="w-full sm:w-60">
                <label class="block text-[9px] font-black text-black/30 uppercase tracking-[0.3em] mb-2">Filter
                    Protocol</label>
                <div class="relative">
                    <select wire:model="category"
                        class="w-full px-5 py-4 border border-black/10 rounded-none bg-[#FAFAF8] text-sm focus:outline-none focus:ring-1 focus:ring-black focus:border-black transition-all appearance-none cursor-pointer">
                        <option value="">All Category</option>
                        <option value="computing">Computing</option>
                        <option value="audio">Audio</option>
                        <option value="mobile">Mobile</option>
                        <option value="smart-home">Smart Home</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                        <svg class="h-3 w-3 text-black/40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px bg-black/5 border border-black/5 shadow-2xl">
        @forelse($products as $product)
            <div class="group relative flex flex-col bg-white p-8 transition-colors duration-500 hover:bg-[#FAFAF8]">

                <div class="relative aspect-[1/1] w-full overflow-hidden bg-[#F5F5F3] border border-black/5">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                        class="h-full w-full object-contain p-8 mix-blend-multiply transition-transform duration-[2s] ease-out group-hover:scale-110">

                    <div class="absolute top-0 left-0 p-4">
                        @if ($product->is_new)
                            <span
                                class="bg-black text-white text-[9px] font-bold px-3 py-1.5 uppercase tracking-[0.2em]">
                                New Entry
                            </span>
                        @endif
                    </div>

                    <a href="{{ route('product', $product->id) }}"
                        class="absolute inset-0 bg-black/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <button
                            class="bg-black text-white px-8 py-4 text-[10px] font-bold uppercase tracking-[0.3em] shadow-2xl hover:scale-105 transition-transform">
                            View Specs
                        </button>
                    </a>
                </div>

                <div class="mt-8">
                    <div class="flex justify-between items-start gap-4">
                        <div class="flex-1">
                            <p class="text-[9px] font-bold text-black/30 uppercase tracking-[0.3em] mb-2">
                                System / {{ $product->category }}
                            </p>
                            <h3 class="text-xl text-black tracking-tight leading-tight group-hover:text-black/60 transition-colors"
                                style="font-family: 'DM Serif Display', serif;">
                                <a href="{{ route('product', $product->id) }}">
                                    {{ $product->name }}
                                </a>
                            </h3>
                        </div>

                        <div class="text-right">
                            <span class="text-lg font-medium text-black tracking-tighter">
                                ${{ number_format($product->price, 2) }}
                            </span>
                        </div>
                    </div>

                    <div class="mt-8 flex items-center gap-4">
                        <div class="h-px flex-1 bg-black/10 relative overflow-hidden">
                            <div
                                class="absolute inset-y-0 left-0 bg-black w-0 group-hover:w-full transition-all duration-1000 ease-in-out">
                            </div>
                        </div>
                        <span
                            class="text-[8px] font-bold text-black/20 uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">Ready</span>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full py-40 text-center bg-white">
                <h3 class="text-[11px] font-bold text-black/20 uppercase tracking-[0.4em]">No technical matches found.
                </h3>
            </div>
        @endforelse
        {{ $products->links() }}

    </div>
</div>
