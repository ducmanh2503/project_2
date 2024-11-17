@extends('layouts.admin')

@section('content')
    <!-- Form thêm mới -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Thêm Mới Set Buffet</div>
        <div class="card-body">
            <form method="POST" action="them-moi-set-buffet">
                <div class="mb-3">
                    <label for="tenSetBuffet" class="form-label">Tên Set Buffet</label>
                    <input type="text" class="form-control" id="tenSetBuffet" name="tenSetBuffet" required>
                </div>
                <div class="mb-3">
                    <label for="giaSetBuffet" class="form-label">Giá Set (VND)</label>
                    <input type="number" class="form-control" id="giaSetBuffet" name="giaSetBuffet" required>
                </div>
                <div class="mb-3">
                    <label for="moTaSetBuffet" class="form-label">Mô Tả</label>
                    <textarea class="form-control" id="moTaSetBuffet" name="moTaSetBuffet" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="set-buffet" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" value="Thêm mới" name="btn_add" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
