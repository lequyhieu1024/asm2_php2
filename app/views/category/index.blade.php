@extends('layout.main')
@section('content')
    <h1 class="alert alert-primary">Danh sách danh mục</h1>

<a href="<?= BASE_URL ?>categories/add-category"><button class="btn btn-primary">+ CATEGORY</button></a>
<table class="table table-hover mt-2">
  <thead class="table-info">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Thao tác</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $item)
    <tr>
      <th scope="row">{{$item['id']}}</th>
      <td>{{$item['name']}}</td>
      <td class="col-2">
        <a href="<?= BASE_URL ?>categories/delete-category/{{$item['id']}}"><button class="btn btn-danger">Xóa</button></a>  
        <a href="<?= BASE_URL ?>categories/update-category/{{$item['id']}}"><button class="btn btn-warning">Sửa</button></a>  
      </td>
    </tr>
    @endforeach
  </tbody>
</table>        
@endsection