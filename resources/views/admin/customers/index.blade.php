
@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <h3 class="page-title text-uppercase">Danh sách khách hàng</h3>
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
                                        <form action="" method="get">                   
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" placeholder="Nhập ID" class="form-control" value="{{ request()->id }}" name="id">
                                                </div>
                                                <div class="col">
                                                    <input type="text" placeholder="Nhập tên" class="form-control" value="{{ request()->name }}" name="name">
                                                </div>
                                                <div class="col">
                                                    <button type="submit" class="btn btn-info"> Tìm </button>
                                                    <a href="{{ route('customers.index') }}" type="submit" class="btn btn-secondary">Đặt lại</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên khách hàng</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Giới tính</th>
                                        <th scope="col">SĐT</th>
                                        <th scope="col">Địa chỉ</th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <tr>
                                        @foreach ($customers as $key => $team)
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $team->name }}</td>  
                                        <td>{{ $team->email }}</td>
                                        <td>{{ $team->gender}}</td>
                                        <td>{{ $team->phone }}</td>
                                        <td>{{ $team->address }}</td>                                                                             
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>  
                    <div class="card-footer">
                        <nav class="float-right">
                            {{ $customers->links() }}
                        </nav>
                    </div>              
                </div>
            </div>
        </div>
    </div>    
@endsection

