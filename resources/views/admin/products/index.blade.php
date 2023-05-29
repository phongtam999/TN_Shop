@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')
<style>
    th {
    text-align: center;
}
</style>

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <h2 class="page-title text">Danh sách sản phẩm</h2>
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
                    <form action="{{ route('products.index') }}" method="get">
                        <div class="row mb-2">
                            <div class="col">
                                <a class="btn btn-success" href="{{ route('products.export') }}">Xuất Excel</a>
                                @if (Auth::user()->hasPermission('Product_create'))
                                <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm mới</a>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" placeholder="Nhập ID" class="form-control" value="{{ request()->id }}" name="id">
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nhập tên" class="form-control" value="{{ request()->name }}" name="name">
                            </div>
                                <div class="col">
                                    <select name="category_id" id="" class="form-control">
                                        <option value="">--Vui lòng chọn--</option>
                                        @foreach ($categories as $category)
                                            <option 
                                            @selected($category->id == request()->category_id)
                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            
                            <div class="col">
                                <button type="submit" class="btn btn-info"> Tìm </button>
                                    <a href="{{ route('products.index') }}" type="submit" class="btn btn-secondary">Đặt lại</a>
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
                                    <th scope="col" style="text-align: left;">Tên sản phẩm</th>
                                    <th scope="col" style="text-align: left;">Số lượng</th>
                                    <th scope="col" style="text-align: left;">Danh mục</th>
                                    <th scope="col" style="text-align: left;">Giá tiền</th>
                                    <th scope="col" style="text-align: center;">Ảnh</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $product->name ?? '' }}</td>
                                        <td>{{ $product->amount ?? '' }}</td>
                                        <td>{{ $product->category->name ?? '' }}</td>
                                        <td>{{ number_format($product->price) . 'VNĐ' }}</td>
                                        <td><img width="90px" height="90px" src="{{ asset($product->image) }}" alt=""></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                @if (Auth::user()->hasPermission('Product_update'))
                                                    <a class="btn btn-info" href="{{ route('products.edit', $product->id) }}">Sửa</a>
                                                @endif
                                                <a class="
                                                btn btn-success" href="{{ route('products.show', $product->id) }}">Chi tiết</a>
                                                @if ($product->deleted_at)
                                                    {{-- Kiểm tra xem sản phẩm đã bị xóa chưa --}}
                                                    <form action="{{ route('products.restore', $product->id) }}" method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Khôi phục</button>
                                                    </form>
                                                    <form action="{{ route('products.delete-forever', $product->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa vĩnh viễn?')">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Xóa vĩnh viễn</button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Bạn có muốn xóa?')">
                                                        @method('DELETE')
                                                        @csrf
                                                        @if (Auth::user()->hasPermission('Product_delete'))
                                                        <button type="submit" class="btn btn-danger btn-lg">Xóa</button>
                                                        @endif
                                                    </form>
                                                @endif                      
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer">
                            <nav class="float-right">
                        {{ $products->appends(request()->query()) }}
                            </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
