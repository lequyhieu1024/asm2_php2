@extends('layout.main')
@section('content')
    <h1 class="alert alert-primary">Thêm danh mục</h1>
    <form method="post">
  <div class="form-row">
    <div class="mt-2">
      <input type="text" name="name" class="form-control" placeholder="Categroy name">
    </div>
    <div class="mt-2">
      <input type="submit" class="btn btn-success" value="ADD">
    </div>
  </div>
</form>
@endsection