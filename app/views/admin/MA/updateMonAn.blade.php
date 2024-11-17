@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Cập nhật Món Ăn</h2>
        <form action="cap-nhat-mon-an" method="POST">
            <!-- Mã Set Buffet (ẩn) -->
            <input type="hidden" name="maMonAn" value="{{ $MonAn['maMonAn'] }}">

            <!-- Tên Set -->
            <div class="mb-3">
                <label for="tenMonAn" class="form-label">Tên Món Ăn</label>
                <input type="text" class="form-control" id="tenMonAn" name="tenMonAn" value="{{ $MonAn['tenMonAn'] }}"
                    required>
            </div>

            <!-- Giá Set -->
            <div class="mb-3">
                <label for="giaMonAn" class="form-label">Giá Món Ăn</label>
                <input type="number" class="form-control" id="giaMonAn" name="giaMonAn" value="{{ $MonAn['giaMonAn'] }}"
                    required>
            </div>

            <!-- Mô Tả -->
            <div class="mb-3">
                <label for="moTaMonAn" class="form-label">Mô Tả</label>
                <textarea class="form-control" id="moTaMonAn" name="moTaMonAn" rows="4">{{ $MonAn['moTaMonAn'] }}</textarea>
            </div>
            <div class="mb-3">
                <label for="maLoaiMonAn" class="form-label">Loại Món Ăn</label>
                <select class="form-select" id="maLoaiMonAn" name="maLoaiMonAn" required>
                    <option value="" disabled selected>Chọn Loại Món Ăn</option>
                    @foreach ($LMA as $item)
                        <option value="{{ $item['maLoaiMonAn'] }}" @if ($item['maLoaiMonAn'] == $MonAn['maLoaiMonAn']) selected @endif>
                            {{ $item['tenLoaiMonAn'] }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Nút cập nhật -->
            <div class="d-flex justify-content-between">
                <a href="set-buffet" class="btn btn-secondary">Quay lại</a>
                <input type="submit" value="Cập nhật" name="btn_update" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
