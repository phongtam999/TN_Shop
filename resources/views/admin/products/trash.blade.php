@extends('admin.layouts.master')
@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <h3 class="page-title">Thùng Rác</h3>
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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <form action="" method="get">
                        <div class="row mb-2">
                            <div class="col">
                                <a href="{{ route('products.index') }}" class="btn btn-info">Trở lại</a>
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
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Danh Mục</th>
                                    <th scope="col">Giá tiền</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($softs->count() > 0)
                                    @foreach($softs as $key => $soft)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $soft->name ?? '' }}</td>
                                            <td>{{ $soft->amount ?? '' }}</td>
                                            <td>{{ $soft->category->name ?? '' }}</td>
                                            <td>{{ number_format($soft->price) . ' VNĐ' }}</td>
                                            <td>
                                                <img src="{{ asset($soft->image) }}" alt="" width="90px" height="90px">
                                            </td>
                                            <td>
                                                <a href="{{ route('products.restore', $soft->id) }}" class="btn btn-success">Khôi phục</a>
                                                <a href="{{ route('products.deleteforever', $soft->id) }}" onclick="return confirm('Bạn có chắc chắn xóa vĩnh viễn không?');" class="btn btn-danger">Xóa vĩnh viễn</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" style="text-align: center; color: red; font-weight: bold; font-size: 20px;">Không có sản phẩm nào nằm trong thùng rác !!!</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
