@extends('index')
@section('content')

<br><br><br><br><br><br><br>
<div id="main">
    <div class="form">
        <div id="form_container">
            <div id="title">
                <h3>Đăng Nhập</h3>
            </div>
            <div id="nhaptt">
                <form action="{{URL::to('/login-customer')}}" method="POST">
                    {{@csrf_field()}}
                    <div class="taikhoan">
                        <input type="text" name="email_account" placeholder="Eamil">
                    </div>
                    <div class="matkhau">
                        <input type="password" name="password_account" placeholder="Mật khẩu">
                    </div>
                    <br>
                    <div class="check">
                        <input style="margin-top: 8px;" type="checkbox">
                        <h4> Nhớ mật khẩu</h4>
                        <a href="#">Quên mật khẩu?</a>
                    </div>
                    <div class="dangnhap">
                        <br>
                        <button type="submit" class="btn btn-light" style="margin-left: 100px; width: 120px; margin-top: -30px;">Đăng nhập</button>
                    </div>

                </form>
            </div>
        </div>
        <div id="form_container">
            <div id="title">
                <h3>Đăng Kí</h3>
            </div>
            <div id="nhaptt">
                <form action="{{URL::to('/add-customer')}}" method="POST">
                    {{@csrf_field()}}
                    <div class="matkhau">
                        <input type="" name="customer_name" placeholder="Họ và tên">
                    </div>
                    <div class="matkhau">
                        <input type="" name="customer_email" placeholder="Email">
                    </div>
                    <div class="matkhau">
                        <input type="password" name="customer_password" placeholder="Mật khẩu">
                    </div>
                    <div class="matkhau">
                        <input type="" name="customer_phone" placeholder="Phone">
                    </div>
                    <button type="submit" class="btn btn-light" style="margin-left: 200px; width: 100px; margin-top: 10px;">Đăng kí</button>
                </form>

            </div>
        </div>
    </div>
</div>
<br>
<hr>
@endsection