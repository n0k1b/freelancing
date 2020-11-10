@extends('admin.app')
@section('body')
  <div class="card">
        <div class="card-body">
            <form action="{{url('admin/create-gig-cat')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Category</label>
                    <input value="" name="name" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
  </div>
@endsection
