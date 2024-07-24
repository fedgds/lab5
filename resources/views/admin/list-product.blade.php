@extends('admin.layout-admin')
@section('title')
    <h2 class="text-center">Danh sách sản phẩm</h2>
@endsection
@section('content')
  <a class="btn btn-primary text-white mb-3" href="{{route('product.create')}}">Thêm mới sản phẩm</a>
  <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Image</th>
          <th>Category</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($listPro as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->price }}</td>
          <td>{{ $item->quantity }}</td>
          <td>{{ $item->image }}</td>
          <td>{{ $item->loadAllCategory->name }}</td>
        </tr>
        @endforeach
      </tbody>
  </table>
  {{$listPro->links()}}
@endsection