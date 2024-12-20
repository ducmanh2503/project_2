@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Đặt Bàn</h2>
        <form action="dat-ban" method="POST">
            <!-- Mã Set Buffet (ẩn) -->
            <input type="hidden" name="maBan" value="{{ $table['maBan'] }}">

            <!-- Tên Set -->
            <div class="mb-3">
                <label for="tenKhachHang" class="form-label">Tên Khách Hàng</label>
                <input type="text" class="form-control" id="tenKhachHang" name="tenKhachHang" required>
            </div>

            <!-- Giá Set -->
            <div class="mb-3">
                <label for="sdt" class="form-label">Số Điện Thoại</label>
                <input type="text" class="form-control" id="sdt" name="sdt" required>
            </div>

            <div class="mb-3">
                <label for="ngayDatBan" class="form-label">Ngày Đặt</label>
                <input type="date" class="form-control" id="ngayDatBan" name="ngayDatBan" required>
            </div>

            <div class="mb-3">
                <label for="khungGioDatBan" class="form-label">Khung Giờ</label>
                <input type="time" class="form-control" id="khungGioDatBan" name="khungGioDatBan" required>
            </div>

            <div class="mb-3">
                <label for="soLuongKhach" class="form-label">Số Khách</label>
                <select class="form-select" id="soLuongKhach" name="soLuongKhach" required>
                    <option value="" selected disabled>Chọn số lượng</option>
                    <option value="1">1 Chỗ</option>
                    <option value="2">2 Chỗ</option>
                    <option value="3">3 Chỗ</option>
                    <option value="4">4 Chỗ</option>
                    <option value="5">5 Chỗ</option>
                    <option value="6">6 Chỗ</option>
                    <option value="7">7 Chỗ</option>
                    <option value="8">8 Chỗ</option>
                </select>
            </div>

            <!-- Nút cập nhật -->
            <div class="d-flex justify-content-between">
                <a href="set-buffet" class="btn btn-secondary">Quay lại</a>
                <input type="submit" value="Đặt Bàn" name="btn_order" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
