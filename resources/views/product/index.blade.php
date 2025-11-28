<x-layout>

    <header class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center display-4 title my-4 h1-header">I Miei Prodotti</h1>
            </div>
        </div>
    </header>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <main class="container my-4">
        <div class="row g-4">

            @foreach ($products as $product)
                <div class="col-12 col-md-6 col-lg-4">
                    <x-card :product=$product />
                </div>
            @endforeach

        </div>
    </main>

</x-layout>
