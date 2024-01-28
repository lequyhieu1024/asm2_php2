@extends('layout.main')
@section('content')
    <h1 class="alert alert-primary">Danh sách người dùng</h1>

<a href="<?=BASE_URL?>products/add-product"><button class="btn btn-primary">+ PRODUCT</button></a>
<table class="table table-hover mt-2">
  <thead class="table-info">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Thao tác</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $item)
    <tr>
      <th scope="row">{{$item['id']}}</th>
      <td>{{$item['name']}}</td>
      <td>{{$item['price']}}</td>
      <td>{{$item['description']}}</td>
      <td>{{$item['cat_name']}}</td>
      <td class="col-2">
        <a href="<?=BASE_URL?>products/delete-product/{{$item['id']}}"><button class="btn btn-danger">Xóa</button></a>  
        <a href="<?=BASE_URL?>products/update-product/{{$item['id']}}"><button class="btn btn-warning">Sửa</button></a>  
      </td>
    </tr>
    @endforeach
  </tbody>
</table>        
@endsection