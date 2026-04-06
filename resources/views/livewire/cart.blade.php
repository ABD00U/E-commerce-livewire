<div class="max-w-[1400px] mx-auto px-6 py-20 lg:px-12" style="font-family: 'DM Sans', sans-serif;">

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
            <p class="text-2xl font-light text-black/40">03</p>
        </div>
    </div>

    <div class="lg:grid lg:grid-cols-12 lg:gap-x-20 lg:items-start">

        {{-- Left Side: Hardware List --}}
        <div class="lg:col-span-7">
            <div class="space-y-1"> {{-- Tight spacing for a list feel --}}
                @foreach ($productInCart as $item)
                    <div
                        class="group relative flex flex-col sm:flex-row gap-8 bg-white p-6 border-b border-black/5 hover:bg-[#FAFAF8] transition-colors duration-500">

                        {{-- Image: Technical Preview --}}
                        <div
                            class="h-32 w-32 flex-shrink-0 bg-[#F5F5F3] border border-black/5 p-4 transition-transform group-hover:scale-105">
                            <img src="https://via.placeholder.com/150" alt="Item Image"
                                class="h-full w-full object-contain mix-blend-multiply">
                        </div>

                        <div class="flex flex-1 flex-col justify-between">
                            <div class="flex justify-between items-start">
                                <div>
                                    <span
                                        class="text-[9px] font-bold text-black/30 uppercase tracking-[0.25em]">Component
                                        / Logic</span>
                                    <h3 class="text-xl text-black mt-1 leading-none"
                                        style="font-family: 'DM Serif Display', serif;">MK-V Professional Monitor</h3>
                                    <p class="text-[10px] text-black/40 mt-2 font-mono italic">REF_ID: 8829-X</p>
                                </div>
                                <p class="text-lg font-medium text-black tracking-tighter">$299.00</p>
                            </div>

                            <div class="flex items-center justify-between mt-6">
                                {{-- Industrial Quantity Selector --}}
                                <div class="inline-flex items-center border border-black/10 bg-white">
                                    <button
                                        class="w-10 h-10 flex items-center justify-center hover:bg-black hover:text-white transition-colors text-xs">-</button>
                                    <span class="px-6 text-[11px] font-bold text-black font-mono">01</span>
                                    <button
                                        class="w-10 h-10 flex items-center justify-center hover:bg-black hover:text-white transition-colors text-xs">+</button>
                                </div>

                                <button
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
        <div class="mt-16 lg:mt-0 lg:col-span-5 lg:sticky lg:top-12">
            <div class="bg-black text-white p-10 shadow-[0_40px_80px_rgba(0,0,0,0.15)] relative overflow-hidden">
                {{-- Subtle Technical Background --}}
                <div class="absolute inset-0 opacity-[0.03] pointer-events-none"
                    style="background-image: radial-gradient(#ffffff 0.5px, transparent 0.5px); background-size: 20px 20px;">
                </div>

                <h2 class="text-[10px] font-bold uppercase tracking-[0.4em] mb-10 border-b border-white/10 pb-4">
                    Transaction Protocol</h2>

                {{-- Summary --}}
                <div class="flex items-baseline justify-between mb-12">
                    <span class="text-[11px] font-bold uppercase tracking-widest text-white/40">Total Valuation</span>
                    <span class="text-5xl tracking-tighter"
                        style="font-family: 'DM Serif Display', serif;">$299.00</span>
                </div>

                <form class="space-y-8 relative z-10">
                    <div>
                        <label class="block text-[9px] font-bold text-white/40 uppercase tracking-widest mb-3">Encrypted
                            Card Entry</label>
                        <div class="relative">
                            <input type="text" placeholder="0000 0000 0000 0000"
                                class="w-full bg-white/5 border border-white/10 rounded-none py-4 px-5 text-sm text-white placeholder:text-white/20 focus:outline-none focus:border-white/40 transition-all font-mono">
                            <div
                                class="absolute inset-y-0 right-4 flex items-center grayscale brightness-200 opacity-30">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg"
                                    alt="Visa" class="h-3">
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label
                                class="block text-[9px] font-bold text-white/40 uppercase tracking-widest mb-3">Expiry</label>
                            <input type="text" placeholder="MM / YY"
                                class="w-full bg-white/5 border border-white/10 rounded-none py-4 px-5 text-sm text-white placeholder:text-white/20 focus:outline-none focus:border-white/40 transition-all font-mono">
                        </div>
                        <div>
                            <label
                                class="block text-[9px] font-bold text-white/40 uppercase tracking-widest mb-3">Security
                                Code</label>
                            <input type="text" placeholder="CVV"
                                class="w-full bg-white/5 border border-white/10 rounded-none py-4 px-5 text-sm text-white placeholder:text-white/20 focus:outline-none focus:border-white/40 transition-all font-mono">
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit"
                            class="w-full bg-white text-black py-5 text-[11px] font-bold uppercase tracking-[0.4em] hover:bg-[#FAFAF8] hover:scale-[1.02] active:scale-95 transition-all shadow-2xl shadow-white/5">
                            Authorize Payment
                        </button>
                    </div>
                </form>

                <div class="mt-10 pt-8 border-t border-white/5">
                    <a href="#"
                        class="block w-full text-center text-[9px] font-bold uppercase tracking-[0.3em] text-white/30 hover:text-white transition-colors">
                        ← Continue Exploration
                    </a>
                </div>

                {{-- Security Trust Badges --}}
                <div class="mt-10 flex items-center justify-center gap-8 opacity-20 grayscale brightness-200">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" class="h-2"
                        alt="Visa">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" class="h-4"
                        alt="Mastercard">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" class="h-3"
                        alt="PayPal">
                </div>
            </div>
        </div>
    </div>
</div>
