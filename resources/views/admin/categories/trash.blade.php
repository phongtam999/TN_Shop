{{-- @extends('admin.layouts.master')
@section('content')
<table class="table" style="text-align: center;" >
    <h1 style="text-align: center; color: black;">Thùng Rác</h1>
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên Danh Mục</th>
            <th adta-breakpoints="xs">Quản Lý</th>

    </thead>
    <tbody>
        @if($softs->count() > 0)
        @foreach($softs as $key => $soft)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $soft->name }}</td>
            
            <td>
                <a href="{{route('categories.restore',[$soft->id])}}" class="btn btn-warning">Khôi Phục</a>
                <a href="{{route('categories.deleteforever',[$soft->id])}}" onclick="return confirm('Bạn có chắc chắn xóa vĩnh viễn không?');" class="btn btn-secondary">Xóa vĩnh viễn</a>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="7" style="text-align: center; color: red; font-weight: bold; font-size: 20px;">Thùng rác trống !!!</td>
        </tr>
        @endif
    </tbody>
    
</table>
<a href="{{ route('categories.index') }}" class="btn btn-warning">Quay Lại </a> <br>
@endsection --}}



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
                                
                            </div>
                            <a href="{{ route('categories.index') }}" class="btn btn-info">Trở Lại </a> <br>

                            
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên Danh Mục</th>
                                        <th>Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <tr>
                                        @if($softs->count() > 0)
                                        @foreach($softs as $key => $soft)
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $soft->name }}</td>   
                                        <td>
                                            <a href="{{route('categories.restore',[$soft->id])}}" class="btn btn-success">Khôi Phục</a>
                                            <a href="{{route('categories.deleteforever',[$soft->id])}}" onclick="return confirm('Bạn có chắc chắn xóa vĩnh viễn không?');" class="btn btn-danger">Xóa vĩnh viễn</a>
                                        </td>                                 
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="7" style="text-align: center; color: red; font-weight: bold; font-size: 20px;">Thùng rác trống !!!</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- {{$soft->appends(request()->query())}} --}}
                </div>
            </div>
        </div>
    </div>    
@endsection