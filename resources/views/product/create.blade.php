<x-layout>

    <header class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center display-4 title my-4 h1-header">Inserisci un nuovo prodotto Bits</h1>
            </div>
        </div>
    </header>

    {{-- mostra errori di validazione --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <main class="container-fluid container-create">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">

                <form class="py-3 px-5 bg-form shadow rounded color-form" method="POST"
                    action="{{ route('product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del prodotto</label>
                        <input type="text" value="{{ old('name') }}" class="form-control" id="name"
                            name="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione del prodotto</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo del prodotto €</label>
                        <input type="text" value="{{ old('price') }}" class="form-control" id="price"
                            name="price">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>
                    <button type="submit" class="btn btn-form">Salva</button>
                </form>


            </div>
        </div>

    </main>



</x-layout>
