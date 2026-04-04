<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto w-full max-w-md">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Create your account</h2>
            <p class="mt-2 text-sm text-gray-600">
                Join us and start shopping in seconds.
            </p>
        </div>

        <div class="mt-8 sm:mx-auto w-full max-w-md">
            <div class="bg-white py-8 px-4 shadow-sm border border-gray-100 sm:rounded-2xl sm:px-10">
                <form class="space-y-5" wire:submit.prevent="register" method="POST">

                    <div>
                        <label for="name" class="block text-sm font-bold text-gray-700">Full Name</label>
                        <div class="mt-1">
                            <input id="name" name="name" type="text" wire:model.blur="name"
                                class="appearance-none block w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all"
                                placeholder="John Doe">
                        </div>

                        @error('name')
                            <p class="text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-bold text-gray-700">phone Number</label>
                        <div class="mt-1">
                            <input id="phone" name="phone" type="tel" wire:model.blur="phone"
                                class="appearance-none block w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all"
                                placeholder="01xxxxxxxxx">
                        </div>
                        @error('phone')
                            <p class="text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-bold text-gray-700">Password</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" wire:model.blur="password"
                                class="appearance-none block w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all"
                                placeholder="Min. 8 characters">
                        </div>

                        @error('password')
                            <p class="text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-bold text-gray-700">Confirm
                            Password</label>
                        <div class="mt-1">
                            <input id="password_confirmation" name="password_confirmation" type="password"
                                wire:model.blur="password_confirmation"
                                class="appearance-none block w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all">
                        </div>
                        @error('password_confirmation')
                            <p class="text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-lg text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all active:scale-95">
                            Register Now
                        </button>
                    </div>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href={{ route('login') }}
                            class="font-bold text-indigo-600 hover:text-indigo-500 transition-colors">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
