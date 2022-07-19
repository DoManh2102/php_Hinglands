@extends('index-admin')
@section('content')

@include('admin.inc.navbar')
<div ng-cloak id="layoutSidenav_content">
    <div class="card mb-4">
        <div class="card-header">
            <h2>
                <i class="fas fa-table me-1"></i>
                DANH SÁCH DANH MỤC SẢN PHẨM
            </h2>
        </div>
        <button class="btn btn-primary" ng-click="showModal('add')">Thêm</button>
        <div class="card-body">
            <table class="table" id="">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục </th>
                        <th>Hình ảnh </th>
                        <th>Mô tả</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody >
                    <tr ng-repeat="dm in danhmucs">
                        <td>
                            @{{$index+1}}
                        </td>
                        <td>
                            @{{dm.cate_name}}
                        </td>
                        <td>
                            <img style="width: 200px;" src="{{asset('public/storage/category')}}/@{{dm.hinhanh}}" alt="">
                        </td>
                        <td style="width: 700px;">
                            @{{dm.cate_desc}}
                        </td>
                        <td>
                            <a href="#" class="btn btn-info" ng-click="showModal('edit',dm.cate_id)">Edit</a>
                            <a href="#" class="btn btn-danger" ng-click="deleteClick(dm.cate_id)">Delete</a>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>

</div>
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@{{modalTitle}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="form" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="">Tên danh mục sản phẩm</label>
                        <input type="text" name="cate_name" ng-model="danhmuc.cate_name" class="form-control auth-form_input">
                    </div>
                    <div class="form-group">
                        <label for="">Hình ảnh</label>
                        <input id="file" type="file" accept="image/*" name="cate_hinhanh" fileread="danhmuc.hinhanh" class="form-control auth-form_input">
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <input type="text" name="cate_desc" ng-model="danhmuc.cate_desc" class="form-control auth-form_input">
                    </div>
                   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" ng-click="saveData(state,cate_id)">@{{button}}</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jsForm')
<script src="public/admin/js/categogy.js">
</script>
@endsection