<div>

    <x-home.home-header />


    <x-home.our-customers />


    <h2 class="text-4xl font-black text-gray-900 italic tracking-tight pb-4 text-center">
        New Arrivals
    </h2>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 ">
        @foreach ($productsData as $product)
            <x-home.productCard :item="$product" />
        @endforeach
    </div>

</div>
