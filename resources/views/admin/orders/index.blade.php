
@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <h3 class="page-title text">Danh sách đơn hàng </h3>
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
                        <form  class="navbar-form navbar-left" action="{{route('orders.index')}}" method="GET">   
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-success" href="{{ route('orders.xuat') }}">Xuất Excel</a>
                                </div>
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
                    </div>                
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                            <th scope="col">STT</th>
                           <th scope="col">Tên khách hàng</th>
                           <th scope="col">Email</th>
                           <th scope="col">Số điện thoại</th>
                           <th scope="col">Địa chỉ</th>
                           <th scope="col">Ngày đặt hàng</th>
                           <th scope="col">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $key => $item)
                                    <tr>
                                        <th scope="row">{{ ++$key }}</th>
                                        <td>{{ $item->customer->name }}</td>
                                        <td>{{ $item->customer->email }}</td>
                                        <td>{{ $item->customer->phone }}</td>
                                        <td>{{ $item->customer->address }}</td>
                                        <td>{{ $item->date_at}}</td>
                                        <td>
                                                <a  class="btn btn-info" href="{{route('orders.order_detail',$item->id)}}">Xem chi tiết</a>
                                        </td> 
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <nav class="float-right">
                            {{-- {{ $item->links() }} --}}
                        </nav>
                    </div>  
                </div>
            </div>
        </div> 
    </div>   
 @endsection  





 

