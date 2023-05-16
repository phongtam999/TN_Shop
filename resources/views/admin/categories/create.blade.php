
@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')

<div class="row page-titles mx-0">
  <div class="col p-md-0">
      <h3 class="page-title text-uppercase">Thêm Mới Danh Mục</h3>
  </div>
  <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Trang chủ</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
      </ol>
  </div>
</div>
<!-- row -->
<div class="container-fluid">
  <div class="row">
      <div class="col-lg-12">
              <div class="card-footer">
                  <form class="forms-sample" class="row g-3" action="{{route('categories.store')}}" method = 'POST'>
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Tên Danh Mục</label>
                            <input type="text" class="form-control" name="name"
                                placeholder="...">
                              @error('name')
                                <div style="color: red">{{ $message }}</div>
                              @enderror
                        </div class="form-group">
                      <button class="btn btn-primary mr-2" type="submit">Thêm</button>
                       <a href="{{ route('categories.index')}}" class="btn btn-light">Huỷ Bỏ</a>
                  </form>
              </div>      
      </div>
  </div>
</div>
@endsection