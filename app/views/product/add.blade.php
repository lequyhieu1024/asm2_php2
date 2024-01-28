@extends('layout.main')
@section('content')
    <h1 class="alert alert-primary">Thêm sản phẩm</h1>
    <form method="post">
  <div class="form-row">
    <div class="mt-2">
      <input type="text" name="name" class="form-control" placeholder="Name">
    </div>
    <div class="mt-2">
      <input type="text" name="price" class="form-control" placeholder="Price">
    </div>
    <div class="mt-2">
      <input type="text" name="description" class="form-control" placeholder="Description">
    </div>
    <div class="mt-2">
      <label for="">Categories</label>
      <select name="id_category" id="">
        @foreach ($cat as $item)
          <option value="{{$item['id']}}">{{$item['name']}}</option>   
        @endforeach
      </select>
    </div>
    <div class="mt-2">
      <input type="submit" class="btn btn-success" value="ADD">
    </div>
  </div>
</form>
@endsection