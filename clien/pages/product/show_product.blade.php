@extends('index')
@section('content')

<!-- Wrapper -->
<br><br><br><br><br><br>

<section class="wrapper">
    <div class="container">
        <h2 class="wrapper__title">{{$product->name}}</h2>
        <div class="row">
            <div class="wrapper__img col-4">
                <img src="{{asset('public/storage/product')}}/{{$product->image_path}}" alt="" style="width: 90%;">
            </div>
            <div class="wrapper__text col-8">
                <p>{{$product->MoTa}}</p>
                <div class="wrapper__size">
                    <span>Size:</span>
                    <span>
                        <a class="active" href="#">S</a>
                        <a href="#">M</a>
                        <a href="#">L</a>
                    </span>
                </div>
                <div class="wrapper__star">
                    <span>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>
                </div>
                <form action="{{URL::to('/save-cart')}}" method="POST">
                    {{csrf_field()}}
                    <input name="productid_hidden" type="hidden" value="{{$product->id}}">
                    <div class="wrapper__price">
                        <label for="">Số lượng: </label>
                        <input name="qty" type="number" min="1" value="1" style="width: 30px; margin-bottom: 10px;">
                        <br>
                        <p>Giá: <span>{{number_format($product->price)}} VNĐ</span></p>
                    </div>
                    <button type="submit">Đặt mua ngay</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="body">
    <div class="body__content container">
        <div class="body__item">
            <div class="body__category owl-carousel owl-theme product-carousel">
                @foreach($same_product as $item)
                <div class="item">
                    <div class="category__img">
                        <img src="{{asset('public/storage/product')}}/{{$item->image_path}}" alt="" style="width: 90%;">
                        <div class="card__ovelay">
                            <!-- <div class="overlay__item ">
                                <a href="#">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" c>
                                    <i class="fa-solid fa-expand"></i>
                                </a>
                                <a href="save-cart">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </a>
                            </div> -->
                        </div>
                    </div>
                    <div class="category__title">
                        <a href="{{URL::to('/chi-tiet-san-pham/'.$item->id)}}" style="text-decoration: none;">
                            <h3>{{$item->name}}</h3>
                        </a>
                        <p class="category__price">Giá: {{$item->price}} VNĐ</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
<hr>
@endsection