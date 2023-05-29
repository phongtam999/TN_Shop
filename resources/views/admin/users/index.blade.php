@extends('admin.layouts.master')

@section('content')
@include('sweetalert::alert')

<style>

    a#\34 {
        color: white;
    }
    a#\31 {
        color: white;
    }

   .btn-group {
        flex-wrap: nowrap;
        justify-content: center;
    }

    .btn-group .btn {
        margin: 0 5px;
    }

    img#avt {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
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
a#\35 {
    color: white;
}

a#\32 {
    color: white;
}

</style>

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <h2 class="page-title text">Danh sách nhân sự</h2>
    </div>
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Bảng điều khiển</a></li>
            <li class="breadcrumb-item active"><a href="{{route('dashboard')}}">Trang chủ</a></li>
        </ol>
    </div>
</div>
<!-- row -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('users.search') }}" method="get">
                        <div class="row mb-2">
                            <div class="col">
                                @if (Auth::user()->hasPermission('User_create'))
                                <a href="{{ route('users.create') }}" class="btn btn-primary">Đăng ký nhân sự</a>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="id"  value = "{{request()->id}}" placeholder="Nhập ID" class="form-control form-control-sm">
                            </div>
                            <div class="col">
                                <input type="text" name="name" value = "{{request()->name}}" placeholder="Nhập tên" class="form-control form-control-sm">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-xm">Tìm kiếm</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col" style="text-align: left;">Ảnh đại diện</th>
                                    <th scope="col" style="text-align: left;">Họ và tên</th>
                                    <th scope="col" style="text-align: left;">SĐT</th>
                                    <th scope="col" style="text-align: left;">Chức vụ</th>
                                    <th scope="col" style="text-align: center;">Hành động</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach ($users as $key => $user)
                                <tr>
                                    <tr data-expanded="true" class="item-{{ $user->id }}">
                                        <td>{{ ++$key }}</td>
                                        <td><a href=""><img id="avt" src="{{ asset($user->image) }}" alt=""></a></td>
                                        <td>{{ $user->name ?? '' }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>
                                            @if ($user->group)
                                                {{ $user->group->name }}
                                            @else
                                                Chưa có chức vụ
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group d-flex justify-content-center" role="group">
                                                @if (Auth::user()->hasPermission('User_update'))
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Sửa</a>
                                                @endif
                                                @if (Auth::user()->hasPermission('User_delete'))
                                                <a data-href="{{ route('users.destroy', $user->id) }}" id="{{ $user->id }}" class="btn btn-danger delete-button">Xóa</a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <nav class="float-right">
                        {{ $users->appends(request()->query())->links() }}
                    </nav>          
                </div>
            </div>
        </div>
    </div>
</div>

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


