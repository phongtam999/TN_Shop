@extends('admin.layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="offset-4">Thông tin người dùng</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset($user->image) }}" id="avtshow" alt="Avatar">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Họ tên:</p>
                            </div>
                            <div class="col-sm-9">
                                <b>{{ $user->name }}</b>
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
                                <p>Số điện thoại:</p>
                            </div>
                            <div class="col-sm-9">
                                <b>{{ $user->phone }}</b>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Giới tính:</p>
                            </div>
                            <div class="col-sm-9">
                                <b>{{ $user->gender }}</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Ngày sinh:</p>
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
        </div>
    </div>
@endsection
