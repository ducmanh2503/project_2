@extends('layouts.admin')

@section('content')
    <!-- Form thêm mới -->
    <div class="mb-4">
        <div class=" bg-primary text-white">Thêm Mới Món Ăn</div>
        <div>
            <form method="POST" action="them-moi-mon-an">
                <div class="mb-3">
                    <label for="tenMonAn" class="form-label">Tên Món Ăn</label>
                    <input type="text" class="form-control" id="tenMonAn" name="tenMonAn" required>
                </div>
                <div class="mb-3">
                    <label for="giaMonAn" class="form-label">Giá Set (VND)</label>
                    <input type="number" class="form-control" id="giaMonAn" name="giaMonAn" required>
                </div>
                <div class="mb-3">
                    <label for="moTaMonAn" class="form-label">Mô Tả</label>
                    <textarea class="form-control" id="moTaMonAn" name="moTaMonAn" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="maLoaiMonAn" class="form-label">Loại Món Ăn</label>
                    <select class="form-select" id="maLoaiMonAn" name="maLoaiMonAn" required>
                        <option value="" disabled selected>Chọn Loại Món Ăn</option>
                        @foreach ($LMA as $item)
                            <option value="{{ $item['maLoaiMonAn'] }}">{{ $item['tenLoaiMonAn'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="mon-an" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" value="Thêm mới" name="btn_add" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
