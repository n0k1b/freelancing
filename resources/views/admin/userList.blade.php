@extends('admin.app')
@section('user-list','active')
@section('body')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-end">
            <a href="{{url('admin/create-blog-cat')}}" class="btn btn-primary">Create category</a>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert">
                    <div class="alert alert-info">{{session('message')}}</div>
                </div>
            @endif
            <table class="table table-bordered table-responsive">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">District</th>
                    <th scope="col">NID</th>
                    <th scope="col">Role</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                  @foreach ($users as $item)
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->mobile}}</td>
                        <td>{{$item->gender}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->district}}</td>
                        <td>{{$item->nid}}</td>
                        <td>{{$item->role}}</td>
                        <td><a class="btn btn-info" href="{{url('admin/approve-user/'.$item->id)}}">Approve</a></td>
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
