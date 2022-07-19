@extends('index')
@section('content')

<section class="banner">
    <div class="header__enjoy">
        <h1>ENJOY <span>#</span></h1>
        <h1>COFFEE</h1>
        <a>ABOUT US</a>
    </div>
</section>

<section class="introduce section">
    <div class="container">
        <h1 class="title">Highlands Coffee</h1>
        <div class="introduce__content">
            <div class="row">
                <div class="introduce__item col-3">
                    <img src="{{asset('public/fontend/img/latte.svg')}}" alt="">
                    <h3>100% Natural Coffee</h3>
                    <p>That, lungo as coffee viennese extraction beans Acerbic coffee medium arabica.</p>
                </div>
                <div class="introduce__item col-3">
                    <img src="{{asset('public/fontend/img/delivery.svg')}}" alt="">
                    <h3>Fust & Free Shipping</h3>
                    <p>That, lungo as coffee viennese extraction beans Acerbic coffee medium arabica.</p>
                </div>
                <div class="introduce__item col-3">
                    <img src="{{asset('public/fontend/img/save-mone.svg')}}" alt="">
                    <h3>Money Cash Back</h3>
                    <p>That, lungo as coffee viennese extraction beans Acerbic coffee medium arabica.</p>
                </div>
                <div class="introduce__item col-3">
                    <img src="{{asset('public/fontend/img/distanc.svg')}}" alt="">
                    <h3>Non-Contact Delivery</h3>
                    <p>That, lungo as coffee viennese extraction beans Acerbic coffee medium arabica.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCTS -->
