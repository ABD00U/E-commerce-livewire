<div class="min-h-screen bg-[#FAFAF8] flex flex-col justify-center py-12 sm:px-6 lg:px-8"
    style="font-family: 'DM Sans', sans-serif;">
    <div class="sm:mx-auto w-full max-w-md">
        <div class="text-center">
            {{-- Technical Icon --}}
            <div class="inline-flex items-center justify-center h-20 w-20 rounded-none bg-black shadow-2xl mb-8">
                <svg class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                </svg>
            </div>

            <h2 class="text-4xl tracking-tight text-black" style="font-family: 'DM Serif Display', serif;">
                Client <em class="italic font-light text-black/40">Authentication.</em>
            </h2>
            <p class="mt-4 text-[11px] font-bold uppercase tracking-[0.2em] text-black/40">
                Authorized Personnel Only
            </p>
        </div>

        <div class="mt-10 sm:mx-auto w-full max-w-md">
            <div class="bg-white py-12 px-6 shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-black/5 sm:px-12">
                <form class="space-y-6" wire:submit.prevent="login" method="POST">
                    {{-- Phone Field --}}

                    <div>

                        <label for="phone"
                            class="block text-[10px] font-bold text-black uppercase tracking-widest mb-2">Phone
                            Number</label>

                        <div class="relative mt-1">
                            <input id="phone" name="phone" type="tel" wire:model.blur="phone"
                                class="appearance-none block w-full px-4 py-4 border border-black/10 rounded-none bg-[#FAFAF8] text-sm placeholder-black/20 focus:outline-none focus:ring-1 focus:ring-black focus:border-black transition-all"
                                placeholder="010XXXXXXXX">
                        </div>
                        @error('phone')
                            <span
                                class="mt-2 block text-[10px] font-bold text-red-600 uppercase tracking-tight">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Password Field --}}
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label for="password"
                                class="block text-[10px] font-bold text-black uppercase tracking-widest">Password</label>
                        </div>
                        <div class="relative mt-1">
                            <input id="password" name="password" type="password" wire:model.blur="password"
                                class="appearance-none block w-full px-4 py-4 border border-black/10 rounded-none bg-[#FAFAF8] text-sm placeholder-black/20 focus:outline-none focus:ring-1 focus:ring-black focus:border-black transition-all"
                                placeholder="••••••••">
                        </div>
                        @error('password')
                            <span
                                class="mt-2 block text-[10px] font-bold text-red-600 uppercase tracking-tight">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" wire:model="remember"
                                class="h-4 w-4 text-black focus:ring-black border-black/20 rounded-none">
                            <label for="remember-me" class="ml-2 block text-[12px] font-medium text-black/60">Persistent
                                Session</label>
                        </div>
                        <a href="{{ route('register') }}"
                            class="text-[11px] font-bold text-black border-b border-black/10 hover:border-black transition-all uppercase tracking-widest">
                            New Account
                        </a>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-5 px-4 border border-transparent bg-black text-[11px] font-bold text-white uppercase tracking-[0.25em] transition-all hover:bg-black/80 hover:scale-[1.01] active:scale-95 shadow-xl">
                            Enter Portal
                        </button>
                    </div>
                </form>

                {{-- Security Footer --}}
                <div class="mt-10 pt-8 border-t border-black/5">
                    <div class="flex flex-col items-center gap-4 text-center">
                        <div
                            class="flex items-center gap-2 text-[9px] font-bold uppercase tracking-[0.2em] text-black/30">
                            <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            End-to-End Encryption
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
