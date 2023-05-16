@extends('admin.layouts.master')

@section('content')
@include('sweetalert::alert')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <h2 class="page-title">Sửa tên nhóm quyền</h2>
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
                    <form role="form" class="form-horizontal" action="{{ route('groups.update', $group->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="col-lg-2">Tên nhóm quyền</label>
                            <div class="col-lg-8">
                                <input type="text" value="{{ $group->name }}" name="name" class="@error('name') is-invalid @enderror form-control">
                                @error('name')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-6">
                                <button class="btn btn-primary" type="submit">Lưu thay đổi</button>
                                <a href="{{ route('groups.index') }}" class="btn btn-danger">Hủy</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