<section class="products">
    <div class="container">
        <div class="products__title row d-flex">
            <h3 class="col">Products</h3>
            <div class="products__category col">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="nav-home" aria-selected="true">ALL</button>
                        @foreach($get_category as $cate)
                        <button class="nav-link" id="loai{{$cate->cate_id}}-tab" data-bs-toggle="tab" data-bs-target="#loai{{$cate->cate_id}}" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style="text-transform: capitalize;">{{$cate->cate_name}}
                        </button>
                        @endforeach
                    </div>
                </nav>
            </div>
        </div>

        <div class="products__card tab-content" id="Highland_category">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="products__content">
                    <div class="row">
                        @foreach($get_product as $item)
                        <div class="products__item col-3">
                            <div class="card">
                                <div class="card__img">
                                    <img src="{{asset('public/storage/product/'.$item->image_path)}}" class="card-img-top" alt="{{$item->name}}" style="max-height:250px; object-fit: cover;">
                                    <div class="card__ovelay">
                                        <div class="overlay__item ">
                                            <a href="#">
                                                <i class="fa-solid fa-heart"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#a{{$item->id}}">
                                                <i class="fa-solid fa-expand"></i>
                                            </a>
                                            <a href="{{URL::to('/show-cart')}}">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card__discount">
                                        <span>-17%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="{{URL::to('/chi-tiet-san-pham/'.$item->id)}}" style="text-decoration: none;">
                                        <h5 class="card-title">{{$item->name}}</h5>
                                    </a>

                                    <div class="card__star">
                                        <p>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="card__price">
                                        <p>{{number_format($item->price + 5000)}}</p>
                                        <span>{{number_format($item->price)}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{ $get_product->links() }}
                    </div>
                </div>
            </div>
            <!-- ------ -->
            @foreach($get_category as $cate)
            <div class="tab-pane fade" id="loai{{$cate->cate_id}}" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="products__content">
                    <div class="row">
                        @foreach($cate->products as $product)
                        <div class="products__item col-3">
                            <div class="card">
                                <div class="card__img">
                                    <img src="{{asset('public/storage/product/'.$product->image_path)}}" class="card-img-top" alt="{{$product->name}}" style="max-height:250px; object-fit: cover;">
                                    <div class="card__ovelay">
                                        <div class="overlay__item ">
                                            <a href="#">
                                                <i class="fa-solid fa-heart"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#a{{$item->id}}">
                                                <i class="fa-solid fa-expand"></i>
                                            </a>
                                            <a href="{{URL::to('/show-cart')}}">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card__discount">
                                        <span>-17%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="{{URL::to('/chi-tiet-san-pham/'.$product->id)}}" style="text-decoration: none;">
                                        <h5 class="card-title">{{$product->name}}</h5>
                                    </a>

                                    <div class="card__star">
                                        <p>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="card__price">
                                        <p>{{number_format($product->price + 5000)}}</p>
                                        <span>{{number_format($product->price)}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
            <!-- ------ -->
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials section">
    <div class="container">
        <h1 class="title">Testimonials</h1>
        <div class="testimonials__content owl-carousel owl-theme user-carousel">
            <div class="item">
                <div class="testimonials__avatar">
                    <img src="{{asset('public/fontend/img/manhavata2.jpg')}}" alt="avata khách hàng 1" style="width: 90px; height: 90px; object-fit: cover;">
                </div>
                <div class="testimonials__body">
                    <div class="testimonials__comment">
                        <p>Ristretto cortado, acerbic filter, at coffee frappuccino beans filter. Mug medium rich
                            foam froth siphon cinnamon aromatic lungo bar. Single origin, java, robusta, that, at,
                            foam, java, arabica id single shot mug robusta. In organic, filter, aroma robusta lungo
                            sit instant. Extraction cinnamon, lungo, cortado, robust medium cultivar, caramelization
                            robust percolator coffee medium.</p>
                    </div>
                    <div class="testimonials__name">
                        <h4>Đỗ Mạnh</h4>
                    </div>
                    <div class="testimonials__position">Designer</div>
                    <div class="testimonials__contact">
                        <a href="#"></a><i class="fa-brands fa-facebook"></i>
                        <a href="#"></a><i class="fa-brands fa-instagram"></i></i>
                        <a href="#"></a><i class="fa-brands fa-twitter"></i></i>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonials__avatar">
                    <img src="{{asset('public/fontend/img/tuavata.jpg')}}" alt="avata khách hàng 1" style="width: 90px; height: 90px; object-fit: cover;">
                </div>
                <div class="testimonials__body">
                    <div class="testimonials__comment">
                        <p>Ristretto cortado, acerbic filter, at coffee frappuccino beans filter. Mug medium rich
                            foam froth siphon cinnamon aromatic lungo bar. Single origin, java, robusta, that, at,
                            foam, java, arabica id single shot mug robusta. In organic, filter, aroma robusta lungo
                            sit instant. Extraction cinnamon, lungo, cortado, robust medium cultivar, caramelization
                            robust percolator coffee medium.</p>
                    </div>
                    <div class="testimonials__name">
                        <h4>Quách Tỉnh</h4>
                    </div>
                    <div class="testimonials__position">Barsita</div>
                    <div class="testimonials__contact">
                        <a href="#"></a><i class="fa-brands fa-facebook"></i>
                        <a href="#"></a><i class="fa-brands fa-instagram"></i></i>
                        <a href="#"></a><i class="fa-brands fa-twitter"></i></i>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonials__avatar">
                    <img src="{{asset('public/fontend/img/linhavata.jpg')}}" alt="avata khách hàng 1" style="width: 90px; height: 90px; object-fit: cover;">
                </div>
                <div class="testimonials__body">
                    <div class="testimonials__comment">
                        <p>Ristretto cortado, acerbic filter, at coffee frappuccino beans filter. Mug medium rich
                            foam froth siphon cinnamon aromatic lungo bar. Single origin, java, robusta, that, at,
                            foam, java, arabica id single shot mug robusta. In organic, filter, aroma robusta lungo
                            sit instant. Extraction cinnamon, lungo, cortado, robust medium cultivar, caramelization
                            robust percolator coffee medium.</p>
                    </div>
                    <div class="testimonials__name">
                        <h4>Khắc Linh</h4>
                    </div>
                    <div class="testimonials__position">Director</div>
                    <div class="testimonials__contact">
                        <a href="#"></a><i class="fa-brands fa-facebook"></i>
                        <a href="#"></a><i class="fa-brands fa-instagram"></i></i>
                        <a href="#"></a><i class="fa-brands fa-twitter"></i></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- data-bs-toggle="modal" data-bs-target="#staticBackdrop -->
<!-- Modal -->
@foreach($get_product as $item)
<div class="modal fade" id="a{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="modal__left col-6">
                        <img src="{{asset('public/storage/product/'.$item->image_path)}}" alt="" style="width: 420px; height: 420px; object-fit: cover;">
                    </div>
                    <div class="modal__right col-6">
                        <!-- <div class="modal__logo">
                            <img src="{{asset('public/fontend/img/pixlr-bg-result.png')}}" alt="logo" style="height: 100%;">
                        </div> -->
                        <div class="modal__content">
                            <h3 class="modal__title">{{$item->name}}</h3>
                            <p class="modal__text">{{$item->MoTa}}</p>
                            <div class="modal__star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>

                            <form action="{{URL::to('/save-cart')}}" method="POST">
                                {{csrf_field()}}
                                <input name="productid_hidden" type="hidden" value="{{$item->id}}">
                                <div class="wrapper__price">
                                    <label for="">Số lượng: </label>
                                    <input name="qty" type="number" min="1" value="1" style="width: 30px; margin-bottom: 10px;">
                                    <br>
                                    <p>
                                        <span>Giá: </span>
                                        <span style="text-decoration-line:line-through; font-size: 11px;">{{number_format($item->price + 5000)}}</span>
                                        <span style="font-weight: 700;">{{number_format($item->price)}} VNĐ</span>
                                    </p>
                                </div>
                                <div class="modal__btn d-flex">
                                    <button type="submit">add to cart</button>
                                    <div class="modal__cart">
                                        <a href="{{URL::to('/show-cart')}}"><i class="fa-solid fa-cart-plus"></i></a>
                                    </div>
                                </div>
                            </form>
                            <div class="modal__love">
                                <a href="#" style="text-decoration: none; font-size: 16px; color: #fff;">
                                    <i class="fa-solid fa-heart"></i>
                                    <span style="margin-left: 5px; transition: .5s;">Add to wishlist</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a data-bs-dismiss="modal">
                    <i class="fa-solid fa-circle-xmark"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach

<!--  -->
@endsection