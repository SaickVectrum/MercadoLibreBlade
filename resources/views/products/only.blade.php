<x-app title="Categorias">
    <section class="container">
        <div class="d-flex justify-content-center my-4">
            <h1></h1>
        </div>

            <div class="card border-warning mb-3 p-5" style="max-width: 1000px;">
                <div class="row g-0">
                    <div class="col-md-4" >
                        <div class="m-2 h-100 w-100">
                            <a><img src="{{ $product->file->route }}" class="img-fluid rounded-start" alt="Portada producto"></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{ $product->title }}</h3>
                            <p>{{ $product->description }}</p>
                            <p class="card-text">Precio: ${{ number_format($product->price) }}</p>
                            <p>Stock: {{ $product->stock }} Unidad(es)</p>
                            <form action="{{ route('add') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="submit" name="btn" class="btn btn-primary w-50"
                                    value="Añadir al carrito">
                            </form>
                        </div>
                    </div>
                </div>
            </div>


    </section>
</x-app>
