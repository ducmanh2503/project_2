@extends('layouts.admin')

@section('content')
<!-- Main Content -->

<div class="row">

    <div class="col-12 mb-4 mt-3 g-0 d-flex justify-content-center ">
        <h2 class="text-primary">Chào mừng đến với Trang Admin</h2>
    </div>
    <!-- Dashboard Cards -->
    <div class="row g-0 d-flex justify-content-center">
        <div class="col-md-4 mb-4 ms-4">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Người dùng</h5>
                    <p class="card-text">Số lượng người dùng hiện tại.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 ms-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Sản phẩm</h5>
                    <p class="card-text">Số lượng sản phẩm trong cửa hàng.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 ms-4">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Đơn hàng</h5>
                    <p class="card-text">Số đơn hàng đang chờ xử lý.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 ms-4">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <h5 class="card-title">Cảnh báo</h5>
                    <p class="card-text">Thông tin cần chú ý.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection