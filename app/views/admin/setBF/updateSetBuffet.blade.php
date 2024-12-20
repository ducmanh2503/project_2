@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Cập nhật Set Buffet</h2>
        <form action="cap-nhat-set-buffet" method="POST">
            <!-- Mã Set Buffet (ẩn) -->
            <input type="hidden" name="maSetBuffet" value="{{ $setBF['maSetBuffet'] }}">

            <!-- Tên Set -->
            <div class="mb-3">
                <label for="tenSetBuffet" class="form-label">Tên Set</label>
                <input type="text" class="form-control" id="tenSetBuffet" name="tenSetBuffet"
                    value="{{ $setBF['tenSetBuffet'] }}" required>
            </div>

            <!-- Giá Set -->
            <div class="mb-3">
                <label for="giaSetBuffet" class="form-label">Giá Set</label>
                <input type="number" class="form-control" id="giaSetBuffet" name="giaSetBuffet"
                    value="{{ $setBF['giaSetBuffet'] }}" required>
            </div>

            <!-- Mô Tả -->
            <div class="mb-3">
                <label for="moTaSetBuffet" class="form-label">Mô Tả</label>
                <textarea class="form-control" id="moTaSetBuffet" name="moTaSetBuffet" rows="4">{{ $setBF['moTaSetBuffet'] }}</textarea>
            </div>

            <!-- Nút cập nhật -->
            <div class="d-flex justify-content-between">
                <a href="set-buffet" class="btn btn-secondary">Quay lại</a>
                <input type="submit" value="Cập nhật" name="btn_update" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
