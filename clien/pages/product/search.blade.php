@extends('index')
@section('content')
<!-- PRODUCTS -->
<br><br><br><br><br>
<section class="products">
    <div class="container">
    <div class="products__title row d-flex">
            <!-- <h3 class="col">Sản phẩm tìm kiếm</h3> -->
            <h2 class="col">Sản phẩm tìm kiếm</h2>
            <div class="products__category col">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="nav-home" aria-selected="true">ALL</button>
                        @foreach($get_category as $key => $cate)
                        <button class="nav-link" id="coffee-tab" data-bs-toggle="tab" data-bs-target="#coffee" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style="text-transform: capitalize;">{{$cate->cate_name}}</button>
                        @endforeach
                    </div>
                </nav>

            </div>
        </div>
        <div class="products__card tab-content" id="Highland_category">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="products__content">
                    <div class="row">
                        @foreach($search_product as $item)
                        <div class="products__item col-3">
                            <div class="card">
                                <div class="card__img">
                                    <img src="{{asset('public/storage/product/'.$item->image_path)}}" class="card-img-top" alt="cafe" style="height:250px; width: 265px;  object-fit: cover;" >
                                    <div class="card__ovelay">
                                        <div class="overlay__item ">
                                            <a href="#">
                                                <i class="fa-solid fa-heart"></i>
                                            </a>
                                            <a href="{{URL::to('/chi-tiet-san-pham/'.$item->id)}}" data-bs-toggle="modal" data-bs-target="#staticBackdrop" c>
                                                <i class="fa-solid fa-expand"></i>
                                            </a>
                                            <a href="#">
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
                    </div>
                </div>
            </div>
            <!-- ------ -->
            <div class="tab-pane fade" id="coffee" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="products__content">       
                    <div class="row">
                        <div class="products__item col-3">
                            <div class="card">
                                <div class="card__img">
                                    <img src="{{asset('public/fontend/img/cardHland1.png')}}" class="card-img-top" alt="cafe">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Late</h5>
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
                                        <p>$15.00 </p>
                                        <span>$14.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ------ -->
            <div class="tab-pane fade" id="freeze" role="tabpanel" aria-labelledby="nav-contact-tab">freeze</div>
            <div class="tab-pane fade" id="tra" role="tabpanel" aria-labelledby="nav-contact-tab">trà</div>
            <div class="tab-pane fade" id="khac" role="tabpanel" aria-labelledby="nav-contact-tab">khác</div>
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
                    <img src="{{asset('public/fontend/img/avata3.jpg')}}" alt="avata khách hàng 1" style="width: 100%;">
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
                        <h4>Daniel Miller</h4>
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
                    <img src="{{asset('public/fontend/img/avata1.jpg')}}" alt="avata khách hàng 1" style="width: 100%;">
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
                        <h4>Linda Build</h4>
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
                    <img src="{{asset('public/fontend/img/avata2.jpg')}}" alt="avata khách hàng 1" style="width: 100%;">
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
                        <h4>Jeb Build</h4>
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



@endsection