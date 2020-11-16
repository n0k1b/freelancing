@extends('admin.app')
@section('post-report','active')
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
                    <th scope="col">Reported user</th>
                    <th scope="col">Report</th>
                    <th scope="col">Post owner</th>
                    <th scope="col">Post</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                  @foreach ($reports as $report)
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$report->user->name}}</td>
                        <td>{{$report->report}}</td>
                        <td>{{$report->post->user->name}}</td>
                        <td>{{$report->post->post}}</td>
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
