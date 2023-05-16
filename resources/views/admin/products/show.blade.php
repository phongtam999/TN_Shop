<style>
    .product-details {
        margin-top: 24px;
    }

    .product-details img {
        max-height: 300px;
        max-width: 412px;
        display: block;
        margin: 0 auto;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product-details table {
        width: 100%;
    }

    .product-details table td:first-child {
        width: 30%;
        font-weight: bold;
    }
</style>

@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <h2 class="page-title text">Xem chi tiết sản phẩm</h2>
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
                    <form action="{{ route('products.search') }}" method="get">
                        <div class="row mb-2">
                            <div class="col">
                                <a class="btn btn-info" href="{{ route('products.index') }}">Quay lại</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive product-details">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Tên:</td>
                                    <td>{{ $productshow->name }}</td>
                                </tr>
                                <tr>
                                    <td>Trạng thái:</td>
                                    <td>{{ $productshow->status == 0 ? ' Hoạt động' : 'Không hoạt động' }}</td>
                                </tr>
                                <tr>
                                    <td>Nổi bật hay không:</td>
                                    <td>{{ $productshow->status == 0 ? 'Nổi bật' : 'Không nổi bật' }}</td>
                                </tr>
                                <tr>
                                    <td>Thể loại:</td>
                                    <td>{{ $productshow->category->name }}</td>
                                </tr>
                                <tr>
                                    <td>Số lượng:</td>
                                    <td>{{ $productshow->amount}} Chiếc</td>
                                </tr>
                                <tr>
                                    <td>Giá tiền:</td>
                                    <td>{{ number_format($productshow->price)}} VND</td>
                                </tr>
                                <tr>
                                    <td>Mô tả:</td>
                                    <td>{{ $productshow->description
                                    }}</td>
                                </tr>
                                <tr>
                                <td>Ngày thêm:</td>
                                <td>{{ $productshow->created_at}}</td>
                                </tr>
                                <tr>
                                <td>Ngày sửa:</td>
                                <td>{{ $productshow->updated_at}}</td>
                                </tr>
                                <tr>
                                <td>Ảnh:</td>
                                <td>
                                    <div style="margin-top: 24px; text-align: center;">
                                        <img src="{{ asset($productshow->image) }}" id="main_product_image" style="float: left;">
                                    </div>
                                    
            </td>
            </tr>
            </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
</div>

</div>
@endsection