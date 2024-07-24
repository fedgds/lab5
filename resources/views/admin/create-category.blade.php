@extends('admin.layout-admin')
@section('title')
    <h2 class="text-center">Thêm mới danh mục</h2>
@endsection
@section('content')
    <a class="btn btn-primary text-white mb-3" href="{{route('product.index')}}">Danh sách</a>
    <form action="{{route('categories.store')}}" method="post" >
        @csrf
        <div class="form-group">
        <label>Tên</label>
        <input type="text" class="form-control" name="name" placeholder="Tên danh mục" value="{{old('name')}}">
        </div>
        <div class="form-group">
        <label>Trạng thái</label>
        <select name="status" class="form-control">
            <option value="1">Hiển thị</option> 
            <option value="0">Ẩn</option>
        </select>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-success">Thêm</button>
            <button type="reset" class="btn btn-danger">Hủy</button>
        </div>

  </form>
@endsection