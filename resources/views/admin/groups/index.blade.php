@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')

<style>
    .btn-cappquyen {
        background-color: #ff6600; /* Replace with your desired color */
        border-color: greenyellow; /* Replace with your desired color */
    }

    .btn-cappquyen:hover {
        background-color: #cc5500; /* Replace with your desired hover color */
        border-color: #cc5500; /* Replace with your desired hover color */
    }

    .btn-delete-group {
        background-color: #dc3545; /* Replace with your desired color */
        border-color: #dc3545; /* Replace with your desired color */
        font-size: 1.2rem; /* Replace with your desired font size */
        font-weight: bold; /* Replace with your desired font weight */
    }

    .btn-delete-group:hover {
        background-color: #c82333; /* Replace with your desired hover color */
        border-color: #c82333; /* Replace with your desired hover color */
    }
</style>


<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <h2 class="page-title text">Danh sách nhóm nhân viên</h2>
    </div>
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('products.search') }}" method="get">
                        <div class="row mb-2">
                            <div class="col">
                                @if (Auth::user()->hasPermission('Group_create'))
                                      <a href="{{ route('groups.create') }}" class="btn btn-info">Tạo nhóm nhân viên</a>
                                 @endif
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" ui-jq="footable" ui-options='{"paging": {"enabled": true},"filtering": {"enabled": true},"sorting": {"enabled": true}}'>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Người đảm nhận</th>
                                    <th data-breakpoints="xl">Tùy Chỉnh</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach ($groups as $key => $group)
                                <tr data-expanded="true" class="item-{{ $group->id }}">
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $group->name }}</td>
                                    <td>Hiện có {{ count($group->users) }} người</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a class="btn btn-primary btn-success btn-cappquyen" href="{{ route('groups.detail', $group->id) }}">Cấp quyền</a>
                                            <a class="btn btn-primary btn-info" href="{{ route('groups.edit', $group->id) }}">Sửa</a>
                                            <button class="btn btn-danger btn-lg delete-group" data-group-id="{{ $group->id }}">Xóa nhóm quyền</button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer">
                            <nav class="float-right">
                                {{ $groups->appends(request()->query()) }}

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.delete-group').click(function(e) {
            e.preventDefault();
            var groupId = $(this).data('group-id');

            // Hiển thị hộp thoại xác nhận
            if (confirm('Bạn có chắc chắn muốn xóa nhóm quyền này?')) {
                // Nếu người dùng nhấn OK, gửi yêu cầu x
                // Nếu người dùng nhấn OK, gửi yêu cầu xóa bằng AJAX
                $.ajax({
                    url: '/groups/' + groupId,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(result) {
                        // Xóa hàng trong bảng
                        $('.item-' + groupId).remove();
                        // Hiển thị thông báo xóa thành công
                        alert('Đã xóa nhóm quyền thành công!');
                    },
                    error: function(xhr, status, error) {
                        // Xử lý lỗi nếu có
                        alert('Đã xảy ra lỗi: ' + error);
                    }
                });
            }
        });
    });
</script>
@endpush
