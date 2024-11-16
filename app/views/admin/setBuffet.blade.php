@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-primary mb-4">Quản Trị Thực Đơn Buffet Lẩu</h1>

    <!-- Bảng quản lý -->
    <a href="them-moi-set-buffet" class="btn btn-primary">Thêm mới</a>
    <div class="card">
        <div class="card-header bg-dark text-white">Danh Sách Set Buffet</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Mã Set</th>
                        <th>Tên Set</th>
                        <th>Giá (VND)</th>
                        <th>Mô Tả</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($SP as $item)
                        <tr>
                            <td>{{ $item['maSetBuffet'] }}</td>
                            <td>{{ $item['tenSetBuffet'] }}</td>
                            <td> {{ number_format($item['giaSetBuffet']) }} đ</td>
                            <td>{{ $item['moTaSetBuffet'] }}</td>
                            <td>
                                <a href="xoa-set-buffet&id={{ $item['maSetBuffet'] }}" class="btn btn-danger"
                                    onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</a>
                                <a href="cap-nhat-set-buffet&id={{ $item['maSetBuffet'] }}" class="btn btn-warning">Sửa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
