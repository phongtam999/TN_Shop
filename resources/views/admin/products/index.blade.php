@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')


    <h1 class="offset-4">Danh sách sản phẩm</h1>
    <main class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form class="navbar-form" action="{{ route('products.search') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="name" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-info">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-warning" href="{{ route('products.export') }}">Xuất Excel</a>
                    {{-- @if (Auth::user()->hasPermission('Product_create')) --}}
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm mới</a>
                    {{-- @endif --}}
                </div>
            </div>
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
                                    {{-- @if (Auth::user()->hasPermission('Product_update')) --}}
                                        <a class="btn btn-secondary" href="{{ route('products.edit', $product->id) }}">Sửa</a>
                                    {{-- @endif --}}
                                    <a class="btn btn-success" href="{{ route('products.show', $product->id) }}">Chi tiết</a>
                                    @if ($product->deleted_at) {{-- Kiểm tra xem sản phẩm đã bị xóa chưa --}}
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
                                            {{-- @if (Auth::user()->hasPermission('Product_delete')) --}}
                                            <button type="submit" class="btn btn-danger btn-lg">Xóa</button>
                                            {{-- @endif --}}
                                        </form>
                                    @endif                      
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->appends(request()->query())->links() }}
        </div>
    </main>
@endsection
