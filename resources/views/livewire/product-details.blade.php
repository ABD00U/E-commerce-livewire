<div class="max-w-7xl mx-auto px-4 py-16 sm:px-6 lg:px-8" style="font-family: 'DM Sans', sans-serif;">
    <div class="lg:grid lg:grid-cols-2 lg:gap-x-16 lg:items-start">

        {{-- Left: Media Gallery --}}
        <div class="flex flex-col">
            <div class="w-full aspect-square rounded-none overflow-hidden border border-black/5 bg-[#F5F4F0] relative">
                @if ($item->is_new)
                    <span
                        class="absolute top-4 left-4 bg-black text-white px-3 py-1 text-[10px] font-bold uppercase tracking-widest z-10">New
                        Release</span>
                @endif
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                    class="w-full h-full object-center object-contain p-12 transition-transform duration-700 hover:scale-110">
            </div>

            <div class="mt-6 grid grid-cols-4 gap-4">
                {{-- Active Thumbnail --}}
                <button class="aspect-square rounded-none border-2 border-black overflow-hidden bg-white p-2">
                    <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-full object-contain">
                </button>
                {{-- Placeholder Slots for Gallery --}}
                @foreach (range(1, 3) as $i)
                    <div
                        class="aspect-square rounded-none bg-[#F5F4F0] border border-black/5 flex items-center justify-center">
                        <svg class="w-4 h-4 text-black/10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Right: Product Details --}}
        <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
            <div class="flex justify-between items-center mb-4">
                <span
                    class="text-black/40 font-bold text-[10px] tracking-[0.2em] uppercase">{{ $item->category }}</span>
                <div class="flex items-center gap-1.5 bg-black/5 px-3 py-1">
                    <span class="text-black text-xs font-bold">4.8</span>
                    <span class="text-black text-[10px]">★★★★★</span>
                    <span class="text-black/30 text-[10px] ml-1">(42 Reviews)</span>
                </div>
            </div>

            <h1 class="text-4xl tracking-tight text-black mb-6" style="font-family: 'DM Serif Display', serif;">
                {{ $item->name }}
            </h1>

            <div class="flex items-baseline border-b border-black/5 pb-8">
                <p class="text-4xl font-medium text-black" style="font-family: 'DM Serif Display', serif;">
                    ${{ number_format($item->price, 2) }}
                </p>
                <span class="ml-3 text-xs font-bold uppercase tracking-widest text-black/30">Tax Included</span>
            </div>

            <div class="mt-8">
                <h3 class="text-[10px] font-bold text-black uppercase tracking-[0.2em] mb-4">Technical Description</h3>
                <div class="text-[15px] text-black/60 leading-relaxed font-light">
                    <p>{{ $item->description }}</p>
                </div>
            </div>

            {{-- Quantity & Stock --}}
            <div class="mt-10 flex items-center gap-6">
                <div class="flex items-center border border-black/10 bg-white">
                    <button class="px-5 py-3 hover:bg-black hover:text-white transition-colors"
                        wire:click="decrement">-</button>
                    <span class="px-6 py-3 font-bold text-sm min-w-[50px] text-center">{{ $this->quantity }}</span>
                    <button class="px-5 py-3 hover:bg-black hover:text-white transition-colors"
                        wire:click="increment">+</button>
                </div>
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-green-600 flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-green-600 animate-pulse"></span>
                        Units in Stock
                    </p>
                    <p class="text-[10px] text-black/30 uppercase tracking-widest mt-1">Ready for immediate dispatch</p>
                </div>
            </div>

            {{-- Action Buttons --}}
            <div class="mt-12">
                @if (auth()->id() !== $item->user_id)
                    <button wire:click="addToCart"
                        class="w-full bg-black text-white py-5 text-[11px] font-bold uppercase tracking-[0.25em] transition-all hover:bg-black/80 hover:scale-[1.01] active:scale-95 shadow-xl">
                        Add to Inventory
                    </button>
                @else
                    <div class="flex items-center justify-center gap-3 py-5 border border-black/10 bg-black/5">
                        <svg class="h-4 w-4 text-black/40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-black/40">You are the primary
                            vendor</span>
                    </div>
                @endif
            </div>

            {{-- Trust Badges --}}
            <div class="mt-12 grid grid-cols-2 gap-px bg-black/5 border border-black/5">
                <div class="bg-white p-6 flex flex-col gap-3">
                    <div class="text-black">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="1.5">
                            <path
                                d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                    </div>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-black">Secured Delivery</p>
                    <p class="text-[9px] text-black/40 leading-tight">Fully insured, tracked express shipping worldwide.
                    </p>
                </div>
                <div class="bg-white p-6 flex flex-col gap-3">
                    <div class="text-black">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="1.5">
                            <path
                                d="M11.42 15.17L17.25 21A2.673 2.673 0 0113.91 21L7.75 14.83a2.673 2.673 0 010-3.75l6.16-6.17a2.673 2.673 0 013.75 0 2.673 2.673 0 010 3.75l-5.83 5.83z" />
                            <path d="M14.5 10.5L19 15" />
                        </svg>
                    </div>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-black">2 Year Coverage</p>
                    <p class="text-[9px] text-black/40 leading-tight">Extended hardware warranty and technical support.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
