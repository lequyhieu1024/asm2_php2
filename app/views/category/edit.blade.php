@extends('layout.main')
@section('content')
    <h1 class="alert alert-primary">Cập nhật người dùng</h1>
    <form method="post">
  <div class="form-row">
    <div class="mt-2">
      <input type="text" value="{{$categories['name']}}" name="name" class="form-control" placeholder="name">
    </div>
    <div class="mt-2">
      <input type="submit" class="btn btn-success" value="UPDATE">
    </div>
  </div>
</form>
@endsection