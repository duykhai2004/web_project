<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
</head>
<body>
@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->image }}">
            </div>
            <div class="col-md-6">
                <h2>{{ $product->name }}</h2>
                <p class="discounted-price">{{ $product->price }}</p>
                <p><?php
                        $description = trim(strip_tags($product['description']));
                        echo $description;
                        ?></p>
                <!-- Thêm các chi tiết sản phẩm khác nếu cần -->
            </div>
        </div>
    </div>
@endsection

</body>
</html>