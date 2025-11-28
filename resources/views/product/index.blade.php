<x-layout>

    <header class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center display-4 title my-4 h1-header">I Miei Prodotti</h1>
            </div>
        </div>
    </header>

    <main class="container my-4">
        <div class="row g-4">

            @foreach ($products as $product)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm product-card h-100 p-3">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                            <p class="card-text text-primary">{{ $product->description }}</p>
                            <p class="price fw-bold text-primary">{{ $product->price }} €</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </main>

</x-layout>
