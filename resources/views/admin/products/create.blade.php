@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')

{{-- <main class="page-content">
    <h2 class="offset-5">Thêm mới sản phẩm</h2>
<div class="container">

<div class="col-12 col-lg-12 d-flex">
    <div class="card border shadow-none w-100">
      <div class="card-body">
        <form class="row g-3" action="{{route('products.store')}}" method = 'post' enctype="multipart/form-data">
            @csrf
          <div class="col-12">
            <label class="form-label">Tên</label>
            <input type="text" class="form-control" name="name" placeholder="Tên">
            @error('name')
            <div class="text text-danger">{{ $message }}</div>

        @enderror
          </div >
          <div class="col-12">
          <label class="form-label">Thể loại</label>
          <select name="category_id" id="" class="form-control">
            <option value="">--Vui lòng chọn--</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
        <div class="text text-danger">{{ $message }}</div>

         @enderror
        </div >
          <div class="col-12">
            <label class="form-label">Giá tiền</label>
            <input type="text" class="form-control" name="price" placeholder="Giá tiền" >
            @error('price')
            <div class="text text-danger">{{ $message }}</div>

        @enderror
          </div >
          <div class="col-12">
            <label class="form-label">Số lượng</label>
            <input type="text" class="form-control" name="amount" placeholder="số lượng" >
            @error('amount')
            <div class="text text-danger">{{ $message }}</div>
            
          @enderror
          </div >
          <div class="col-12">
            <label class="form-label">Mô tả</label>
            <input type="text" class="form-control" name="description" placeholder="Mô tả" >
            @error('description')
            <div class="text text-danger">{{ $message }}</div>
            
        @enderror
          </div>
          <div class="col-12">
            <label class="form-label">Ảnh</label>
            <input type="file" class="form-control" name="image" placeholder="Ảnh" >
            @error('image')
            <div class="text text-danger">{{ $message }}</div>
            
        @enderror
          </div >
         <div class="col-12">
           <div class="d-grid"> <br>
             <button class="btn btn-primary" type="submit">Thêm</button>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Quay lại</a>
           </div>
         </div>
        </form>

      </div>
    </div>
  </div>
</div>
</main> --}}

<div class="row page-titles mx-0">
  <div class="col p-md-0">
      <h3 class="page-title text-uppercase">Thêm mới sản phẩm</h3>
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
              <div class="card-footer">
                  <form class="forms-sample">
                      <div class="form-group">
                          <label for="exampleInputName1">Name</label>
                          <input type="text" class="form-control" id="exampleInputName1"
                              placeholder="Name">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail3">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail3"
                              placeholder="Email">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword4">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword4"
                              placeholder="Password">
                      </div>
                      <div class="form-group">
                          <label for="exampleSelectGender">Gender</label>
                          <select class="form-control" id="exampleSelectGender">
                              <option>Male</option>
                              <option>Female</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>File upload</label>
                          <input type="file" name="img[]" class="form-control">
                          
                      </div>
                      <div class="form-group">
                          <label for="exampleInputCity1">City</label>
                          <input type="text" class="form-control" id="exampleInputCity1"
                              placeholder="Location">
                      </div>
                      <div class="form-group">
                          <label for="exampleTextarea1">Textarea</label>
                          <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
