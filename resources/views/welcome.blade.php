<x-layout>

    <header class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center display-4 title my-4 h1-header">Bits Tech Shop</h1>
            </div>
        </div>
    </header>

    <main class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">

                <form class="py-3 px-5 bg-form shadow rounded color-form" method="POST"
                    action="{{ route('product.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del prodotto</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione del prodotto</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo del prodotto €</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>


                    <button type="submit" class="btn btn-form">Salva</button>
                </form>


            </div>
        </div>

    </main>



</x-layout>
