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
                        <input id="hovaten" name="Họ và tên" placeholder="Họ và tên">
                        <div style="margin-left: 70px;">
                            <p id="error_hoten_obligatory" class="text-danger"></p>
                        </div>
                    </div>
                    <div class="matkhau">
                        <input id="email" name="Email" placeholder="Email">
                        <div style="margin-left: 70px;">
                            <p id="error_email" class="text-danger"></p>
                        </div>
                    </div>
                    <div class="matkhau">
                        <input id="password" name="Mật khẩu" placeholder="Mật khẩu">
                        <div style="margin-left: 70px;">
                            <p id="error_password_minleng_maxleng" class="text-danger"></p>
                        </div>
                    </div>
                    <div class="matkhau">
                        <input id="soDT" name="Số điện thoại" placeholder="Phone">
                        <div style="margin-left: 70px;">
                            <p id="error_phone" class="text-danger"></p>
                        </div>
                    </div>
                    <button id="btn_dangki" type="submit" class="btn btn-light" style="margin-left: 200px; width: 100px; margin-top: 10px;">Đăng kí</button>
                </form>

            </div>
        </div>
    </div>
</div>
<br>
<hr>
@endsection