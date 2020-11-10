@extends('admin.app')
@section('blog-category','active')
@section('body')
    <div class="card">
        {{-- <div class="card-header d-flex align-items-center justify-content-end">
            <a href="{{url('admin/create-blog-cat')}}" class="btn btn-primary">Create category</a>
        </div> --}}
        <div class="card-body">
            <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                  @foreach ($reports as $item)
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->name}}</td>
                        <td><a class="btn btn-warning" href="{{url('admin/edit-blog-cat/'.$item->id)}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="{{url('admin/delete-blog-cat/'.$item->id)}}">Delete</a></td>
                      </tr>
                      @php
                        $i++;
                    @endphp
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
