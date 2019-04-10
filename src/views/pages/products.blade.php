<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Продукты</h1>
            <p class="lead text-muted">Some description, short and leading about the collection below. </p>
            @can('create-product')
                <a href="{{ route('products.create') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Создать новый</button></a>
            @endcan
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">

                @forelse($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <a href="products/{{ $product->id }}"><img class="card-img-top" src="{{ asset('vendor/products/img.jpeg') }}" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap"></a>
                            <div class="card-body">
                                <h2>{{$product->name}}</h2>
                                <p>Артикул: {{ $product->art }}</p>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="products/{{ $product->id }}"><button type="button" class="btn btn-sm btn-outline-secondary mr-2"><i class="far fa-eye"></i></button></a>
                                        @can('edit-delete-product')
                                            <a href="products/edit/{{ $product->id }}"><button type="button" class="btn btn-sm btn-outline-secondary mr-2"><i class="far fa-edit"></i></button></a>
                                            <a href="products/delete/{{ $product->id }}">
                                                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="return confirm('Удалить продукт?');"><i class="far fa-window-close"></i></button>
                                            </a>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Нет товаров</p>
                @endforelse

            </div>
        </div>
    </div>

</main>
