<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hinglands Coffee</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font gg -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Meddon&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- css owl carousel -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('pubic/fontend/css/owl.theme.default.min.css')}}">

    <!-- Amination -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Bosstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS Variables -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/variables.css')}}">

    <!-- CSS Product -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/product.css')}}">

    <!-- CSS Category -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/category.css')}}">

    <!-- CSS Đăng nhập - Đăng kí -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/dangnhap.css')}}">

    <!-- CSS Giỏ hàng -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/gio_hang.css')}}">



    <!-- CSS Giao hàng -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/giaohang.css')}}">

    <!-- CSS Main -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/index.css')}}">


</head>

<body>
<!-- <h3>test</h3> -->
    <!-- HEADER -->
    <header>
        <div class="header__content">
            <div class="container">
                <div class="row">
                    <div class="header__logoHinglands col-2" style="text-align: center;">
                        <a href="{{URL::to('/trang-chu')}}">
                            <img src="{{asset('public/fontend/img/pixlr-bg-result.png')}}" alt="" style="width: 100%;">
                        </a>
                        <p style="color: #ffffff; font-size: 18px; font-weight: bold; white-space: nowrap;">Highlands
                            Coffee <span style="color: #f1bc7a;"></span></p>
                    </div>
                    <div class="navbarHingland col-10">
                        <div class="header__seach d-flex">
                            <form action="{{URL::to('/tim-kiem')}}" method="POST">
                                {{csrf_field()}}
                                <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm">
                                <!-- <a class="icon_seach" href="#"><i class="fa-solid fa-magnifying-glass"></i>
                                </a> -->
                                <button name="search_items" class="icon_search btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                            <div class="header__User">
                                <a href="{{URL::to('/admin')}}"><i class="fa-solid fa-user"></i></a>

                                <a href="{{URL::to('/show-cart')}}"><i class="fa-solid fa-cart-plus"></i></a>

                            </div>
                        </div>
                        <div class="header__menu" id="navbarNav">
                            <ul class="d-flex">
                                <li>
                                    <a href="#">QUÁN CÀ PHÊ</a>
                                </li>
                                <li>
                                    <a href="#">THỰC ĐƠN</a>
                                    <div class="overlay_Nav">
                                        <div class="container">
                                            <div class="header__thucDon row">
                                                @foreach($get_category as $cate)
                                                <div class="header__item col">
                                                    <a href="{{URL::to('/danh-muc-san-pham/'.$cate->cate_id)}}">{{$cate->cate_name}}</a>
                                                    <ul>
                                                        @foreach($cate->products as $product)
                                                        <li><a href="{{URL::to('/chi-tiet-san-pham/'.$product->id)}}">{{$product->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endforeach
                                                <div class="header__item itemImg col">
                                                    <div>
                                                        <a href="#">Phin Sữa Đá Đậm Đà Chất Phin! 29.000đ</a>
                                                        <img src="./img/z1.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">TIN TỨC</a>
                                    <div class="overlay_Nav">
                                        <div class="container">
                                            <div class="header__thucDon row">
                                                <div class="col-9 d-flex">
                                                    <div class="header__item ">
                                                        <a href="#">Tin Tức & Sự Kiện</a>
                                                    </div>
                                                    <div class="header__item ">
                                                        <a href="#">Tin Khuyến Mãi</a>
                                                    </div>
                                                </div>
                                                <div class="header__item itemImg itemImgTinTuc col-3">
                                                    <div>
                                                        <a href="#">Tự Hào Sinh Ra Từ Đất Việt, 1999!</a>
                                                        <img src="./img/Thumbnail.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">CỘNG ĐỒNG</a>
                                    <div class="overlay_Nav">
                                        <div class="container">
                                            <div class="header__thucDon row">
                                                <div class="col-9 d-flex">
                                                    <div class="header__item ">
                                                        <a href="#">Giá trị văn hoá việt</a>
                                                        <ul>
                                                            <li><a href="#">Đương Đại Tranh Đông Hồ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="header__item ">
                                                        <a href="#">Cộng đồng</a>
                                                        <ul>
                                                            <li><a href="#">Lớp Học Cho Em</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="header__item itemImg itemImgTinTuc col-3">
                                                    <div>
                                                        <a href="#">Tranh Đương Đại Hoá Đông Hồ</a>
                                                        <img src="./img/KV_Highlands_CSR_1.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">VỀ CHÚNG TÔI</a>
                                    <div class="overlay_Nav">
                                        <div class="container">
                                            <div class="header__thucDon row">
                                                <div class="col-9 d-flex">
                                                    <div class="header__item ">
                                                        <a href="#">Khởi Nguồn</a>

                                                    </div>
                                                    <div class="header__item ">
                                                        <a href="#">Dịch Vụ hàng tháng</a>

                                                    </div>
                                                    <div class="header__item ">
                                                        <a href="#">nghề nghiệp</a>

                                                    </div>
                                                </div>
                                                <div class="header__item itemImg itemImgTinTuc col-3">
                                                    <div>
                                                        <a href="#">Thương Hiệu Bắt Nguồn Từ Cà Phê Việt!</a>
                                                        <img src="./img/ABOUT-ORIGIN.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header__banner">
        <div class="header__enjoy">
            <h1>ENJOY <span>#</span></h1>
            <h1>COFFEE</h1>
            <a>ABOUT US</a>
        </div>
    </div>


    @yield('content')

    <!-- FOOTER -->
    <footer class="section">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="footer__page col">
                        <h3>PAGES</h3>
                        <ul class="p-0">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="footer__page col">
                        <h3>Catalog</h3>
                        <ul class="p-0">
                            <li><a href="#">Coffee</a></li>
                            <li><a href="#">Machines</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Dishes</a></li>
                            <li><a href="#">Vending</a></li>
                            <li><a href="#">Tea</a></li>
                        </ul>
                    </div>
                    <div class="footer__page col">
                        <h3>Phone</h3>
                        <ul class="p-0">
                            <li><a href="tel: 0393451581">+84.393451581</a></li>
                            <li><a href="#">+84.982663694</a></li>
                        </ul>
                        <div class="testimonials__contact">
                            <a href="#"></a><i class="fa-brands fa-facebook"></i>
                            <a href="#"></a><i class="fa-brands fa-instagram"></i></i>
                            <a href="#"></a><i class="fa-brands fa-twitter"></i></i>
                        </div>
                    </div>
                    <div class="footer__page col">
                        <h3>Contact</h3>
                        <ul class="p-0">
                            <li><a href="#">Fifth Avenue 42</a></li>
                            <li><a href="#">New York 10018</a></li>
                            <li><a href="mailto: dovanmanh1333@gmail.com">dovanmanh1333@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="footer__page instagram col">
                        <h3>Instagramm</h3>
                        <ul class="p-0 row">
                            <li class="col-4">
                                <a href="#"><img src="{{asset('public/fontend/img/imgfooter1.jpg')}}" alt="" style="width: 100%;"></a>
                            </li>
                            <li class="col-4">
                                <a href="#"><img src="{{asset('public/fontend/img/imgfooter2.jpg')}}" alt="" style="width: 100%;"></a>
                            </li>
                            <li class="col-4">
                                <a href="#"><img src="{{asset('public/fontend/img/imgfooter3.jpg')}}" alt="" style="width: 100%;"></a>
                            </li>
                            <li class="col-4">
                                <a href="#"><img src="{{asset('public/fontend/img/imgfooter4.jpg')}}" alt="" style="width: 100%;"></a>
                            </li>
                            <li class="col-4">
                                <a href="#"><img src="{{asset('public/fontend/img/imgfooter5.jpg')}}" alt="" style="width: 100%;"></a>
                            </li>
                            <li class="col-4">
                                <a href="#"><img src="{{asset('public/fontend/img/imgfooter6.jpg')}}" alt="" style="width: 100%;"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer__bottom">
                <p>© 2022 Mocca Theme. All right reserved.</p>
            </div>
        </div>
    </footer>






    <!-- -----------------Thư viện hỗ trợ ---------------- -->
    <!-- CDN JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Boostrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- owl carousel -->
    <script src="{{asset('public/fontend/js/owl.carousel.min.js')}}"></script>
    <script>
        $('.product-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>

    <script>
        $('.user-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
</body>

</html>
<!-- INTRODUCE -->