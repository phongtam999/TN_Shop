@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <h2 class="page-title">Chỉnh sửa danh mục</h2>
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
                    <form class="forms-sample" action="{{route('categories.update', [$item->id])}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label >Tên</label>
                            <input type="text" class="form-control" value="{{ old('name', $item->name) }}" name="name">
                            @error('name')
                            <div style="color: red">{{ $message }}</div>
                          @enderror
                        </div>           
                      <div class="form-group">
                        <button class="btn btn-primary mr-2" type="submit">Cập nhật</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-light">Hủy bỏ</a>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection


