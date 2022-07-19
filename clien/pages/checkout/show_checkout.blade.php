@extends('index')
@section('content')

<br><br><br><br><br>
<div id="container_giaohang">
    <div class="title-main">
        <h2>Chi Tiết Hóa Đơn</h2>
    </div>
    <div class="hoadon">
        <div class="back">
            <div class="thongtin">
                <form action="{{URL::to('/save-checkout-customer')}}" method="POST">
                    {{csrf_field()}}
                    <div class="hoten">
                        <h3>Họ và tên</h3>
                        <input type="text" name="shipping_name" placeholder="Họ và tên">
                    </div>
                    <div class="hoten">
                        <h3>Số điện thoại</h3>
                        <input type="text" name="shipping_phone" placeholder="Số điện thoại">
                    </div>
                    <div class="hoten">
                        <h3>Email</h3>
                        <input type="text" name="shipping_email" placeholder="Email">
                    </div>
                    <div class="hoten">
                        <h3>Địa chỉ nhận hàng</h3>
                        <input type="text" name="shipping_address" placeholder="Địa chỉ nhận hàng">
                    </div>
                    <input type="submit" value="Đặt hàng" name="send-oder" class="btn btn-danger" style="margin-left: 400px; padding: 8px 30px;">
                </form>
            </div>
        </div>
        <?php
    $content = Cart::content();
    ?>
        <div class="back-right">
            <div class="thongtin">
                <div class="sanpham">
                    <h2>Sản Phẩm</h2>
                    <p>Tổng tiền (VNĐ)</p>
                </div>
                <hr>
                @foreach($content as $v_content)
                <div class="chitietsp">
                    <p>{{$v_content->name}}</p>
                    <p class="sl">{{$v_content->qty}}</p>
                    <h3>{{$v_content->price}}</h3>
                </div>
                <hr>
                <br>
                @endforeach
               
            </div>
        </div>
    </div>
</div>

<hr>
@endsection