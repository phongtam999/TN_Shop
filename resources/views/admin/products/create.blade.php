@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')

<div class="row page-titles mx-0">
  <div class="col p-md-0">
      <h2 class="page-title text">Thêm mới sản phẩm</h2>
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
              <form class="forms-sample" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Tên sản phẩm</label>
                  <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Tên">
                  @error('name')
                  <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Thể loại</label>
                  <select name="category_id" id="" class="form-control">
                    <option value="">--Vui lòng chọn--</option>
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                  @error('category_id')
                  <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>


                <div class="form-group">
                  <label>Giá tiền</label>
                  <input type="text" class="form-control" name="price" value="{{old('price')}}" placeholder="Giá tiền">
                  @error('price')
                  <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Số lượng</label>
                  <input type="text" class="form-control" name="amount" value="{{old('amount')}}" placeholder="Số lượng">
                  @error('amount')
                  <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label>Mô tả</label>
                  <textarea class="form-control" name="description"  placeholder="Mô tả" >{{old('description')}}</textarea>
                  @error('description')
                  <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label>Ảnh</label>
                  <input type="file" class="form-control" name="image" placeholder="Ảnh">
                  @error('image')
                  <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <button class="btn btn-primary mr-2" type="submit">Thêm</button>
                  <a href="{{ route('products.index') }}" class="btn btn-light">Hủy</a>
                </div>

              </form>
            </div>
          </div>
      </div>
  </div>
</div>

@endsection
            