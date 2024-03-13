<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        /* Customizing font styles and colors */
        .product-name {
            font-weight: bold;
            color: #333;
        }

        .discounted-price {
            color: #e74c3c;
            font-weight: 800;
        }

        /* Positioning */
        .product-item {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            /* Adding border */
            border-radius: 5px;
            /* Rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Box shadow effect */
            padding: 10px;
            /* Adding padding */
            transition: box-shadow 0.3s ease;
            /* Hover effect */
        }

        /* Hover effect */
        .product-item:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Image size */
        .product-item img {
            max-width: 100%;
            height: auto;
        }

        /* Flexbox layout */
        .col-md-3 {
            flex: 0 0 calc(25% - 20px);
            /* Adjust width of column */
        }

        .product-item {
            width: 100%;
            /* Ensure items occupy full width */
        }

        /* Pagination style */
        .pagination {
            font-size: 14px;
            /* Adjust font size */
            display: flex;
            justify-content: center;
        }

        .pagination li {
            margin: 0 5px;
            /* Adjust margin */
        }
    </style>
</head>
<body class="antialiased">
    @extends('layouts.layout')
    @section('title', 'Home')
    @section('content')
    @include('layouts.blocks.product-list', ['products' => $products])
    <div class="pagination">
        {{ $products->links() }}
    </div>
    @endsection
</body>
</html>