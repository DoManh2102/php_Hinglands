@extends('index')
@section('content')

<br><br><br><br>
<!-- BODY -->
<section class="body">
    <div class="body__content container">
        <div class="body__wrapper">
            <h2>{{$category->cate_name}}</h2>
            <div class="body__banner row">
                <div class="banner__content col-8">
                    <!-- <img src="./img/categoryImg.jpg" alt="" style="width: 100%;"> -->
                    <img src="{{asset('public/storage/category')}}/{{$category->hinhanh}}" alt="" style="width: 100%;">
                    <p class="mt-3">{{$category->cate_desc}}</p>
                    <button>Xem Sản Phẩm</button>
                </div>
                <div class="banner__sanpham col-4 d-flex">
                    <!-- <img src="./img/suada.png" alt="" style="width: 40%; height: 30%;"> -->
                    <img src="{{asset('public/fontend/img/suada.png')}}" alt="" style="width: 40%; height: 30%;">
                    <div class="mt-3">
                        <h4>Phin Sữa Đá</h4>
                        <p>Hương vị cà phê Việt Nam đích thực! Từng hạt cà phê hảo hạng được chọn bằng tay, phối</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="body__item">
            <div class="body__title">     
                <h3 style="color: #fff; margin-bottom: 10px;">{{$category->cate_name}} - Sản phẩm HOT</h3>
                <p>{{$category->cate_desc}}</p>
            </div>
            <div class="body__category owl-carousel owl-theme product-carousel">
                @foreach($category->products as $item)
                <div class="item">
                    <div class="category__img">
                        <img src="{{asset('public/storage/product')}}/{{$item->image_path}}" alt="" style="width: 100%;">
                    </div>
                    <div class="category__title">
                        <h3>{{$item->name}}</h3>
                        <p class="category__price">Giá: {{number_format($item->price)}} vnđ</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </div>
    </div>
    <hr>
</section>
@endsection