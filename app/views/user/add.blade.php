@extends('layout.main')
@section('content')
    <h1 class="alert alert-primary">Thêm người dùng</h1>
    <form method="post">
  <div class="form-row">
    <div class="mt-2">
      <input type="text" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="mt-2">
      <input type="text" name="username" class="form-control" placeholder="Username">
    </div>
    <div class="mt-2">
      <input type="text" name="password" class="form-control" placeholder="Password">
    </div>
    <div class="mt-2">
      <input type="submit" class="btn btn-success" value="ADD">
    </div>
  </div>
</form>
@endsection