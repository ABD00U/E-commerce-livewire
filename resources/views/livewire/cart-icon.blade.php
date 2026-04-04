 <a href={{ route('cart') }} class="relative p-2 text-gray-500 hover:bg-gray-100 rounded-full">
     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
             d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
     </svg>

     <span
         class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">

         {{ $cartCount }}</span>
 </a>
