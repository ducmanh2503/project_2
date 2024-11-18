@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-primary mb-4">Quản Trị Thực Đơn Món Ăn</h1>

    <!-- Bảng quản lý -->
    <a href="them-moi-mon-an" class="btn btn-primary">Thêm mới</a>
    <a href="admin" class="btn btn-secondary">Quản trị</a>
    <div >
        <div class=" bg-dark text-white">Danh Sách Món Ăn</div>
        <div >
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Mã Món Ăn</th>
                        <th>Tên Món Ăn</th>
                        <th>Giá (VND)</th>
                        <th>Mô Tả</th>
                        <th>Loại Món Ăn</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($monAn as $item)
                        <tr>
                            <td>{{ $item['maMonAn'] }}</td>
                            <td>{{ $item['tenMonAn'] }}</td>
                            <td> {{ number_format($item['giaMonAn']) }} đ</td>
                            <td>{{ $item['moTaMonAn'] }}</td>
                            <td>{{ $item['tenLoaiMonAn'] }}</td>
                            <td>
                                {{-- <a href="xoa-mon-an&id={{ $item['maMonAn'] }}" class="btn btn-danger"
                                    onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</a> --}}
                                <a href="cap-nhat-mon-an&id={{ $item['maMonAn'] }}" class="btn btn-warning">Sửa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
