


 @extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <h3 class="page-title text">Danh sách đơn hàng</h3>
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
                           <th scope="col">Tên khách hàng</th>
                           <th scope="col">Địa chỉ</th>
                           <th scope="col">SĐT </th>
                           <th scope="col">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <<tbody>
                                    @foreach ($items as $key => $item)
                                    <tr>
                                        <th scope="row">{{ ++$key }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>
                                            <!-- Đây là phần chỉnh sửa -->
                                            <td>
                                                <a href="{{ route('orders.order_detail', $item->id) }}" class="btn btn-primary">Chi tiết</a>
                                            </td>
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





 