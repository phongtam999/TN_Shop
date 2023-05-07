@extends('admin.layouts.master')
@section('content')
<table class="table" style="text-align: center;" >
    <h1 style="text-align: center; color: black;">Thùng Rác</h1>
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên Thương Hiệu</th>
            <th adta-breakpoints="xs">Quản Lý</th>

    </thead>
    <tbody>
        @foreach($softs as $key => $soft)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $soft->name }}</td>
            
            <td>
                <a href="{{route('categories.restore',[$soft->id])}}" class="btn btn-warning">Khôi Phục</a>
                <a href="{{route('categories.deleteforever',[$soft->id])}}" onclick="return confirm('Bạn có chắc chắn xóa vĩnh viễn không?');" class="btn btn-secondary">Xóa vĩnh viễn</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>
<a href="{{ route('categories.index') }}" class="btn btn-info">Quay Lại </a> <br>
@endsection