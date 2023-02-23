<x-layout>
    <x-header 
    title="Prodotti dell'utente"
    />
    <div class="container my-3">
        <div class=" row justify-content-center">
            @foreach ($user->products as $product)
            <div class="col-12 col-md-8 col-lg-6">
                <x-card-product 
                    :product="$product"
                />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>