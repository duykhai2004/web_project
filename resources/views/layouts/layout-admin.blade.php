<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom styles here */
    </style>
</head>

<body>
    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <!-- Sidebar -->
                <div class="list-group">
                    <a href="" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="" class="list-group-item list-group-item-action">Users</a>
                    <a href="{{ route('admin.products') }}" class="list-group-item list-group-item-action">Products</a>
                    <a href="" class="list-group-item list-group-item-action">Categories</a>
                    <a href="" class="list-group-item list-group-item-action">Settings</a>
                </div>
            </div>
            <div class="col-md-9">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>