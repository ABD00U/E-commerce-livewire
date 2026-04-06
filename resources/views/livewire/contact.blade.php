<section class="py-24 bg-[#FAFAF8]" style="font-family: 'DM Sans', sans-serif;">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="mb-20 border-b border-black/5 pb-12">
            <div class="mb-3 flex items-center gap-3 text-[10px] font-bold uppercase tracking-[0.25em] text-black">
                <span class="h-px w-8 bg-black"></span>
                Contact Registry
            </div>
            <h2 class="text-4xl tracking-tight text-black sm:text-5xl" style="font-family: 'DM Serif Display', serif;">
                Connect With <em class="italic font-light text-black/40">Technical Support.</em>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-black/5 border border-black/5">

            {{-- Location Card --}}
            <div
                class="p-12 bg-white flex flex-col items-start group hover:bg-[#F5F4F0] transition-colors duration-500">
                <div class="mb-8 p-4 bg-black text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                </div>
                <h3 class="text-[10px] font-bold uppercase tracking-[0.2em] text-black/30 mb-4">Physical HQ</h3>
                <p class="text-xl text-black leading-snug font-medium mb-6"
                    style="font-family: 'DM Serif Display', serif;">
                    123 Technology Blvd<br>New Cairo, Egypt
                </p>
                <a href="#"
                    class="inline-flex items-center text-[10px] font-bold uppercase tracking-widest text-black border-b border-black/10 hover:border-black transition-all pb-1">
                    Route Map <span class="ml-2">→</span>
                </a>
            </div>

            {{-- Email Card - The Highlighted Center --}}
            <div class="p-12 bg-black text-white flex flex-col items-start relative overflow-hidden group">
                {{-- Decorative Tech Grid Background --}}
                <div class="absolute inset-0 opacity-10 pointer-events-none"
                    style="background-image: radial-gradient(#ffffff 0.5px, transparent 0.5px); background-size: 20px 20px;">
                </div>

                <div class="mb-8 p-4 bg-white text-black relative z-10">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </div>
                <h3 class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/40 mb-4 relative z-10">Digital
                    Inquiries</h3>
                <p class="text-xl text-white leading-snug font-medium mb-6 relative z-10"
                    style="font-family: 'DM Serif Display', serif;">
                    orders@yourbrand.com<br>support@yourbrand.com
                </p>
                <p class="mt-auto text-[10px] font-bold uppercase tracking-widest text-white/30 relative z-10">
                    <span class="text-white">Active</span> — 24h Response Protocol
                </p>
            </div>

            {{-- Phone Card --}}
            <div
                class="p-12 bg-white flex flex-col items-start group hover:bg-[#F5F4F0] transition-colors duration-500">
                <div class="mb-8 p-4 bg-black text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.824-1.125-5.11-3.411-6.234-6.234l1.293-.97c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                </div>
                <h3 class="text-[10px] font-bold uppercase tracking-[0.2em] text-black/30 mb-4">Direct Communication
                </h3>
                <p class="text-xl text-black leading-snug font-medium mb-6"
                    style="font-family: 'DM Serif Display', serif;">
                    Mon – Fri, 09:00 – 18:00<br>+20 (123) 456-7890
                </p>
                <div class="mt-auto flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-green-500 animate-pulse"></span>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-black/30">Lines Online</span>
                </div>
            </div>

        </div>
    </div>
</section>
