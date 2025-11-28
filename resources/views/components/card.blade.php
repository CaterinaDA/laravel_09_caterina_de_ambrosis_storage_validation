    <div class="card shadow-sm product-card h-100 mb-3">

        <img src="{{ Storage::url($product->img) }}" class="card-img-top product-img"
            alt="Immagine di {{ $product->name }}">

        <div class="card-body p-3">
            <h5 class="card-title fw-bold">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="price fw-bold">{{ $product->price }} €</p>
        </div>

    </div>
