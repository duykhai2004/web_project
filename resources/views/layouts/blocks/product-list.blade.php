<div class="container">
    <div class="row pt-3">
        @foreach($products as $product)
        <div class="col-md-3">
            <div class="product-item">
                <a style="text-decoration: none;" href="{{ route('product.detail', $product->id) }}">
                    <img class="img-fluid" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->image }}">
                    <p class="product-name">{{$product->name}}</p>
                </a>
                <p class="discounted-price">{{$product->price}}</p>
                <button class="btn btn-primary">Yêu thích ❤️</button>
            </div>
        </div>
        @endforeach
    </div>
</div>