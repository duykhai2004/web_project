<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS styles for product item */
        .product-item {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        .product-item:hover {
            border-color: #007bff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .product-details {
            padding: 10px;
        }

        .action-buttons {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
</head>

<body>
    @extends('layouts.layout-admin')
    @section('content')
    <a href="create" class="btn btn-primary me-2 m-2">Create</a>
    <?php foreach ($products as $product) { ?>
        <div class="product-item position-relative">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('images/'.$product->image)}}" alt="{{$product->image}}" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="product-details">
                        <h4 class="product-name">{{ $product->name }}</h4>
                        <p class="discounted-price">{{ $product->price }}</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <form action="{{ route('admin.product.delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </div>
            </div>
        </div>
    <?php  } ?>
    {{ $products->links() }}
    @endsection


</body>

</html>