@extends('layouts.admin')

@section('content')
    <!-- Main Content -->
    <div class="row">
        <div class="col-2">
            <!-- Sidebar -->
            <nav id="sidebar" class="bg-dark text-white p-3">
                <h4 class="mb-4">Admin Panel</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="admin">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="set-buffet">Set Buffet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="mon-an">Món ăn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="danh-sach-ban">Đặt bàn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="cai-dat">Cài đặt</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-12 mb-4 g-0 d-flex justify-content-center ">
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
        </div>
    @endsection
