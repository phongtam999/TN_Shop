
@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <form  class="navbar-form navbar-left" action="{{route('orders.index')}}" method="GET">
                        <div class="row mb-2">
                            <h3 class="form-header">Danh sách đơn đặt hàng </h3>
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
                                <a href="{{ route('orders.index')}}" type="submit" class="btn btn-secondary">Đặt lại</a>
                            </div>
                        </div>
                    </form><br/>
            
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
                            @foreach ($items as $key => $order_Detail)
                            @php $total += $order_Detail->amount * $order_Detail->price  @endphp
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $order_Detail->name }}</td>
                                    <td>{{ number_format($order_Detail->price) }}</td>
                                    <td>{{ $order_Detail->amount }}</td>
                                    <td>{{ number_format($order_Detail->amount * $order_Detail->total ) }}</td>                                
                            @endforeach
                        </tbody>
                    </table>
                    <h4 class="form-header" >Tổng Tiền Đơn Hàng: {{ number_format($order_Detail->amount * $order_Detail->total ) }} VND</h4><hr>

                    <div style="float:right">
                </div>
            </div>
        </div>
    </div>
  
@endsection