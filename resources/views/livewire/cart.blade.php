<div class="max-w-[1400px] mx-auto md:px-6 py-20 lg:px-12" style="font-family: 'DM Sans', sans-serif;">

    {{-- Header: Terminal Status --}}
    <div class="flex items-end justify-between border-b border-black/5 pb-10 mb-16">
        <div>
            <div class="mb-3 flex items-center gap-3 text-[10px] font-bold uppercase tracking-[0.3em] text-black/40">
                <span class="h-px w-8 bg-black/20"></span>
                Order Manifest
            </div>
            <h1 class="text-5xl tracking-tighter text-black sm:text-6xl" style="font-family: 'DM Serif Display', serif;">
                Your <em class="italic font-light text-black/30">Selection.</em>
            </h1>
        </div>
        <div class="text-right">
            <p class="text-[10px] font-bold text-black uppercase tracking-widest">Active Units</p>
            <p class="text-2xl font-light text-black/40">{{ $items->count() }}</p>
        </div>
    </div>

    <div class="lg:grid lg:grid-cols-12 lg:gap-x-20 lg:items-start">

        {{-- Left Side: Hardware List --}}
        <div class="lg:col-span-7">
            <div class="space-y-1"> {{-- Tight spacing for a list feel --}}
                @foreach ($items as $item)
                    <div
                        class="group relative flex flex-col sm:flex-row gap-8 bg-white p-6 border-b border-black/5 hover:bg-[#FAFAF8] transition-colors duration-500">

                        <div
                            class="h-32 w-32 flex-shrink-0 bg-[#F5F5F3] border border-black/5 p-4 transition-transform group-hover:scale-105">
                            <img src="{{ asset('storage/' . $item->product->image) }}" alt="Item Image"
                                class="h-full w-full object-contain mix-blend-multiply">
                        </div>

                        <div class="flex flex-1 flex-col justify-between">
                            <div class="flex justify-between items-start">
                                <div>
                                    <span
                                        class="text-[9px] font-bold text-black/30 uppercase tracking-[0.25em]">{{ $item->product->category }}</span>
                                    <h3 class="text-xl text-black mt-1 leading-none"
                                        style="font-family: 'DM Serif Display', serif;">{{ $item->product->name }}</h3>
                                </div>
                                <p class="text-lg font-medium text-black tracking-tighter">
                                    ${{ number_format($item->product->price) }}</p>
                            </div>

                            <div class="flex items-center justify-between mt-6">
                                {{-- Industrial Quantity Selector --}}
                                <div class="inline-flex items-center border border-black/10 bg-white">
                                    <button wire:click="decrement({{ $item->id }})"
                                        class="w-10 h-10 flex items-center justify-center hover:bg-black hover:text-white transition-colors text-xs">-</button>
                                    <span
                                        class="px-6 text-[11px] font-bold text-black font-mono">{{ $item->quantity }}</span>
                                    <button wire:click='increment({{ $item->id }})'
                                        class="w-10 h-10 flex items-center justify-center hover:bg-black hover:text-white transition-colors text-xs">+</button>
                                </div>

                                <button wire:click='remove({{ $item->id }})'
                                    class="text-[10px] font-bold text-black/30 uppercase tracking-widest hover:text-red-600 transition-colors flex items-center gap-2">
                                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2.5">
                                        <path d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    Decommission
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Right Side: The Secure Vault (Payment) --}}
        {{-- Checkout Panel --}}
        <div class="mt-16 lg:mt-0 lg:col-span-5 lg:sticky lg:top-12">
            <div class="relative overflow-hidden p-10" style="background: #2a2a28;">

                {{-- Dot Background --}}
                <div class="absolute inset-0 pointer-events-none"
                    style="background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px);
                    background-size: 18px 18px;">
                </div>

                <div class="relative z-10">

                    {{-- Section Label --}}
                    <span class="text-[9px] font-medium uppercase tracking-[0.35em] text-white/30">
                        Transaction Protocol
                    </span>

                    {{-- Total + Breakdown --}}
                    <div class="flex items-baseline justify-between pb-8 mb-8 border-b border-white/[0.08]">
                        <div>
                            <span class="block text-[9px] uppercase tracking-[0.3em] text-white/30 mb-2">Total
                                Valuation</span>
                            <span class="text-5xl tracking-tighter text-white"
                                style="font-family: 'DM Serif Display', serif;">
                                ${{ number_format($total, 2) }}
                            </span>
                        </div>
                        <div class="text-right space-y-1">
                            <p class="text-xs text-white/30">Subtotal <span class="ml-4">
                                    ${{ number_format($total, 2) }}
                                </span></p>
                            <p class="text-xs text-white/30">Shipping <span class="ml-4">$30</span></p>
                            <p class="text-xs text-white/30">Tax <span class="ml-4">$0</span></p>
                        </div>
                    </div>

                    {{-- Form --}}
                    <div class="space-y-5">

                        {{-- Cardholder Name --}}
                        <div>
                            <label class="block text-[9px] font-medium uppercase tracking-[0.3em] text-white/35 mb-2">
                                Cardholder Name
                            </label>
                            <input type="text" wire:model="cardName" placeholder="Full name on card"
                                class="w-full bg-white/[0.04] border border-white/10 py-3.5 px-4 text-sm
                                  text-white placeholder:text-white/20 focus:outline-none
                                  focus:border-white/35 transition-all rounded-none" />
                        </div>

                        {{-- Card Number --}}
                        <div>
                            <label class="block text-[9px] font-medium uppercase tracking-[0.3em] text-white/35 mb-2">
                                Encrypted Card Entry
                            </label>
                            <div class="relative">
                                <input type="text" wire:model="cardNumber" placeholder="0000 0000 0000 0000"
                                    maxlength="19"
                                    class="w-full bg-white/[0.04] border border-white/10 py-3.5 px-4
                                      text-sm text-white placeholder:text-white/20 font-mono
                                      focus:outline-none focus:border-white/35 transition-all rounded-none" />
                                <div
                                    class="absolute inset-y-0 right-4 flex items-center opacity-20 grayscale brightness-200">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg"
                                        class="h-2.5" alt="Visa" />
                                </div>
                            </div>
                        </div>

                        {{-- Expiry + CVV --}}
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label
                                    class="block text-[9px] font-medium uppercase tracking-[0.3em] text-white/35 mb-2">Expiry</label>
                                <input type="text" wire:model="cardExpiry" placeholder="MM / YY" maxlength="7"
                                    class="w-full bg-white/[0.04] border border-white/10 py-3.5 px-4
                                      text-sm text-white placeholder:text-white/20 font-mono
                                      focus:outline-none focus:border-white/35 transition-all rounded-none" />
                            </div>
                            <div>
                                <label
                                    class="block text-[9px] font-medium uppercase tracking-[0.3em] text-white/35 mb-2">Security
                                    Code</label>
                                <input type="text" wire:model="cardCvv" placeholder="CVV" maxlength="3"
                                    class="w-full bg-white/[0.04] border border-white/10 py-3.5 px-4
                                      text-sm text-white placeholder:text-white/20 font-mono
                                      focus:outline-none focus:border-white/35 transition-all rounded-none" />
                            </div>
                        </div>

                        {{-- Email --}}
                        <div>
                            <label class="block text-[9px] font-medium uppercase tracking-[0.3em] text-white/35 mb-2">
                                Email Address
                            </label>
                            <input type="email" wire:model="email" placeholder="your@email.com"
                                class="w-full bg-white/[0.04] border border-white/10 py-3.5 px-4
                                  text-sm text-white placeholder:text-white/20
                                  focus:outline-none focus:border-white/35 transition-all rounded-none" />
                        </div>

                        {{-- Submit --}}
                        <button wire:click="checkout"
                            class="w-full bg-white text-black py-5 mt-2 text-[10px] font-medium
                               uppercase tracking-[0.35em] hover:bg-[#f0f0ec]
                               active:scale-[0.99] transition-all">
                            Authorize Payment →
                        </button>

                    </div>

                    {{-- Back Link --}}
                    <a href="{{ route('home') }}"
                        class="block text-center mt-6 text-[9px] uppercase tracking-[0.3em]
                      text-white/20 hover:text-white/50 transition-colors">
                        ← Continue Exploration
                    </a>

                    {{-- Trust Badges --}}
                    <div
                        class="mt-8 pt-6 border-t border-white/[0.06] flex items-center justify-center gap-8 opacity-15 grayscale brightness-200">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" class="h-2"
                            alt="Visa" />
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg"
                            class="h-4" alt="Mastercard" />
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" class="h-3"
                            alt="PayPal" />
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
