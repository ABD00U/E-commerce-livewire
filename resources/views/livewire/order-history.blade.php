<div class="max-w-[1400px] mx-auto md:px-6 py-20 lg:px-12" style="font-family: 'DM Sans', sans-serif;">

    {{-- Header: Registry Status --}}
    <div class="flex items-end justify-between border-b border-black/5 pb-10 mb-16">
        <div>
            <div class="mb-3 flex items-center gap-3 text-[10px] font-bold uppercase tracking-[0.3em] text-black/40">
                <span class="h-px w-8 bg-black/20"></span>
                Archived Deployments
            </div>
            <h1 class="text-5xl tracking-tighter text-black sm:text-6xl" style="font-family: 'DM Serif Display', serif;">
                Your <em class="italic font-light text-black/30">History.</em>
            </h1>
        </div>
        <div class="text-right">
            <p class="text-[10px] font-bold text-black uppercase tracking-widest">Total Logs</p>
            <p class="text-2xl font-light text-black/40">{{ count($orders) }}</p>
        </div>
    </div>

    {{-- Main Outer Container --}}
    <div class="border border-black/10 bg-[#FAFAF9] p-8 md:p-12 overflow-hidden">

        {{-- Technical Header: Aligned Order ID, Address, Date, and Total --}}
        <div class="flex flex-col sm:flex-row justify-between items-end border-b border-black/10 pb-10 mb-12 gap-8">

            {{-- Left: Identity, Address & Timeline --}}
            <div class="flex flex-wrap gap-12 items-end">
                {{-- Order ID --}}
                <div>
                    <span class="text-[10px] font-bold text-black/30 uppercase tracking-[0.3em] block mb-2">Manifest
                        ID</span>
                    <h2 class="text-3xl tracking-tighter text-black font-mono">
                        #Order{{ $orders->first()->id ?? '0000' }}
                    </h2>
                </div>

                {{-- User Address (Aligned with ID) --}}
                <div>
                    <span
                        class="text-[10px] font-bold text-black/30 uppercase tracking-[0.3em] block mb-2">Destination</span>
                    <p class="text-[11px] font-bold text-black uppercase tracking-wider leading-tight max-w-[200px]">
                        {{ $orders->first()->address ?? 'Sector 7, Central District, HQ' }}
                    </p>
                </div>

                {{-- Date --}}
                <div>
                    <span
                        class="text-[10px] font-bold text-black/30 uppercase tracking-[0.3em] block mb-2">Timestamp</span>
                    <p class="text-sm font-medium text-black uppercase tracking-widest">
                        {{ $orders->first()->created_at->format('d M Y') ?? date('d M Y') }}
                    </p>
                </div>
            </div>

            {{-- Right: Status & Total Aligned --}}
            <div class="flex gap-12 items-end text-right">
                <div>
                    <span class="text-[10px] font-bold text-black/30 uppercase tracking-[0.3em] block mb-2">Global
                        Status</span>
                    <div class="flex items-center gap-2 justify-end">
                        <span class="h-1.5 w-1.5 rounded-full bg-yellow-500"></span>

                        <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-black">
                            {{ $orders->first()->status ?? 'Pending' }}
                        </span>
                    </div>
                </div>

                <div>
                    <span class="text-[10px] font-bold text-black/30 uppercase tracking-[0.3em] block mb-2">Total
                        Valuation</span>
                    <p class="text-4xl tracking-tighter text-black" style="font-family: 'DM Serif Display', serif;">
                        ${{ number_format($orders->first()->total, 2) }}
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($this->orders->first()->items as $order)
                <div
                    class="group relative bg-white border border-black/5 p-8 transition-all duration-500 hover:border-black/20 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)]">

                    <div class="flex gap-6 mb-8">
                        <div
                            class="h-20 w-20 flex-shrink-0 bg-[#F5F5F3] border border-black/5 p-3 group-hover:scale-105 transition-transform">
                            <img src="{{ asset('storage/' . $order->product->image) }}" alt="Product"
                                class="h-full w-full object-contain mix-blend-multiply opacity-90">
                        </div>
                        <div class="flex-1">
                            <span
                                class="text-[9px] font-bold text-black/30 uppercase tracking-[0.2em] block mb-1">Hardware</span>
                            <h3 class="text-xl text-black leading-tight mb-2"
                                style="font-family: 'DM Serif Display', serif;">
                                {{ $order->product->name }}
                            </h3>

                            <p class="text-[11px] font-mono text-black/40">
                                QTY: {{ $order->quantity }} <span class="mx-1">/</span>
                                ${{ number_format($order->product->price) }}
                            </p>
                        </div>
                    </div>

                    {{-- Sub-Total for this item --}}
                    <div class="pt-6 border-t border-black/[0.03] flex justify-between items-center">
                        <p class="text-xl tracking-tighter text-black/40">
                            ${{ number_format($order->product->price * $order->quantity) }}
                        </p>

                        <a href={{ route('product', $order->product->id) }}
                            class="text-[9px] font-bold uppercase tracking-widest text-black/30 hover:text-black transition-colors">
                            Trace Unit →
                        </a>
                    </div>
                </div>


            @empty
                <div class="col-span-full py-32 text-center">
                    <p class="text-[10px] font-bold uppercase tracking-[0.5em] text-black/20 font-mono">Registry:
                        Empty
                    </p>
                </div>
            @endforelse
        </div>

    </div>
</div>
