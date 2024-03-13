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
                <div class="col-md-4">
                    <img src="{{asset('images/'.$product->image)}}" alt="{{$product->image}}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="product-details">
                        <h4 class="product-name">{{ $product->name }}</h4>
                        <p class="discounted-price">{{ $product->price }}</p>
                    </div>
                </div>
            </div>
            <div class="action-buttons">

                <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>

        </div>
    <?php  } ?>
    {{ $products->links() }}
    @endsection


</body>

</html>