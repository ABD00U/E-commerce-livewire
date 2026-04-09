<div class="max-w-5xl mx-auto my-16 px-4" style="font-family: 'DM Sans', sans-serif;">
    <div class="bg-white rounded-none shadow-[0_30px_60px_rgba(0,0,0,0.05)] border border-black/5 overflow-hidden">

        {{-- Header: Technical Registry --}}
        <div class="bg-black p-10 flex justify-between items-end">
            <div>
                <h2 class="text-3xl tracking-tight text-white" style="font-family: 'DM Serif Display', serif;">
                    Inventory <em class="italic font-light text-white/40">Registration.</em>
                </h2>
                <p class="text-white/40 text-[10px] font-bold uppercase tracking-[0.2em] mt-2">Product Specification
                    Entry</p>
            </div>
            <div class="text-right hidden sm:block">
                <span class="text-white/20 text-[10px] font-mono tracking-tighter italic">SYS_REF:
                    {{ now()->format('Y-m-d') }}</span>
            </div>
        </div>

        <form wire:submit.prevent="save" class="p-10 space-y-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                {{-- Left: Media Upload --}}
                <div class="lg:col-span-5 space-y-4">
                    <label class="block text-[10px] font-bold text-black uppercase tracking-widest">Hardware
                        Visualization</label>

                    <div
                        class="relative group border border-black/10 {{ $errors->has('image') ? 'bg-red-50' : 'bg-[#FAFAF8]' }} rounded-none p-2 transition hover:border-black flex flex-col items-center justify-center min-h-[350px]">

                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}"
                                class="object-contain h-full w-full grayscale-[0.2] group-hover:grayscale-0 transition-all">
                            <div
                                class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white text-[10px] font-bold uppercase tracking-widest">Replace
                                    Module</span>
                            </div>
                        @else
                            <div class="text-center p-8">
                                <svg class="h-8 w-8 text-black/20 mx-auto mb-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                                <p class="text-[10px] text-black/40 font-bold uppercase tracking-widest">Upload Media
                                    Asset</p>
                            </div>
                        @endif

                        <input type="file" wire:model="image"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                    </div>
                    @error('image')
                        <p class="text-[10px] text-red-600 font-bold uppercase tracking-tighter">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Right: Technical Data --}}
                <div class="lg:col-span-7 space-y-8">
                    {{-- Title --}}
                    <div>
                        <label class="block text-[10px] font-bold text-black uppercase tracking-widest mb-3">Model
                            Designation</label>
                        <input type="text" wire:model="name" placeholder="e.g. MK-V Professional Monitor"
                            class="w-full px-5 py-4 border border-black/10 rounded-none bg-[#FAFAF8] text-sm placeholder-black/20 focus:outline-none focus:ring-1 focus:ring-black focus:border-black transition-all">
                        @error('name')
                            <p class="text-[10px] text-red-600 font-bold uppercase tracking-tighter mt-2">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        {{-- Price --}}
                        <div>
                            <label
                                class="block text-[10px] font-bold text-black uppercase tracking-widest mb-3">Valuation
                                (USD)</label>
                            <input type="number" wire:model="price"
                                class="w-full px-5 py-4 border border-black/10 rounded-none bg-[#FAFAF8] text-sm focus:outline-none focus:ring-1 focus:ring-black focus:border-black transition-all">
                            @error('price')
                                <p class="text-[10px] text-red-600 font-bold uppercase tracking-tighter mt-2">
                                    {{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Category --}}
                        <div>
                            <label class="block text-[10px] font-bold text-black uppercase tracking-widest mb-3">System
                                Category</label>
                            <select wire:model="category"
                                class="w-full px-5 py-4 border border-black/10 rounded-none bg-[#FAFAF8] text-sm focus:outline-none focus:ring-1 focus:ring-black focus:border-black transition-all appearance-none cursor-pointer">
                                <option value="">Select Category</option>
                                <option value="computing">Computing</option>
                                <option value="audio">Audio</option>
                                <option value="mobile">Mobile</option>
                                <option value="smart-home">Smart Home</option>
                            </select>
                            @error('category')
                                <p class="text-[10px] text-red-600 font-bold uppercase tracking-tighter mt-2">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Description --}}
                    <div>
                        <label class="block text-[10px] font-bold text-black uppercase tracking-widest mb-3">Technical
                            Overview</label>
                        <textarea wire:model="description" rows="5" placeholder="Enter detailed specifications..."
                            class="w-full px-5 py-4 border border-black/10 rounded-none bg-[#FAFAF8] text-sm placeholder-black/20 focus:outline-none focus:ring-1 focus:ring-black focus:border-black transition-all"></textarea>
                        @error('description')
                            <p class="text-[10px] text-red-600 font-bold uppercase tracking-tighter mt-2">
                                {{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Footer Actions --}}
            <div class="pt-10 border-t border-black/5 flex items-center justify-between">
                <button type="button"
                    class="text-[10px] font-bold text-black/40 uppercase tracking-[0.2em] hover:text-black transition-colors">
                    Discard Draft
                </button>

                <button type="submit" wire:loading.attr="disabled"
                    class="px-12 py-5 bg-black text-white text-[11px] font-bold uppercase tracking-[0.3em] shadow-xl hover:bg-black/80 hover:scale-[1.02] transition-all active:scale-95 disabled:opacity-50">
                    <span wire:loading.remove>Commit to Registry</span>
                    <span wire:loading class="flex items-center gap-2">
                        <svg class="animate-spin h-3 w-3 text-white" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        Processing...
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
