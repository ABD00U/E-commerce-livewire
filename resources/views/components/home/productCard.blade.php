<div
    class="group capitalize relative bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">

    <a href={{ route('product', $item->id) }} class="relative w-full h-80 overflow-hidden bg-gray-200">

        @if ($item->is_new)
            <span
                class="absolute top-3 left-3 z-10 bg-indigo-600 text-white text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-widest">
                New
            </span>
        @endif

        <img src={{ asset('storage/' . $item->image) }} alt="Product Name"
            class="w-full h-full max-h-60 object-contain transition-transform duration-500 group-hover:scale-110">
    </a>

    <div class="p-4">
        <div class="flex justify-between items-start mb-1">
            <p class="text-xs text-gray-400 uppercase tracking-wider font-semibold">{{ $item->category }}</p>
            <div class="flex items-center">
                <span class="text-yellow-400 text-xs">★</span>
                <span class="text-xs text-gray-500 ml-1">{{ $item->rating }}</span>
            </div>
        </div>

        <h3 class="text-gray-800 font-bold text-lg mb-2 truncate">
            <a href="#" class="hover:text-indigo-600 transition"> {{ $item->name }}
            </a>
        </h3>

        <div class="flex items-center justify-between mt-4">
            <div>
                <span class="text-2xl font-black text-gray-900">{{ $item->price }}</span>
            </div>



            @if (auth()->id() !== $item->user_id)
                <button
                    @click="$store.auth.isAuthenticated
    ? $wire.addToCart({{ $item->id }})
    : $store.auth.showAuthModal = true"
                    class="bg-gray-900 hover:bg-indigo-600 text-white p-2.5 rounded-xl transition-colors shadow-sm focus:ring-2 focus:ring-indigo-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
            @else
                <div
                    class="flex items-center gap-2 px-3 py-2 bg-amber-50 border border-amber-200 rounded-xl text-amber-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-xs font-medium">Your Listing</span>
                </div>
            @endif

        </div>
    </div>
</div>
