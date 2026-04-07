<div>
    @if ($isOpen)
        <div class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/80 backdrop-blur-md"
            style="font-family: 'DM Sans', sans-serif;">

            {{-- Modal Card --}}
            <div
                class="bg-[#F0EDE8] border border-black/5 p-10 max-w-sm w-full shadow-[0_30px_60px_-15px_rgba(0,0,0,0.5)] relative overflow-hidden">

                <div class="absolute top-0 left-0 h-1 w-full bg-black"></div>

                {{-- Header --}}
                <div class="mb-10">
                    <div
                        class="mb-4 flex items-center gap-2 text-[9px] font-bold uppercase tracking-[0.3em] text-black/40">
                        <span class="h-px w-4 bg-black/20"></span>
                        Secure Access
                    </div>
                    <h2 class="text-3xl tracking-tight text-black leading-none"
                        style="font-family: 'DM Serif Display', serif;">
                        Authenticate <br><em class="italic font-light text-black/40">Your Account.</em>
                    </h2>
                </div>

                <p class="text-[13px] font-medium leading-relaxed text-black/60 mb-10">
                    Please sign in to access professional-grade hardware, saved configurations, and member-only pricing.
                </p>

                {{-- Actions --}}
                <div class="flex flex-col gap-4">
                    <a href="/login"
                        class="w-full bg-black text-white py-4 text-[11px] font-bold uppercase tracking-[0.2em] text-center transition hover:bg-gray-800 transform duration-200">
                        Proceed to Login
                    </a>

                    {{-- Livewire close action --}}
                    <button wire:click="closeModal"
                        class="group flex items-center justify-center gap-2 py-2 text-[10px] font-bold uppercase tracking-[0.15em] text-black/40 transition hover:text-black">
                        Dismiss
                    </button>
                </div>

                {{-- Footer Detail --}}
                <div class="mt-12 pt-6 border-t border-black/5">
                    <p class="text-[9px] uppercase tracking-widest text-black/30 text-center">
                        NexMart Encryption Standards Applied
                    </p>
                </div>
            </div>
        </div>
    @endif
</div>
