<div class="max-w-7xl mx-auto px-4 py-10 sm:px-6 lg:px-8">
    <div class="lg:grid lg:grid-cols-2 lg:gap-x-12 lg:items-start">


        <div class="flex flex-col">
            <div class="w-full aspect-square rounded-2xl overflow-hidden border border-gray-100 shadow-sm bg-gray-50">
                <img src={{ asset('storage/' . $item->image) }} alt="Product Image"
                    class="w-full h-full object-center object-contain">
            </div>

            <div class="mt-4 grid grid-cols-4 gap-4">
                <button class="h-20 rounded-lg border-2 border-indigo-500 overflow-hidden shadow-sm">
                    <img src={{ asset('storage/' . $item->image) }} class="w-full h-full object-cover">
                </button>
                <div class="h-20 rounded-lg bg-gray-100 border border-gray-200"></div>
                <div class="h-20 rounded-lg bg-gray-100 border border-gray-200"></div>
                <div class="h-20 rounded-lg bg-gray-100 border border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
            <div class="flex justify-between items-center mb-2">
                <span class="text-indigo-600 font-semibold text-sm tracking-wide uppercase">{{ $item->category }}</span>
                <span class="flex items-center text-yellow-400 text-sm">
                    ★★★★☆ <span class="text-gray-400 ml-2">(42 reviews)</span>
                </span>
            </div>

            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 mb-4">{{ $item->name }}</h1>

            <div class="mt-3 flex items-baseline border-b border-gray-100 pb-6">
                <p class="text-4xl font-black text-gray-900">{{ $item->price }}</p>
            </div>

            <div class="mt-6">
                <h3 class="text-sm font-bold text-gray-900">Description</h3>
                <div class="mt-2 text-base text-gray-600 leading-relaxed">
                    <p>{{ $item->description }}</p>
                </div>
            </div>

            <div class="mt-8 flex items-center gap-4">
                <div class="flex items-center border border-gray-300 rounded-lg">
                    <button class="px-4 py-2 hover:bg-gray-100" wire:click="decrement">-</button>
                    <span class="px-4 py-2 font-semibold">{{ $this->quantity }}</span>
                    <button class="px-4 py-2 hover:bg-gray-100" wire:click="increment">+</button>
                </div>
                <p class="text-sm text-green-600 font-medium">In Stock - Ready to ship</p>
            </div>



            <div class="mt-10 flex gap-4">




                @if (auth()->id() !== $item->user_id)
                    <button
                        @click="$store.auth.isAuthenticated
        ? $wire.addToCart({{ $item->id }})
        : $store.auth.showAuthModal = true"
                        class="flex-1 flex items-center justify-center rounded-xl border border-transparent bg-indigo-600 px-8 py-4 text-base font-bold text-white shadow-lg transition-all hover:bg-indigo-700 active:scale-95">
                        Add to Cart
                    </button>
                @else
                    <div class="flex items-center text-gray-400 py-4 px-2 italic">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="text-sm font-medium">Listed by you</span>
                    </div>
                @endif


            </div>

            <div class="mt-8 grid grid-cols-2 gap-4 text-xs text-gray-500 border-t border-gray-100 pt-8">
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Free Secure Delivery
                </div>
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    2 Year Warranty
                </div>
            </div>
        </div>
    </div>
</div>
