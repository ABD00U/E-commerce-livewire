<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto w-full max-w-md">
        <div class="text-center">
            <div class="inline-flex items-center justify-center h-16 w-16 rounded-2xl bg-indigo-600 shadow-lg mb-6">
                <svg class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </div>


            <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Welcome back</h2>
            <p class="mt-2 text-sm text-gray-600">
                Or
                <a href={{ route('register') }}
                    class="font-medium text-indigo-600 hover:text-indigo-500 transition-colors">
                    create a new account
                </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto w-full max-w-md">
            <div class="bg-white py-8 px-4 shadow-sm border border-gray-100 sm:rounded-2xl sm:px-10">
                <form class="space-y-6" wire:submit.prevent="login" method="POST">
                    <div>
                        <label for="phone" class="block text-sm font-bold text-gray-700">phone Number</label>
                        <div class="mt-1">
                            <input id="phone" name="phone" type="tel"wire:model.blur="phone"
                                class="appearance-none block w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all"
                                placeholder="010xxxxxxxx">
                        </div>
                        @error('phone')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-bold text-gray-700">Password</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" wire:model.blur="password"
                                class="appearance-none block w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all"
                                placeholder="••••••••">
                        </div>
                        @error('password')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" wire:model="remember"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded-md">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-600">Remember me</label>
                        </div>


                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-lg text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all active:scale-95">
                            Sign in
                        </button>
                    </div>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">Secure access</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
