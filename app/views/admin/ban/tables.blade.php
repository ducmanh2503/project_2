@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-primary mb-4">Quản Trị Bàn</h1>

    <!-- Bảng quản lý -->
    {{-- <a href="them-moi-ban" class="btn btn-primary">Thêm mới</a> --}}
    <a href="admin" class="btn btn-secondary">Quản trị</a>
    <div class="card">
        <div class="card-header bg-dark text-white">Danh Sách Bàn</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Mã Bàn</th>
                        <th>Số Bàn</th>
                        <th>Set Buffet Đang Dùng</th>
                        <th>Trạng Thái</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tables as $item)
                        <tr>
                            <td>{{ $item['maBan'] }}</td>
                            <td>{{ $item['soBan'] }}</td>
                            <td>
                                @if (!$item['tenSetBuffet'] == '')
                                    {{ $item['tenSetBuffet'] }}
                                @else
                                    {{ 'Chưa gọi set' }}
                                @endif
                            </td>
                            <td>
                                @if (!$item['trangThai'] == 0)
                                    {{ 'Đã có khách đặt bàn này' }}
                                @else
                                    {{ 'Bàn trống' }}
                                @endif
                            </td>
                            <td>
                                {{-- <a href="xoa-mon-an&id={{ $item['maMonAn'] }}" class="btn btn-danger"
                                    onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</a> --}}
                                @if (!$item['trangThai'] == 0)
                                    {{ '' }}
                                @else
                                    <a href="dat-ban&id={{ $item['maBan'] }}" class="btn btn-warning">Đặt Bàn</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
