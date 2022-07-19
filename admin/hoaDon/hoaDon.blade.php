@extends('index-admin')
@section('content')
@include('admin.inc.navbar')
<div ng-cloak id="layoutSidenav_content">
    <div class="card mb-4">
        <div class="card-header">
            <h2>
                <i class="fas fa-table me-1"></i>
                DANH SÁCH HOÁ ĐƠN
            </h2>
        </div>
        <div class="card-body">
            <table class="table" id="">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên </th>
                        <th>SDT</th>
                        <th>Email </th>
                        <th>Địa chỉ </th>
                        <th>Ngày tạo </th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="dm in sanphams">
                        <td>
                            @{{$index+1}}
                        </td>
                        <td>
                            @{{dm.shipping_name}}
                        </td>
                        <td>
                            @{{dm.shipping_phone}}
                        </td>
                        <td>
                            @{{dm.shipping_email}}
                        </td>
                        <td>
                            @{{dm.shipping_address}}
                        </td>
                        <td>
                            @{{dm.created_at | date:'yyyy-MM-dd HH:mm:ss'}}
                        </td>
                        <!-- <td>
                            <img style="width: 80px;" src="{{asset('public/storage/product')}}/@{{dm.image_path}}" alt="">
                        </td> -->
                        <td>
                            <a href="#" class="btn btn-info" ng-click="showModal('edit',dm.id)">Chi tiết</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
<div class="modal fade bd-example-modal-lg" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">@{{ modalTitle }}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                    <table class="table nowrap">
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên sp</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="sp in order_details">
                            <td><img style="max-width: 80px; object-fit:initial;" ng-src="{{asset('public/storage/product')}}/@{{sp.image_path}}" alt=""></td>
                            <td>@{{sp.name}}</td>
                            <td>@{{sp.price | number: fractionSize}} đ</td>
                            <td>@{{sp.sl}}</td>
                             <td>@{{sp.price * sp.sl | number: fractionSize}} đ</td>
                        </tr>
                    </tbody>
                </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('jsForm')
<script src="public/admin/js/hoadon.js">
</script>
@endsection