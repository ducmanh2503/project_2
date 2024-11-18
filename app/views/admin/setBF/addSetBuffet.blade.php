@extends('layouts.admin')

@section('content')
<!-- Form thêm nhiều bản ghi -->
<div class="mb-4">
    <div class="bg-primary text-white">Thêm Nhiều Set Buffet</div>
    <div>
        <form method="POST" action="them-moi-set-buffet">
            <div id="setBuffetsContainer">
                <div class="setBuffetRow">
                    <div class="mb-3">
                        <label for="tenSetBuffet" class="form-label">Tên Set Buffet</label>
                        <input type="text" class="form-control" name="setBuffets[0][tenSetBuffet]" required>
                    </div>
                    <div class="mb-3">
                        <label for="giaSetBuffet" class="form-label">Giá Set (VND)</label>
                        <input type="number" class="form-control" name="setBuffets[0][giaSetBuffet]" required>
                    </div>
                    <div class="mb-3">
                        <label for="moTaSetBuffet" class="form-label">Mô Tả</label>
                        <textarea class="form-control" name="setBuffets[0][moTaSetBuffet]" rows="3"></textarea>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="mb-3">
                <button type="button" class="btn btn-secondary" id="addSetBuffet">Thêm Set Buffet</button>
            </div>
            <div class="d-flex justify-content-between">
                <a href="set-buffet" class="btn btn-secondary">Quay lại</a>
                <input type="submit" value="Thêm mới" name="btn_add" class="btn btn-success">
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('addSetBuffet').addEventListener('click', function() {
        const container = document.getElementById('setBuffetsContainer');
        const index = container.querySelectorAll('.setBuffetRow').length;
        const newRow = `
                <div class="setBuffetRow">
                    <div class="mb-3">
                        <label for="tenSetBuffet" class="form-label">Tên Set Buffet</label>
                        <input type="text" class="form-control" name="setBuffets[${index}][tenSetBuffet]" required>
                    </div>
                    <div class="mb-3">
                        <label for="giaSetBuffet" class="form-label">Giá Set (VND)</label>
                        <input type="number" class="form-control" name="setBuffets[${index}][giaSetBuffet]" required>
                    </div>
                    <div class="mb-3">
                        <label for="moTaSetBuffet" class="form-label">Mô Tả</label>
                        <textarea class="form-control" name="setBuffets[${index}][moTaSetBuffet]" rows="3"></textarea>
                    </div>
                    <hr>
                </div>`;
        container.insertAdjacentHTML('beforeend', newRow);
    });
</script>
@endsection