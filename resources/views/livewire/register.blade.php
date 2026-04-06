<div class="min-h-screen bg-[#FAFAF8] flex flex-col justify-center py-16 sm:px-6 lg:px-8"
    style="font-family: 'DM Sans', sans-serif;">
    <div class="sm:mx-auto w-full max-w-md">
        <div class="text-center">
            {{-- Technical Branding Icon --}}
            <div class="inline-flex items-center justify-center h-20 w-20 rounded-none bg-black shadow-2xl mb-8">
                <svg class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="1.2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM3 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 019 21.25a12.317 12.317 0 01-6-2.015z" />
                </svg>
            </div>

            <h2 class="text-4xl tracking-tight text-black" style="font-family: 'DM Serif Display', serif;">
                New <em class="italic font-light text-black/40">Membership.</em>
            </h2>
            <p class="mt-4 text-[11px] font-bold uppercase tracking-[0.2em] text-black/40">
                Register for exclusive tech access
            </p>
        </div>

        <div class="mt-10 sm:mx-auto w-full max-w-md">
            <div class="bg-white py-12 px-6 shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-black/5 sm:px-12">
                <form class="space-y-6" wire:submit.prevent="register" method="POST">

                    {{-- Full Name --}}
                    <div>
                        <label for="name"
                            class="block text-[10px] font-bold text-black uppercase tracking-widest mb-2">Full
                            Name</label>
                        <input id="name" name="name" type="text" wire:model.blur="name"
                            class="appearance-none block w-full px-4 py-4 border border-black/10 rounded-none bg-[#FAFAF8] text-sm placeholder-black/20 focus:outline-none focus:ring-1 focus:ring-black focus:border-black transition-all"
                            placeholder="Full Name">
                        @error('name')
                            <span class="mt-2 block text-[10px] font-bold text-red-600 uppercase">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Phone Number --}}
                    <div>
                        <label for="phone"
                            class="block text-[10px] font-bold text-black uppercase tracking-widest mb-2">Phone
                            Number</label>
                        <input id="phone" name="phone" type="tel" wire:model.blur="phone"
                            class="appearance-none block w-full px-4 py-4 border border-black/10 rounded-none bg-[#FAFAF8] text-sm placeholder-black/20 focus:outline-none focus:ring-1 focus:ring-black focus:border-black transition-all"
                            placeholder="01XXXXXXXXX">
                        @error('phone')
                            <span class="mt-2 block text-[10px] font-bold text-red-600 uppercase">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div>
                        <label for="password"
                            class="block text-[10px] font-bold text-black uppercase tracking-widest mb-2">Password</label>
                        <input id="password" name="password" type="password" wire:model.blur="password"
                            class="appearance-none block w-full px-4 py-4 border border-black/10 rounded-none bg-[#FAFAF8] text-sm placeholder-black/20 focus:outline-none focus:ring-1 focus:ring-black focus:border-black transition-all"
                            placeholder="Min. 8 characters">
                        @error('password')
                            <span class="mt-2 block text-[10px] font-bold text-red-600 uppercase">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Confirm Password --}}
                    <div>
                        <label for="password_confirmation"
                            class="block text-[10px] font-bold text-black uppercase tracking-widest mb-2">Confirm
                            Identity</label>
                        <input id="password_confirmation" name="password_confirmation" type="password"
                            wire:model.blur="password_confirmation"
                            class="appearance-none block w-full px-4 py-4 border border-black/10 rounded-none bg-[#FAFAF8] text-sm focus:outline-none focus:ring-1 focus:ring-black focus:border-black transition-all">
                        @error('password_confirmation')
                            <span class="mt-2 block text-[10px] font-bold text-red-600 uppercase">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-5 px-4 bg-black text-[11px] font-bold text-white uppercase tracking-[0.25em] transition-all hover:bg-black/80 hover:scale-[1.01] active:scale-95 shadow-xl">
                            Initialize Account
                        </button>
                    </div>
                </form>

                <div class="mt-10 pt-8 border-t border-black/5 text-center">
                    <p class="text-[12px] text-black/50">
                        Already have an account?
                        <a href="{{ route('login') }}"
                            class="ml-1 font-bold text-black border-b border-black/10 hover:border-black transition-all uppercase tracking-widest">
                            Sign In
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
