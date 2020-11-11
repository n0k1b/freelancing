@extends('admin.app')
@section('body')
  <div class="card">
        <div class="card-body">
            <form action="{{url('admin/create-blog-cat')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Category</label>
                    <input value="" name="name" type="text" class="form-control">
                </div>
                <label for="image">Image</label>
                <input id="image" name="image" type="file">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
  </div>
@endsection
