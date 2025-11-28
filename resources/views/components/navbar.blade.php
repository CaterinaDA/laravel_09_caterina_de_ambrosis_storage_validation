<nav class="navbar navbar-expand-lg navbar-dark py-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('homepage') }}">Bits</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('homepage') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}">Prodotti</a></li>
            </ul>
        </div>
    </div>
</nav>
