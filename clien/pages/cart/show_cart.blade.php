@extends('index')
@section('content')

<br><br><br><br><br><br>
<div id="container">
    <?php
    $content = Cart::content();
    ?>
    <div id="giohang" style="height: 100%;">
        <div id="sp" style="margin-left: 100px;">
            <div id="conten">
                <p>Sản phẩm</p>
                <p class="gia">Giá</p>
                <p>Số lượng</p>
                <p>Thành tiền</p>
            </div>
            <hr width="650px" size="5px" align="center" color="gray">
            <br>
            @foreach($content as $v_content)
            <div id="luachon">
                <div style="width: 200px;" style="align-items: left;">
                    <img src="{{asset('public/storage/product/'.$v_content->options->image)}}" style="object-fit: cover; margin-left: 10px;" alt="{{$v_content->name}}">
                    <p>{{$v_content->name}}</p>
                </div>
                <p style="margin: 40px 60px 40px 10px;">{{number_format($v_content->price)}} VNĐ</p>
                <form action="{{URL::to('/update-cart-qty')}}" method="POST">
                    {{csrf_field()}}
                    <input type="number" name="cart_quantity" value="{{($v_content->qty)}}" style="width: 50px; height: 30px; margin-top: 38px; text-align: center;">
                    <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                    <input style="margin-top: -5px;" type="submit" name="update_qty" id="" value="Cập nhật" class="btn btn-default btn-sm">
                </form>
                <!-- <p class="ic2">{{($v_content->qty)}}</p> -->
                <?php
                $thanhTien = $v_content->price * $v_content->qty
                ?>
                <p class="ic3" style="margin-top: 40px; margin-left: 65px;">{{number_format($thanhTien)}} VNĐ</p>
                <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}">
                    <i class="fa fa-times" style="margin-top: 47px; margin-left: -255px;"></i>
                </a>
            </div>
            @endforeach

            <div id="click">
                <div id="quaylai">
                    <a href="../html/trasenvang.html"><i class="fas fa-arrow-left"></i> Tiếp Tục Xem Sản Phẩm</a>
                </div>
                <div id="quaylai">
                    <a href="{{URL::to('/show-cart')}}"><i class="fas fa-arrow-down"></i> Cập Nhật Giỏ Hàng <i class="fas fa-pen-nib"></i></a>
                </div>
            </div>
            <hr class="height" width="2px" size="480px" color="gray">
        </div>
        <div id="tongd">
            <p style="font-size: 1.55rem;" class="od"><i style="margin-right: 8px;" class="fa-solid fa-cart-plus"></i>Giỏ hàng</p>
            <hr class="hrgh" width="650px" size="5px" align="center" color="gray">
            <br>
            <br>
            <div class="tamtinh">
                <h4>Tạm tính</h4>
                <p>{{Cart::priceTotal(0, ',', '.').''.'vnđ'}}</p>
            </div>
            <hr class="hrgh" width="650px" size="3px" align="center" color="gray">
            <br>
            <div class="tamtinh">
                <h4>Chiết khấu</h4>
                <span style="margin: 5px 0 0px 5px;">(-10%)</span>
                <p style="margin-left: 420px;">{{Cart::tax(0, ',', '.').''.'vnđ'}}</p>
            </div>
            <br>
            <div class="tamtinh">
                <h4>Tổng</h4>
                <p class="tt">{{Cart::total(0, ',', '.').''.'vnđ'}}</p>
            </div>
            <hr class="hrgh" width="650px" size="3px" align="center" color="gray">
            <br>
            <br>
            <div class="tamtinh">
                <h4>Phiếu ưu đãi</h4>
                <input type="#" placeholder="Mã giảm giá">
            </div>
            <br>
            <hr class="hrgh" width="650px" size="1px" align="center" color="gray">
            <div class="thanhtoan">
                <a href="{{URL::to('/login-checkout')}}">Tiến Hành Đặt Hàng</a>
            </div>
        </div>
    </div>
</div>
<hr>
@endsection