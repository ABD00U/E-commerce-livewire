<div x-show="$store.auth.showAuthModal"
    class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-gray-900/60 backdrop-blur-sm" x-cloak>

    <div @click.away="showAuthModal = false" class="bg-white rounded-[2.5rem] p-8 max-w-sm w-full shadow-2xl">
        <h2 class="text-2xl font-black text-gray-900 italic tracking-tight mb-4">
            Join the <span class="text-indigo-600">Shop.</span>
        </h2>
        <p class="text-gray-500 mb-8">Please log in to continue.</p>

        <div class="flex flex-col gap-3">
            <a href="/login"
                class="w-full bg-indigo-600 text-white py-4 rounded-2xl font-bold text-center hover:bg-indigo-700 transition">
                Log In
            </a>
            <button @click="$store.auth.showAuthModal = false"
                class="text-gray-400 text-sm font-bold uppercase tracking-widest">
                Maybe Later
            </button>
        </div>
    </div>
</div>
