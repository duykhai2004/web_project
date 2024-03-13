<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

    <header>
        <nav style="background:rgba(102,51,255,0.2);" class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <div class="logo-container">
                        <div class="letter d-letter">D</div>
                        <div class="letter k-letter">K</div>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('intro')}}">Intro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Categories</a>
                            <ul class="dropdown-menu">
                                <?php foreach ($categories as $category) { ?>
                                    <li><a class="dropdown-item" href="{{ route('products.category', $category->id) }}">{{ $category->name }}</a></li>
                                <?php  } ?>
                            </ul>
                        </li>
                    </ul>
                    <form style="margin-right: 30px;" class="d-flex" action="{{ route('home')}}" method="get">
                        <input class="form-control me-2" type="text" name="query" placeholder="Search">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>

                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer style="background:rgba(102,51,255,0.2); color: rgb(111, 19, 3); font-family: courier, arial, helvetica;" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Thông tin công ty</h3>
                    <p>Công ty ABC là một công ty chuyên cung cấp các sản phẩm công nghệ hàng đầu trên thị trường. Chúng tôi cam kết mang lại cho khách hàng những sản phẩm chất lượng và dịch vụ tốt nhất. Với nhiều năm kinh nghiệm trong ngành, chúng tôi tự hào là đối tác đáng tin cậy của nhiều khách hàng.</p>

                </div>
                <div class="col-md-4">
                    <h3>Chính sách bảo mật</h3>
                    <p>Chúng tôi cam kết bảo vệ thông tin cá nhân của khách hàng và sử dụng thông tin đó một cách cẩn thận. Chính sách bảo mật của chúng tôi đảm bảo rằng mọi thông tin cá nhân của bạn sẽ được bảo vệ một cách an toàn và không bị sử dụng một cách lạm dụng.</p>

                </div>

                <div class="col-md-4">
                    <h3>Liên hệ</h3>
                    <p>Địa chỉ: 123 Đường ABC, Quận XYZ, Thành phố HCM</p>
                    <p>Email: info@company.com</p>
                    <p>Điện thoại: +84 123 456 789</p>
                    <p>Hãy liên hệ với chúng tôi ngay hôm nay để được tư vấn và hỗ trợ tốt nhất!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Kết nối với chúng tôi:</p>
                    <a href="#" class="social-icons"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icons"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icons"><i class="fab fa-skype"></i></a>
                    <a href="#" class="social-icons"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/javassript.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>