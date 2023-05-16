@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <h2 class="page-title text">Đăng ký tài khoản nhân sự</h2>
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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <legend>Thông tin cơ bản</legend>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tf1">Email<abbr name="Trường bắt buộc">*</abbr></label>
                                    <input name="email" type="text" class="form-control" value="{{ old('email') }}">
                                    <small id="" class="form-text text-muted"></small>
                                    @error('email')
                                    <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tf1">Mật Khẩu<abbr name="Trường bắt buộc">*</abbr></label>
                                    <input name="password" type="password" class="form-control" value="{{ old('password') }}">
                                    <small id="" class="form-text text-muted"></small>
                                    @error('password')
                                    <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                    <br>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="tf1">Họ Và Tên<abbr name="Trường bắt buộc">*</abbr></label>
                                    <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                                    <small id="" class="form-text text-muted"></small>
                                    @error('name')
                                    <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="tf1">Số Điện Thoại<abbr name="Trường bắt buộc">*</abbr></label>
                                    <input name="phone" type="number" class="form-control" value="{{ old('phone') }}">
                                    <small id="" class="form-text text-muted"></small>
                                    @error('phone')
                                    <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="tf1">Ngày sinh<abbr name="Trường bắt buộc">*</
                                        abbr></label> 
                                        <input name="birthday" type="date" class="form-control" value="{{ old('birthday') }}">
                                        <small id="" class="form-text text-muted"></small>
                                        @error('birthday')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="control-label" for="flatpickr01">Chức Vụ<abbr name="Trường bắt buộc">*</abbr></label>
                                    <select name="group_id" id="" class="form-control">
                                        <option value="">--Vui lòng chọn--</option>
                                        @foreach ($groups as $group)
                                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('group_id')
                                    <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="control-label" for="flatpickr01">Giới Tính<abbr name="Trường bắt buộc">*</abbr></label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="">--Vui lòng chọn--</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                    @error('gender')
                                    <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">image</label>
                                    <div class="col-lg-4">
                                        <input accept="image/*" type='file' id="inputFile" name="image" /><br>
                                        <img type="hidden" width="90px" height="90px" id="blah" src="#" alt="" />
                                        <br>
                                    </div>
                                    @error('image')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                {{-- địa chỉ --}}
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="tf1">Địa chỉ<abbr name="Trường bắt buộc">*</abbr></label>
                                        <input name="address" type="text" class="form-control" value="{{ old('address') }}">
                                        <small id="" class="form-text text-muted"></small>
                                        @error('address')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <br><br><br><br>
                                    <button class="btn btn-primary mr-2" type="submit">Đăng ký</button>
                                    <a class="btn btn-light" href="{{ route('users.index') }}">Hủy bỏ</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    