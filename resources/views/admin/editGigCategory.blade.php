@extends('admin.app')
@section('body')
  <div class="card">
        <div class="card-body">
            <form action="{{url('admin/update-gig-cat')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$categoriy->id}}">
                <div class="form-group">
                    <label for="name">Category</label>
                    <input value="{{$categoriy->name}}" name="name" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
  </div>
@endsection
