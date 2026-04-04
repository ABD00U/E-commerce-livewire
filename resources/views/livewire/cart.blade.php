<div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
    <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 mb-8">
        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">Shopping Cart</h1>
        <p class="text-sm text-gray-500">You have (3) items in your cart</p>
    </div>

    <div class="lg:grid lg:grid-cols-12 lg:gap-x-12 lg:items-start">
        <div class="lg:col-span-7">
            <div class="space-y-6">
                <div
                    class="group relative flex flex-col sm:flex-row gap-6 bg-white p-4 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all">
                    <div class="h-32 w-32 flex-shrink-0 overflow-hidden rounded-xl border border-gray-100 bg-gray-50">
                        <img src="https://via.placeholder.com/150" alt="Item Image"
                            class="h-full w-full object-contain object-center group-hover:scale-105 transition-transform duration-300">
                    </div>


                    @foreach ($productInCart as $item)
                        <div class="flex flex-1 flex-col justify-between">
                            <div class="flex justify-between items-start">
                                <div>
                                    <span
                                        class="text-xs font-bold text-indigo-600 uppercase tracking-wider">Category</span>
                                    <h3 class="text-lg font-bold text-gray-900 mt-1">Item Name</h3>
                                </div>
                                <p class="text-xl font-black text-gray-900">$299.00</p>
                            </div>

                            <div class="flex items-center justify-between mt-4">
                                <div class="inline-flex items-center p-1 bg-gray-50 rounded-xl border border-gray-200">
                                    <button
                                        class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-white hover:shadow-sm text-gray-600 transition-all font-bold">-</button>
                                    <span class="mx-4 font-bold text-gray-900">1</span>
                                    <button
                                        class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-white hover:shadow-sm text-gray-600 transition-all font-bold">+</button>
                                </div>

                                <button
                                    class="text-sm font-medium text-red-500 hover:text-red-700 flex items-center gap-1 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Remove
                                </button>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="mt-12 lg:mt-0 lg:col-span-5 lg:sticky lg:top-8">
            <div class="bg-gray-900 rounded-3xl p-8 text-white shadow-2xl">
                <h2 class="text-xl font-bold mb-6">Order Summary</h2>

                <div class="py-6 flex items-center justify-between border-b border-gray-800 mb-8">
                    <dt class="text-xl font-bold">Total</dt>
                    <dd class="text-3xl font-black text-indigo-400">$299.00</dd>
                </div>

                <form class="space-y-6">
                    <div>
                        <label for="card_number" class="block text-sm font-medium text-gray-400">Card Number</label>
                        <div class="relative mt-1">
                            <input type="text" name="card_number" id="card_number" placeholder="0000 0000 0000 0000"
                                class="block w-full rounded-xl border-gray-700 bg-gray-800 p-4 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg"
                                    alt="Visa" class="h-4">
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="expiry_date" class="block text-sm font-medium text-gray-400">Expiry Date</label>
                            <input type="text" name="expiry_date" id="expiry_date" placeholder="MM / YY"
                                class="mt-1 block w-full rounded-xl border-gray-700 bg-gray-800 p-4 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="cvv" class="block text-sm font-medium text-gray-400">CVV</label>
                            <input type="text" name="cvv" id="cvv" placeholder="123"
                                class="mt-1 block w-full rounded-xl border-gray-700 bg-gray-800 p-4 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="w-full bg-indigo-500 text-white rounded-2xl py-4 font-bold hover:bg-indigo-600 transition-all shadow-lg shadow-indigo-500/20 active:scale-[0.98]">
                            Pay $299.00 Now
                        </button>
                    </div>
                </form>

                <div class="mt-6">
                    <a href="#"
                        class="block w-full text-center bg-transparent border border-gray-700 text-gray-300 rounded-2xl py-4 font-bold hover:bg-gray-800 transition-all">
                        Continue Shopping
                    </a>
                </div>

                <div class="mt-6 flex items-center justify-center gap-6 grayscale opacity-60">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" class="h-3"
                        alt="Visa">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" class="h-5"
                        alt="Mastercard">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" class="h-4"
                        alt="PayPal">
                </div>
            </div>
        </div>
    </div>
</div>
