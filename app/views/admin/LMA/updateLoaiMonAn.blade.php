@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Cập nhật Loại Món Ăn</h2>
        <form action="cap-nhat-loai-mon-an" method="POST">
            <!-- Mã Set Buffet (ẩn) -->
            <input type="hidden" name="maLoaiMonAn" value="{{ $LMA['maLoaiMonAn'] }}">

            <!-- Tên Set -->
            <div class="mb-3">
                <label for="tenLoaiMonAn" class="form-label">Tên Món Ăn</label>
                <input type="text" class="form-control" id="tenLoaiMonAn" name="tenLoaiMonAn"
                    value="{{ $LMA['tenLoaiMonAn'] }}" required>
            </div>

            <!-- Nút cập nhật -->
            <div class="d-flex justify-content-between">
                <a href="set-buffet" class="btn btn-secondary">Quay lại</a>
                <input type="submit" value="Cập nhật" name="btn_update" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
