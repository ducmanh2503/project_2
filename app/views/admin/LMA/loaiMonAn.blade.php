@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-primary mb-4">Quản Trị Thực Đơn Loại Món Ăn</h1>

    <!-- Bảng quản lý -->
    <a href="them-moi-loai-mon-an" class="btn btn-primary">Thêm mới</a>
    <a href="admin" class="btn btn-secondary">Quản trị</a>
    <div class="">
        <div class=" bg-dark text-white">Danh Sách Loại Món Ăn</div>
        <div>
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Mã Loại Món Ăn</th>
                        <th>Tên Món Ăn</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($LMA as $item)
                        <tr>
                            <td>{{ $item['maLoaiMonAn'] }}</td>
                            <td>{{ $item['tenLoaiMonAn'] }}</td>
                            <td>
                                {{-- <a href="xoa-mon-an&id={{ $item['maMonAn'] }}" class="btn btn-danger"
                                    onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</a> --}}
                                <a href="cap-nhat-loai-mon-an&id={{ $item['maLoaiMonAn'] }}" class="btn btn-warning">Sửa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
