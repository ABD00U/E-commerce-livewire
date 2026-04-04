<nav class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 max-w-[1500px]">
        <div class="flex justify-between h-16 items-center">

            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="text-2xl font-bold text-indigo-600">SHOP.</a>
            </div>

            <div class="hidden md:flex space-x-8 items-center">
                <a href="/" class="text-gray-600 hover:text-indigo-600 transition">Home</a>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-indigo-600 transition">About</a>
                <a href="{{ route('categories') }}"
                    class="text-gray-600 hover:text-indigo-600 transition">Categories</a>
                <button @click="$store.auth.redirect('/history')"
                    class="text-gray-600 hover:text-indigo-600 transition">orders History</button>
            </div>

            <div class="flex items-center space-x-4">
                <button @click="$store.auth.redirect('/sell')"
                    class="px-5 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-full transition-all duration-200 transform hover:scale-105 shadow-md active:scale-95 inline-block">
                    Sell Now
                </button>

                @if (auth()->check())
                    <form method="POST" action={{ route('logout') }}>
                        @csrf

                        <button type="submit"
                            class="text-gray-500 hover:text-red-600 p-2 rounded-full hover:bg-red-50 transition flex items-center space-x-2">

                            <span> Logout</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </button>
                    </form>
                @else
                    <a href="/login"
                        class="group flex items-center gap-2 text-base text-gray-500 transition hover:text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 transition-colors group-hover:stroke-indigo-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.963-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                        <span>Login</span>
                    </a>
                @endif


                @auth

                    @livewire('cart-icon')
                @endauth
            </div>
        </div>
    </div>
</nav>
