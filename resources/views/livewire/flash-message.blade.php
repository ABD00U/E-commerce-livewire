<div>
    @if ($message)
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 8000)" x-show="show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed bottom-8 right-8 z-[200] w-full max-w-[320px]" role="alert">

            <div
                class="bg-black text-white p-5 shadow-[0_20px_40px_rgba(0,0,0,0.3)] border border-white/10 relative overflow-hidden">
                {{-- Progress Bar (Visual Timer) --}}
                <div x-init="$el.style.width = '100%';
                setTimeout(() => $el.style.transition = 'width 8s linear', 50);
                setTimeout(() => $el.style.width = '0%', 100)" class="absolute bottom-0 left-0 h-[2px] bg-white/30 w-full"></div>

                <div class="flex items-start gap-4">
                    {{-- Icon Logic --}}
                    <div class="flex-shrink-0 mt-0.5">
                        @if ($type === 'success')
                            <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        @else
                            <svg class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                        @endif
                    </div>

                    <div class="flex-1">
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] mb-1">
                            {{ $type === 'success' ? 'System Confirmed' : 'System Alert' }}
                        </p>
                        <p class="text-[12px] text-white/70 leading-relaxed font-light">
                            {{ $message }}
                        </p>
                    </div>

                    {{-- Manual Close --}}
                    <button @click="show = false" class="text-white/30 hover:text-white transition-colors">
                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
