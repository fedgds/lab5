@extends('admin.layout-admin')
@section('title')
    <h2 class="text-center">Thêm mới sản phẩm</h2>
@endsection
@section('content')
    <a class="btn btn-primary text-white mb-3" href="{{route('product.index')}}">Danh sách</a>
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label>Tên</label>
        <input type="text" class="form-control" name="name" placeholder="Họ và tên" value="{{old('name')}}">
        </div>
        <div class="form-group">
        <label>Giá</label>
        <input type="number" class="form-control" name="price" placeholder="Nhập giá" value="{{old('price')}}">
        </div>
        <div class="form-group">
        <label>Số lượng</label>
        <input type="number" class="form-control" name="quantity" placeholder="Nhập só lượng" value="{{old('quantity')}}">
        </div>
        <div class="form-group">
        <label>Ảnh</label>
        <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
        <label>Danh mục</label>
        <select name="category_id" class="form-control">
            <option value="">Chọn danh mục</option>
            @foreach ($listCate as $item)
                <option value="{{$item->id}} @if($item->id == old('category_id')) selected @endif">{{$item->name}}</option>
            @endforeach
        </select>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-success">Thêm</button>
            <button type="reset" class="btn btn-danger">Hủy</button>
        </div>

  </form>
@endsection