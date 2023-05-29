@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <h2 class="page-title">Chỉnh sửa thông tin</h2>
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
                    <form action="{{ route('users.update', $users->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <legend>Thông tin cơ bản</legend>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="tf1">Email<abbr name="Trường bắt buộc">*</abbr></label>
                                            <input name="email" type="text" class="form-control" value="{{ $users->email }}">
                                            @error('email')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="tf1">Họ Và Tên<abbr name="Trường bắt buộc">*</abbr></label>
                                            <input name="name" type="text" class="form-control" value="{{ $users->name }}">
                                            @error('name')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="tf1">Số Điện Thoại<abbr name="Trường bắt buộc">*</abbr></label>
                                            <input name="phone" type="number" class="form-control" value="{{ $users->phone }}">
                                            @error('phone')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="tf1">Ngày sinh<abbr name="Trường bắt buộc">*</abbr></label>
                                            <input name="birthday" type="date" class="form-control" value="{{ $users->birthday }}">
                                            @error('birthday')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="tf1">Chức Vụ<abbr name="Trường bắt buộc">*</abbr></label>
                                            <select name="group_id" class="form-control">
                                                <option value="">-- Vui lòng chọn --</option>
                                                @foreach ($groups as $group)
                                                <option value="{{ $group->id }}" {{
                                                $group->id == $users->group_id ? 'selected' : '' }}>
                                                    {{ $group->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('group_id')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="tf1">Giới Tính<abbr name="Trường bắt buộc">*</abbr></label>
                                            <select name="gender" class="form-control">
                                                <option value="Nam" {{ $users->gender == 'Nam' ? 'selected' : '' }}>Nam</option>
                                                <option value="Nữ" {{ $users->gender == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                                                <option value="Khác" {{ $users->gender == 'Khác' ? 'selected' : '' }}>Khác</option>
                                            </select>
                                            @error('gender')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label" for="inputFile">Hình ảnh</label>
                                            <input type="file" class="form-control-file" id="inputFile" name="image">
                                            @error('image')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <br>
                                            <img src="{{ asset($users->image) ?? asset('public/assets/images/' . old('image', $users->image)) }}" width="90px" height="90px" id="blah1" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="tf1">Địa chỉ<abbr name="Trường bắt buộc">*</abbr></label>
                                            <input name="address" type="text" class="form-control" value="{{ $users->address }}">
                                            @error('address')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <br>
                                        </div>
                                        <div class="form-group">
                                       <button type="submit" class="btn btn-primary mr-2" >Cập nhật</button>
                                        <a href="{{ route('users.index') }}" class="btn btn-light">Hủy bỏ</a>
                                        </div>
                                    </form>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection