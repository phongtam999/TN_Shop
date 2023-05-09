@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')
<main class="page-content">
    <section class="wrapper">
        <div class="panel-panel-default">
            <div class="market-updates">
                <div class="container">
                    <div class="page-inner">
                        <header class="page-title-bar">
                            {{-- <nav aria-label="breadcrumb">
                                <a href="{{ route('users.index') }}" class="w3-button w3-red">Quay Lại</a>
                            </nav> --}}
                            <h1 class="offset-4 text-danger">Thay đổi thông tin</h1>

                        </header>
                        <div class="page-section">
                            <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <legend>Thông tin cơ bản</legend>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="tf1">Email<abbr name="Trường bắt buộc">*</abbr></label>
                                                    <input name="email" type="text" class="form-control" value="{{ $user->email }}">
                                                    @error('email')
                                                        <div class="text text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="tf1">Họ Và Tên<abbr name="Trường bắt buộc">*</abbr></label>
                                                    <input name="name" type="text" class="form-control" value="{{ $user->name }}">
                                                    @error('name')
                                                        <div class="text text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="tf1">Số Điện Thoại<abbr name="Trường bắt buộc">*</abbr></label>
                                                    <input name="phone" type="number" class="form-control" value="{{ $user->phone }}">
                                                    @error('phone')
                                                        <div class="text text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="tf1">Ngày sinh<abbr name="Trường bắt buộc">*</abbr></label>
                                                    <input name="birthday" type="date" class="form-control" value="{{ $user->birthday }}">
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
                                                            <option value="{{ $group->id }}" {{ $group->id == $user->group_id ? 'selected' : '' }}>
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
                                                            <option value="Nam" {{ $user->gender == 'Nam' ? 'selected' : '' }}>Nam</option>
                                                            <option value="Nữ" {{ $user->gender == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                                                            <option value="Khác" {{ $user->gender == 'Khác' ? 'selected' : '' }}>Khác</option>
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
                                                        <img src="{{ asset($user->image) ?? asset('public/assets/images/' . old('image', $user->image)) }}" width="90px" height="90px" id="blah1" alt="">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="tf1">Địa chỉ<abbr name="Trường bắt buộc">*</abbr></label>
                                                        <input name="address" type="text" class="form-control" value="{{ $user->address }}">
                                                        @error('address')
                                                            <div class="text text-danger">{{ $message }}</div>
                                                        @enderror
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success">Lưu thay đổi</button>
                                            <a href="{{ route('users.index') }}" class="btn btn-danger">Hủy bỏ</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
    