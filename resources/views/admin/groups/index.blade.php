@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')

<main class="page-content">
    <div class="container">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="panel-panel-default">
                    <header class="page-title-bar">

                    </header>
                    <hr>
                    <div class="panel-heading">
                        <h2 class="offset-4">Danh Sách Nhóm Nhân Viên</h2>
                    </div>
                    <nav aria-label="breadcrumb">
                        {{-- @if (Auth::user()->hasPermission('Group_create')) --}}
                        <a href="{{ route('groups.create') }}" class="btn btn-success">Tạo nhóm nhân viên</a>
                        {{-- @endif --}}
                    </nav>
                    <div>
                        <table class="table" ui-jq="footable"
                            ui-options='{
                    "paging": {
                    "enabled": true
                    },
                    "filtering": {
                    "enabled": true
                    },
                    "sorting": {
                    "enabled": true
                    }}'>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Người đảm nhận</th>
                                    <th data-breakpoints="xs">Tùy Chỉnh</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach ($groups as $key => $group)
                                <tr data-expanded="true" class="item-{{ $group->id }}">
                                    <td>{{ $key + 1 }}</td>

                                    <td>{{ $group->name }} </td>
                                    <td>Hiện có {{ count($group->users) }} người</td>
                                    <td>
                                        <form action="{{ route('groups.destroy', $group->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            {{-- @if (Auth::user()->hasPermission('Group_update')) --}}
                                            {{-- <a class="btn btn-primary btn-sm" href="{{ route('groups.detail', $group->id) }}">Cấp Quyền</a> --}}
                                            {{-- @endif --}}
                                            {{-- @if (Auth::user()->hasPermission('Group_update')) --}}
                                            {{-- <a class="btn btn-primary btn-sm" href="{{ route('groups.edit', $group->id) }}">Sửa</a> --}}
                                            {{-- @endif --}}
                                            {{-- @if (Auth::user()->hasPermission('Group_delete')) --}}
                                            {{-- <button class="btn btn-danger delete-group" data-group-id="{{ $group->id }}">Xóa nhóm quyền</button> --}}
                                            {{-- @endif --}}
                                            <a class="btn btn-primary btn-lg btn-info" href="{{ route('groups.detail', $group->id) }}">Cấp quyền</a>
                                            <a class="btn btn-primary btn-lg btn-success" href="{{ route('groups.edit', $group->id) }}">Sửa</a>
                                            <button class="btn btn-danger btn-lg btn-bold delete-group" data-group-id="{{ $group->id }}">Xóa nhóm quyền</button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $groups->appends(request()->query()) }}
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
<script>
$(document).ready(function () {
    $('.delete-group').click(function (e) {
        e.preventDefault();
        var groupId = $(this).data('group-id');

        // Hiển thị hộp thoại xác nhận
        if (confirm('Bạn có chắc chắn muốn xóa nhóm quyền này?')) {
            // Nếu người dùng nhấn OK, gửi yêu cầu xóa bằng AJAX
            $.ajax({
                url: '/groups/' + groupId,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (result) {
                    // Xóa hàng trong bảng
                    $('.item-' + groupId).remove();
                    // Hiển thị thông báo xóa thành công
                    alert('Đã xóa nhóm quyền thành công!');
                },
                error: function (xhr, status, error) {
                    // Xử lý lỗi nếu có
                    alert('Đã xảy ra lỗi: ' + error);
                }
            });
        }
    });
});
</script>
