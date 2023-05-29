@extends('admin.layouts.master')
@section('content')
<style>
    img#avtshow {
        border: 3px solid rgb(150, 0, 0);
        padding: 10px;
        height: 250px;
        width: 250px;
        border-radius: 50%;
    }
    
    .card-body {
        padding: 20px;
    }
    
    .gallery-grid {
        text-align: center;
    }
    
    .captn {
        margin-top: 10px;
    }
    
    .profile-info {
        margin-top: 20px;
    }
    
    .profile-info h5,
    .profile-info h3 {
        margin: 0;
    }
    
    .profile-info hr {
        margin: 10px 0;
    }
    
    .profile-info p {
        margin: 0;
    }
    
    .text-success,
    .text-danger {
        margin: 10px 0;
    }
</style>
<div class="card">
    <div class="card-body">
        <br>
        <h2 class="text-center">
            Thông Tin Nhân Viên
        </h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="gallery-grid">
                    <br>
                    <a class="example-image-link" href="{{ asset('storage/images/' . $user->image) }}" data-lightbox="example-set"
                        data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                        <img src="{{ asset($user->image) }}" id="avtshow" alt="Avatar">
                    </a>
                    <div class="captn">
                        <h4>Trang cá nhân</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <hr>
                    <h4  style="color: red">{{ $user->name }}</h4><!--  -->
                    <ul class="nav nav-pills nav-stacked labels-info">
                        <li>
                            <h4>Vị Trí: {{ $user->group->name }}</h4>
                        </li>
                        
                    </ul>
                    <hr>
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Trở Lại</a>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="tab-content pt-2">
                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        <p class="text-success"><i class="fa fa-check" aria-hidden="true"></i>
                            {{ Session::get('success') }}
                        </p>
                        <p class="text-danger"><i class="bi bi-x-circle"></i>
                            {{ Session::get('error')}}
                        </p>
                            <div class="profile-info">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p>Họ Và Tên:</p>
                                    </div> <!-- Thêm dấu ">" vào đây -->
                                    <div class="col-sm-9">
                                        <b>{{ $user->name }}</b> <br>
                                    </div>
                                    <div class="col-sm-12">
                                    </div>
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Email:</p>
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $user->email }}</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Số Điện Thoại:</p>
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $user->phone }}</b>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Giới Tính:</p>
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $user->gender }}</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Ngày Sinh:</p>
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $user->birthday }}</b>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Địa chỉ:</p>
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $user->address }}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content pt-2">
                    <div class="tab-pane profile-edit" id="profile-edit">
                        <p class="text-success"><i class="fa fa-check" aria-hidden="true"></i></p>
                        <p class="text-danger"><i class="bi bi-x-circle"></i></p>
                        <div class="row">
                            <div class="col-sm-3">
                                {{-- <h5>Mã số {{ $user->group->name }}</h5> --}}
                            </div>
                            <div class="col-sm-9">
                                <h3>#0068{{ $user->id }}</h3>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
