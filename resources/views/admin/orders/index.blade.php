


 @extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <h3 class="page-title text-uppercase">Danh sách đơn hàng</h3>
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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                            <th scope="col">STT</th>
                           <th scope="col">Tên Khách Hàng</th>
                           <th scope="col">Địa Chỉ</th>
                           <th scope="col">SĐT </th>
                           <th scope="col">Tùy Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <tr>
                                        @foreach ($items as $key=> $item)
                                        <th scope="row">{{++$key}}</th>
                                        <td>{{$item->orders->name}}</td>
                                        <td>{{$item->orders->address}}</td>
                                        <td>{{$item->orders->phone}}</td>
                                        <td>                          
                                        <td>
                                             <a href="{{ route('orders.order_detail', $item->id) }}" class="btn btn-primary">Chi tiết</a>
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





 