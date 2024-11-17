@extends('layouts.admin')

@section('content')
    <!-- Form thêm mới -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Thêm Mới Loại Món Ăn</div>
        <div class="card-body">
            <form method="POST" action="them-moi-loai-mon-an">
                <div class="mb-3">
                    <label for="tenLoaiMonAn" class="form-label">Tên Loại Món Ăn</label>
                    <input type="text" class="form-control" id="tenLoaiMonAn" name="tenLoaiMonAn" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="set-buffet" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" value="Thêm mới" name="btn_add" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
