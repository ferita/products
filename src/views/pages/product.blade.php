<main role="main">

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mb-2 box-shadow">
                        <img class="card-img-top" src="{{ asset('vendor/products/img.jpeg') }}" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                        <div class="card-body">
                            <h1>{{$product->name}}</h1>
                            <p>Артикул: {{ $product->art }}</p>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    @can('edit-delete-product')
                                        <a href="{{ route('products.edit', $product->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary mr-2">Редактировать</button></a>
                                        <a href="{{ route('products.delete', $product->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary mr-2" onclick="return confirm('Удалить продукт?');">Удалить</button></a>
                                    @endcan
                                        <a href="{{ url()->previous() }}"><button type="button" class="btn btn-sm btn-outline-secondary mr-2">Назад</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
