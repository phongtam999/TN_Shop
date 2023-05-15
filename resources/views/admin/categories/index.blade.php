
@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <h3 class="page-title text-uppercase">Quản lý sản phẩm</h3>
        </div>
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <form  class="navbar-form navbar-left" action="{{route('categories.index')}}" method="GET">
                            <div class="row mb-2">
                                <div class="col">
                                    <a href="{{route('categories.create')}}" class="btn btn-primary"> Thêm mới </a>
                                    <button type="{{route('categories.export')}}" class="btn btn-success "> Xuất execl </button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <input type="text" placeholder="Nhập ID" class="form-control form-control-sm">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Nhập tên" class="form-control form-control-sm">
                                </div>
                                <div class="col">
                                    <select class="form-control form-control-sm">
                                        <option value="">Tất cả danh mục</option>
                                        <option value="">Cá</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-info"> Tìm </button>
                                    <button type="button" class="btn btn-secondary "> Đặt lại</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên</th>
                                        <th>Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <tr>
                                        @foreach ($categories as $key => $team)
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $team->name }}</td>  
                                        <td>                          
                                            @if (isset($team))
                                                <form action="{{ route('categories.destroy', $team->id) }}" method="POST">
                                                    {{-- @if (Auth::user() && Auth::user()->hasPermission('Category_update')) --}}
                                                    <a href="{{ route('categories.edit', $team->id) }}" class="btn btn-primary">Sửa</a>
                                                    {{-- @endif --}}
                                                    {{-- @if (Auth::user() && Auth::user()->hasPermission('Category_delete')) --}}
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa')">Xóa</button>
                                                    {{-- @endif --}}
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                             @endif
                                        </td>                                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{$categories->appends(request()->query())}}
                </div>
            </div>
        </div>
    </div>    
@endsection

