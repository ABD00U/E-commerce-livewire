<div class="max-w-4xl mx-auto my-10 px-4">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

        <div class="bg-indigo-600 p-6">
            <h2 class="text-2xl font-bold text-white">List a New Product</h2>
            <p class="text-indigo-100 text-sm">Fill in the details below to reach thousands of buyers.</p>
        </div>

        <form wire:submit.prevent="save" class="p-8 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div class="space-y-4">
                    <label class="block text-sm font-semibold text-gray-700">Product Image</label>

                    <div
                        class="relative group border-2 border-dashed {{ $errors->has('image') ? 'border-red-400 bg-red-50' : 'border-gray-300 bg-gray-50' }} rounded-xl p-4 transition hover:border-indigo-400 flex flex-col items-center justify-center min-h-[250px]">

                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" class="rounded-lg object-cover h-48 w-full">
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400 mb-3" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="text-xs text-gray-500 font-medium">Click or drag to upload image</p>
                        @endif

                        <input type="file" wire:model="image"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                    </div>
                    @error('image')
                        <p class="text-xs text-red-600 mt-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Product Title</label>
                        <input type="text" wire:model="name"
                            class="w-full px-4 py-2 border {{ $errors->has('name') ? 'border-red-400' : 'border-gray-200' }} rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition">
                        @error('name')
                            <p class="text-xs text-red-600 mt-1 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Price ($)</label>
                            <input type="number" wire:model="price"
                                class="w-full px-4 py-2 border {{ $errors->has('price') ? 'border-red-400' : 'border-gray-200' }} rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                            @error('price')
                                <p class="text-xs text-red-600 mt-1 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                            <select wire:model="category"
                                class="w-full px-4 py-2 border {{ $errors->has('category') ? 'border-red-400' : 'border-gray-200' }} rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                                <option value="">Select...</option>
                                <option value="electronics">Electronics</option>
                                <option value="fashion">Fashion</option>
                                <option value="home">cars</option>
                            </select>
                            @error('category')
                                <p class="text-xs text-red-600 mt-1 font-medium">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea wire:model="description" rows="4"
                            class="w-full px-4 py-2 border {{ $errors->has('description') ? 'border-red-400' : 'border-gray-200' }} rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none"></textarea>
                        @error('description')
                            <p class="text-xs text-red-600 mt-1 font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="pt-6 border-t border-gray-100 flex justify-end gap-3">
                <button type="button" class="px-6 py-2 text-gray-600 font-medium hover:bg-gray-50 rounded-lg">
                    Cancel
                </button>

                <button type="submit" wire:loading.attr="disabled"
                    class="px-8 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg shadow-md transition-all active:scale-95 disabled:opacity-50">
                    <span wire:loading.remove>Post Product</span>
                    <span wire:loading>Processing...</span>
                </button>
            </div>
        </form>
    </div>
</div>
