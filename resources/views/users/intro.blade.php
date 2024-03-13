<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    @extends('layouts.layout')
    @section('title',"Introduction")
    @section('content')
    
    <div class="container">
        <section>
            <h2 class="section-heading">Giới Thiệu Về Chúng Tôi</h2>
            <p class="section-content">Chúng tôi là một trang web bán lẻ trực tuyến chuyên cung cấp các sản phẩm công nghệ hàng đầu từ các thương hiệu uy tín trên thị trường. Với sứ mệnh làm cho công nghệ trở nên dễ dàng tiếp cận hơn và mang lại giá trị thực sự cho khách hàng, chúng tôi không ngừng nỗ lực cung cấp những sản phẩm chất lượng, dịch vụ chăm sóc khách hàng tận tâm và trải nghiệm mua sắm trực tuyến an toàn và tiện lợi.</p>
        </section>

        <section>
            <h2 class="section-heading">Sản Phẩm Của Chúng Tôi</h2>
            <p class="section-content">Chúng tôi cung cấp một loạt các sản phẩm đa dạng, từ điện thoại thông minh, máy tính bảng, laptop đến MacBook của các thương hiệu hàng đầu như Apple, Samsung, Xiaomi, Asus và nhiều hãng khác. Bạn sẽ dễ dàng tìm thấy sản phẩm phù hợp với nhu cầu của mình tại cửa hàng của chúng tôi.</p>
            <img src="products.jpg" alt="Sản Phẩm" class="section-image">
        </section>

        <section>
            <h2 class="section-heading">Dịch Vụ và Hỗ Trợ</h2>
            <p class="section-content">Chúng tôi cam kết mang đến cho bạn những trải nghiệm mua sắm tuyệt vời và tiện lợi nhất. Đội ngũ nhân viên chăm sóc khách hàng của chúng tôi luôn sẵn lòng hỗ trợ bạn trong mọi thắc mắc và nhu cầu. Bạn có thể liên hệ với chúng tôi bất kỳ lúc nào qua email, điện thoại hoặc chat trực tuyến.</p>
        </section>
    </div>
    @endsection

</body>

</html>