@extends('admin.app')
@section('body')
  <div class="card">
        <div class="card-body">
            <form action="{{url('admin/update-blog-cat')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$categoriy->id}}">
                <div class="form-group">
                    <label for="name">Category</label>
                    <input value="{{$categoriy->name}}" name="name" type="text" class="form-control">
                </div>
                <label for="image">Image</label>
                <input id="image" name="image" type="file">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
  </div>
@endsection
