<section class="bg-[#FAFAF8] py-24" style="font-family: 'DM Sans', sans-serif;">
    <div class="mx-auto max-w-[1400px] px-4 sm:px-6 lg:px-8">

        {{-- Header Section --}}
        <div class="mb-16 flex flex-wrap items-end justify-between gap-6 border-b border-black/5 pb-12">
            <div>
                <div class="mb-4 flex items-center gap-3 text-[10px] font-bold uppercase tracking-[0.25em] text-black">
                    <span class="h-px w-8 bg-black"></span>
                    Performance Reports
                </div>
                <h2 class="text-4xl tracking-tight text-black sm:text-6xl"
                    style="font-family: 'DM Serif Display', serif;">
                    Trusted by <em class="italic font-light text-black/40">Experts.</em>
                </h2>
            </div>
            <div class="text-right">
                <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-black">99.8% Satisfaction Rate</p>
                <p class="mt-1 text-[10px] uppercase tracking-[0.15em] text-black/30">Based on 12,400+ Global Orders</p>
            </div>
        </div>

        {{-- Testimonials Grid --}}
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            @php
                $testimonials = [
                    [
                        'quote' =>
                            'The build quality on the latest workstation is unmatched. Precision engineering that actually lives up to the spec sheet.',
                        'name' => 'Alex Rivera',
                        'role' => 'Systems Architect',
                        'avatar' => 'https://i.pravatar.cc/150?u=1',
                    ],
                    [
                        'quote' =>
                            'Finding rare components and high-end audio gear used to be a gamble. NexMart has become my primary source for verified hardware.',
                        'name' => 'Sarah Jenkins',
                        'role' => 'Studio Engineer',
                        'avatar' => 'https://i.pravatar.cc/150?u=2',
                    ],
                    [
                        'quote' =>
                            'Seamless checkout and the tracking was updated in real-time. The item arrived in pristine condition, professionally packed.',
                        'name' => 'Marcus Thorne',
                        'role' => 'Hardware Reviewer',
                        'avatar' => 'https://i.pravatar.cc/150?u=3',
                    ],
                ];
            @endphp

            @foreach ($testimonials as $t)
                <div
                    class="group flex flex-col bg-white p-10 border border-black/[0.03] shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] transition-all duration-300 hover:border-black/10 hover:shadow-xl">
                    {{-- Star Rating --}}
                    <div class="mb-8 flex gap-1">
                        @foreach (range(1, 5) as $i)
                            <svg class="h-3 w-3 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endforeach
                    </div>

                    <p class="mb-10 flex-1 text-[1.15rem] leading-relaxed text-black/80 font-medium"
                        style="font-family: 'DM Serif Display', serif; line-height: 1.4;">
                        "{{ $t['quote'] }}"
                    </p>

                    <div class="flex items-center gap-4 border-t border-black/5 pt-8">
                        <img src="{{ $t['avatar'] }}" alt="{{ $t['name'] }}"
                            class="h-11 w-11 rounded-none border border-black/5 object-cover grayscale group-hover:grayscale-0 transition-all">
                        <div>
                            <p class="text-[13px] font-bold text-black uppercase tracking-tight">{{ $t['name'] }}</p>
                            <p class="mt-0.5 text-[9px] font-bold uppercase tracking-[0.15em] text-black/30">
                                {{ $t['role'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
