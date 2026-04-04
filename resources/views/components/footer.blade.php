  <footer class="bg-gray-900 text-gray-300 pt-12 pb-6">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8 max-w-[1500px]">

          <div class="col-span-1 md:col-span-1">
              <h3 class="text-white text-xl font-bold mb-4">SHOP.</h3>
              <p class="text-sm leading-6">
                  The best place to buy and sell high-quality products. Join our community of thousands of sellers.
              </p>
          </div>

          <div>
              <h4 class="text-white font-semibold mb-4">Navigation</h4>
              <ul class="space-y-2 text-sm">
                  <li><a href="/" class="hover:text-white transition">Home</a></li>
                  <li><a href={{ route('about') }} class="hover:text-white transition">About Us</a></li>
                  <li> <a href="{{ route('sell') }}" wire:navigate> Start Selling</a></li>
                  <li><a href={{ route('contact') }} class="hover:text-white transition">Contact Support</a></li>
              </ul>
          </div>

          <div>
              <h4 class="text-white font-semibold mb-4">My Account</h4>
              <ul class="space-y-2 text-sm">
                  <li><a href="/orders" class="hover:text-white transition">Order History</a></li>
                  <li><a href="/wishlist" class="hover:text-white transition">Wishlist</a></li>
              </ul>
          </div>

          <div>
              <h4 class="text-white font-semibold mb-4">Stay Updated</h4>

              <form class="flex gap-2">
                  <input type="email" placeholder="Your email"
                      class="bg-gray-800 border-none rounded px-3 py-2 text-sm w-full focus:ring-2 focus:ring-indigo-500">
                  <button
                      class="bg-indigo-600 text-white px-4 py-2 rounded text-sm hover:bg-indigo-700 transition">Join</button>
              </form>
          </div>
      </div>

      <div class="max-w-7xl mx-auto px-4 mt-12 pt-6 border-t border-gray-800 text-center text-xs">
          <p>&copy; 2026 SHOP Inc. All rights reserved.</p>
      </div>
  </footer>
