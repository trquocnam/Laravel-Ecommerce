<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-LAPTOP</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{('frontend/images/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
    @include('partials.header')
    <section>
        <div class="container">
            <div class="row">
            <div class="col-sm-10">
					<div class="blog-post-area">
						<h2 class="title text-center">GIỚI THIỆU</h2>
						<div class="single-blog-post">
							@include('partials.sliderabout')
                                <b><h4>Công ty cổ phần thương mại POLYSTORE.VN</h4></b>
                                <p>- Xuất thân từ cửa hàng kinh doanh máy tính được thành lập từ năm 2014, Phong Vũ được biết đến là đơn vị bán lẻ lâu đời và uy tín tại Việt Nam.
                                POLYSTORE chuyên kinh doanh các sản phẩm công nghệ thông tin, thiết bị giải trí game, thiết bị văn phòng và thiết bị hi-tech của nhiều nhãn hàng lớn như Dell, Asus, HP, MSI, Lenovo…</p>
                                <p>- Sau 7 năm phát triển không ngừng,POLYSTORE hướng đến mục tiêu không chỉ là nơi kinh doanh máy tính mà còn là nơi khách hàng có thể tìm thấy mọi tiện ích công nghệ hiện đại và dịch vụ chất lượng cao.</p>
                                <br><b><h4>Sứ mệnh và mục tiêu</h4></b>
                               <center> <img src="{{('frontend/images/sumenh.jpg')}}" alt=""style="width:70%" /></center>
                               <center> <img src="{{('frontend/images/about3.jpg')}}" alt=""style="width:70%" /></center>
                               <b><h4>Giá trị cốt lõi</h4></b>
                               <center> <img src="{{('frontend/images/giatri.jpg')}}" alt=""style="width:70%" /></center>
                               <b><h4>Cơ cấu tổ chức</h4></b>
                               <center> <img src="{{('frontend/images/cocau.jpg')}}" alt=""style="width:70%" /></center>
                               <b><h4>Lĩnh vực kinh doanh</h4></b>
                               <center> <img src="{{('frontend/images/linhvuc.jpg')}}" alt=""style="width:70%" /></center>
                               <p>- POLYSTORE cung cấp đầy đủ các sản phẩm máy tính, thiết bị công nghệ thông tin & hi-end cho người dùng gia đình</p>
                               <p>- Cung cấp giải pháp tích hợp hệ thống công nghệ thông tin cho doanh nghiệp.</p>
                               <p>- Cung cấp giải pháp đặc biệt cho các doanh nghiệp như hội nghị video, màn hình kỹ thuật số, hệ thống quản lý thanh toán,…</p>
                               <p>- Thêm sự lựa chọn, POLYSTORE mở rộng ngành hàng như các thiết bị điện tử tiêu dùng, thiết bị gia dụng và thiết bị thông minh.</p>
                               <p>- Đối tác chiến lược: Asus, Dell, Acer, Hp, Lenovo, AMD, MSI, LG, Intel, Apple, Samsung, Microsoft, GigaByte, Logitech, NVIDIA,
                                    Kingston, KB Vision, Xiaomi, JBL, Bose, Sony, Microlab, Razer,…</p>
                                <br><br>
						</div>
					</div><!--/blog-post-area-->
            </div>
            </div>	
    </section>
   @include('partials.footer')
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>