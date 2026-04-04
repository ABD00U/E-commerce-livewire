<div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">

    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12 border-b border-gray-100 pb-8">
        <div>
            <h1 class="text-5xl font-black text-gray-900 italic tracking-tight">Shop <span
                    class="text-indigo-600">Collections</span></h1>
            <p class="text-gray-500 mt-2">Discover our curated selection of premium goods.</p>
        </div>

        <div class="flex flex-row items-end gap-8">

            <div class="relative w-full sm:w-80">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input wire:model.live.debounce.300ms="search" type="text" placeholder="Search products..."
                    class="w-full bg-white border border-gray-200 rounded-2xl py-4 pl-12 pr-4 text-gray-900 font-medium focus:ring-2 focus:ring-indigo-500 focus:border-transparent shadow-sm transition-all">
            </div>

            <div class="w-full md:w-64">
                <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Filter by
                    Category</label>
                <select wire:model.live="category"
                    class="w-full bg-gray-50 border-none rounded-2xl py-4 px-5 text-gray-900 font-bold focus:ring-2 focus:ring-indigo-500 shadow-sm transition">
                    <option value="">All Products</option>
                    <option value="electronics">Electronics</option>
                    <option value="fashion">Fashion</option>
                    <option value="cars">Cars</option>
                </select>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($products as $product)
            <div
                class="group relative flex flex-col bg-white p-3 rounded-[2.5rem] border border-transparent hover:border-gray-100 hover:shadow-[0_32px_64px_-15px_rgba(0,0,0,0.1)] transition-all duration-700">

                <div class="relative aspect-[4/5] w-full overflow-hidden rounded-[2rem] bg-gray-50">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                        class="h-full w-full object-cover object-center scale-[1.01] group-hover:scale-110 transition-transform duration-[1.5s] ease-out">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div class="absolute top-4 left-4 flex flex-col gap-2">
                        @if ($product->is_new)
                            <span
                                class="bg-white/90 backdrop-blur-md text-gray-900 text-[10px] font-black px-3 py-1.5 rounded-full uppercase tracking-tighter shadow-sm border border-white/20">
                                New
                            </span>
                        @endif
                    </div>

                    <a href="{{ route('product', $product->id) }}"
                        class="absolute bottom-4 inset-x-4 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <button
                            class="w-full bg-gray-900/90 backdrop-blur-xl text-white py-3 rounded-2xl font-bold text-sm tracking-wide hover:bg-indigo-600 transition-colors shadow-2xl">
                            Quick View
                        </button>
                    </a>
                </div>

                <div class="px-2 py-5">
                    <div class="flex justify-between items-start">
                        <div class="flex-1">
                            <p class="text-[10px] font-black text-indigo-600 uppercase tracking-[0.2em] mb-1">
                                {{ $product->category }}
                            </p>
                            <h3
                                class="text-xl font-bold text-gray-900 tracking-tight leading-none group-hover:text-indigo-600 transition-colors">
                                <a href="{{ route('product', $product->id) }}">
                                    {{ $product->name }}
                                </a>
                            </h3>
                        </div>

                        <div class="text-right">
                            <span class="text-xl font-black text-gray-900 tracking-tighter">
                                ${{ number_format($product->price, 0) }}<span class="text-xs align-top">99</span>
                            </span>
                        </div>
                    </div>

                    <div
                        class="mt-4 h-[2px] w-0 bg-indigo-600 group-hover:w-full transition-all duration-700 ease-in-out">
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full py-20 text-center">
                <h3 class="text-2xl font-bold text-gray-300">No products found in this category.</h3>
            </div>
        @endforelse
    </div>

    {{-- <div class="mt-16 border-t border-gray-100 pt-10">
        {{ $products->links() }}
    </div> --}}
</div>
