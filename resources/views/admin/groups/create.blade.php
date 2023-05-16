@extends('admin.layouts.master')

@section('content')
@include('sweetalert::alert')

<div class="row page-titles mx-0">
  <div class="col p-md-0">
    <h2 class="page-title text">Thêm mới nhóm quyền</h2>
  </div>
  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Trang chủ</a></li>
      <li class="breadcrumb-item active">Thêm mới nhóm quyền</li>
    </ol>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Thông tin nhóm quyền</h4>
          <form class="row g-3" action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="col-md-8">
              <div class="form-group">
                <label for="exampleInputName1">Tên nhóm quyền</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <button class="btn btn-primary mr-2" type="submit">Thêm mới</button>
                <a href="{{ route('groups.index') }}" class="btn btn-light" type="submit">Hủy bỏ</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
