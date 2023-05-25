
@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <form  class="navbar-form navbar-left" action="{{route('orders.index')}}" method="GET">
                        <div class="row mb-2">
                            <h3 class="form-header">Danh sách </h3>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="text" placeholder="Nhập ID" class="form-control" value="{{ request()->id }}" name="id">
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nhập tên" class="form-control" value="{{ request()->name }}" name="name">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-info"> Tìm </button>
                                <a href="{{ route('orders.index') }}" type="submit" class="btn btn-secondary">Đặt lại</a>
                            </div>
                        </div>
                    </form><br/>
            
    <a   class="btn btn-info" href="{{route('orders.index')}}">Quay lại</a>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>
                    <h2 class="offset-4">
                        Chi Tiết Đơn Hàng
                    </h2><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Tên Sản Phẩm</th>
                                <th scope="col">GIá(Đồng)</th>
                                <th scope="col">Số Lượng</th>
                                <th scope="col">Tổng Tiền(Đồng)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0 @endphp

@endsection