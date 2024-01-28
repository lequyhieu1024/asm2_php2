@extends('layout.main')
@section('content')
    <h1 class="alert alert-primary">Danh sách người dùng</h1>

<a href="<?=BASE_URL?>add-user"><button class="btn btn-primary">+ USER</button></a>
<table class="table table-hover mt-2">
  <thead class="table-info">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Thao tác</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $item)
    <tr>
      <th scope="row">{{$item['id']}}</th>
      <td>{{$item['email']}}</td>
      <td>{{$item['username']}}</td>
      <td>{{$item['password']}}</td>
      <td class="col-2">
        <a href="<?=BASE_URL?>delete-user/{{$item['id']}}"><button class="btn btn-danger">Xóa</button></a>  
        <a href="<?=BASE_URL?>update-user/{{$item['id']}}"><button class="btn btn-warning">Sửa</button></a>  
      </td>
    </tr>
    @endforeach
  </tbody>
</table>        
@endsection