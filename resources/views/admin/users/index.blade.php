@extends('admin.layouts.master')

@section('content')
@include('sweetalert::alert')

<style>
    img#avt {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
    }
    .text-center {
        text-align: center;
    }
    .text-danger {
    color: black;
    left: 50%;
    right: 50%;
    position: relative;
}
    .search-input {
        width: 250px;
    }
    span.white-text , .btn.btn-success {
    color: white;
}
</style>

<main class="page-content">
    <section class="wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="panel-panel-default">
                            <header class="page-title-bar">
                        <h1 class="text-danger">Danh sách Nhân Sự</h1>
                        <a href="{{ route('users.create') }}" class="btn btn-info float-left">Đăng kí nhân viên</a>
                    </div><br><br>
                    <form class="text-center mb-4" action="{{ route('users.search') }}" method="GET">
                        <div class="input-group justify-content-center">
                            <input type="text" name="search" class="form-control search-input text-left" placeholder="Tìm kiếm...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-info">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>

            <div class="table-agile-info">
                <div class="panel-panel-default">
                    <div>
                        <table class="table" ui-jq="footable" ui-options='{"paging": {"enabled": true},"filtering": {"enabled": true},"sorting": {"enabled": true}}'>
                            <thead>
                                <tr>
                                    <th data-breakpoints="xs">STT</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Họ và tên</th>
                                    <th>SĐT</th>
                                    <th>Chức vụ</th>
                                    <th data-breakpoints="xs">Tùy Chỉnh</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach ($users as $key => $user)
                                <tr data-expanded="true" class="item-{{ $user->id }}">
                                    <td>{{ ++$key }}</td>
                                    <td><a href="">
                                        <img id="avt" src="{{ asset($user->image) }}" alt=""></a></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>
                                        @if ($user->group)
                                            {{ $user->group->name }}
                                        @else
                                            Chưa có chức vụ
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-success">Xem</a>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">
                                            <span class="white-text">Sửa</span>
                                        </a>
                                        <a data-href="{{ route('users.destroy', $user->id) }}" id="{{ $user->id }}" class="btn btn-danger delete-button">
                                            <span class="white-text">Xóa</span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $users->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).on('click', '.delete-button', function(e) {
        let id = $(this).attr('id');
        let href = $(this).data('href');
        let csrf = '{{ csrf_token() }}';
        console.log(id);
        Swal.fire({
            title: 'Bạn có chắc không?',
            text: "Bạn sẽ không thể hoàn nguyên điều này!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có, xóa!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: href,
                    method: 'delete',
                    data: {
                        _token: csrf
                    },
                    success: function(res) {
                        Swal.fire(
                            'Deleted!',
                            'Tệp của bạn đã bị xóa!',
                            'success'
                        )
                        $('.item-' + id).remove();
                    }
                })
                window.location.reload();
            }
        })
    });
</script>
@endsection


