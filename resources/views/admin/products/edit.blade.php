@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <h2 class="page-title">Chỉnh sửa sản phẩm</h2>
    </div>
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{route('products.update', [$products->id])}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label >Tên</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $products->name) }}" name="name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Thể loại</label>
                            <select name="category_id" id="" class="form-control @error('category_id') is-invalid @enderror">
                                <option value="">--Vui lòng chọn--</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $products->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Giá tiền</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $products->price) }}" name="price">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Số lượng</label>
                            <input type="text" class="form-control @error('amount') is-invalid @enderror" value="{{ old('amount', $products->amount) }}" name="amount">
                            @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Mô tả</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $products->description) }}" name="description">
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label >Ảnh</label>
                          <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                          @error('image')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary mr-2" type="submit">Cập nhật</button>
                        <a href="{{ route('products.index') }}" class="btn btn-light">Hủy</a>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection