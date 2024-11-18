@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-primary mb-4">Quản Trị Thực Đơn Buffet Lẩu</h1>

    <!-- Các nút hành động -->
    <div class="mb-3">
        <a href="them-moi-set-buffet" class="btn btn-primary">Thêm mới</a>
        <a href="admin" class="btn btn-secondary">Quản trị</a>
        <button id="deleteSelected" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa mục đã chọn</button>
        <button id="editSelected" class="btn btn-warning">Sửa mục đã chọn</button>
    </div>

    <!-- Bảng quản lý -->
    <div>
        <div class="bg-dark text-white">Danh Sách Set Buffet</div>
        <div>
            <form id="bulkActionForm" method="POST" action="bulk-action-set-buffet">
                @csrf
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>
                                <input type="checkbox" id="selectAll"> <!-- Checkbox chọn tất cả -->
                            </th>
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
                                <td>
                                    <input type="checkbox" name="selectedIds[]" value="{{ $item['maSetBuffet'] }}" class="itemCheckbox">
                                </td>
                                <td>{{ $item['maSetBuffet'] }}</td>
                                <td>{{ $item['tenSetBuffet'] }}</td>
                                <td>{{ number_format($item['giaSetBuffet']) }} đ</td>
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
                <input type="hidden" name="actionType" id="actionType" value="">
            </form>
        </div>
    </div>

    <script>
        // Chọn tất cả checkbox
        document.getElementById('selectAll').addEventListener('change', function () {
            const checkboxes = document.querySelectorAll('.itemCheckbox');
            checkboxes.forEach(cb => cb.checked = this.checked);
        });

        // Xử lý nút xóa
        document.getElementById('deleteSelected').addEventListener('click', function () {
            const form = document.getElementById('bulkActionForm');
            document.getElementById('actionType').value = 'delete'; // Gán hành động là xóa
            form.submit();
        });

        // Xử lý nút sửa
        document.getElementById('editSelected').addEventListener('click', function () {
            const form = document.getElementById('bulkActionForm');
            document.getElementById('actionType').value = 'edit'; // Gán hành động là sửa
            form.submit();
        });
    </script>
@endsection
