@extends('admin.layout-admin')
@section('title')
    <h2 class="text-center">Danh sách danh mục</h2>
@endsection
@section('content')
  <a class="btn btn-primary text-white mb-3" href="{{route('category.create')}}">Thêm mới danh mục</a>
  <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Trạng thái</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($listCate as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->status }}</td>
        </tr>
        @endforeach
      </tbody>
  </table>
@endsection