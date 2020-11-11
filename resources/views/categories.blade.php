@extends('layout.bootstrap')


@section('body')
    <!-- Popular Job Categories -->
<div class="section margin-top-65 margin-bottom-30">
	<div class="container">
		<div class="row">
<!-- Section Headline -->
<div class="col-xl-12">
    <div class="section-headline centered margin-top-0 margin-bottom-45">
        <h3>Popular Blog Category</h3>
    </div>
</div>

            <!-- Section Headline -->
            @if (count($categories)>0)
            @foreach ($categories as $item)
			@if(auth()->check())
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="{{url('blog/'.$item->id)}}" class="photo-box small" data-background-image="{{url('images/'.$item->image)}}">
					<div class="photo-box-content">
						<h3>{{$item->name}}</h3>
						{{-- <span>125 post</span> --}}
					</div>
				</a>
			</div>
			@else
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="javascript:;" onclick="login_alert()" class="photo-box small" data-background-image="{{url('images/'.$item->image)}}">
					<div class="photo-box-content">
						<h3>{{$item->name}}</h3>
						{{-- <span>125 post</span> --}}
					</div>
				</a>
			</div>
			@endif
            @endforeach
            @else
            <div class="col-12">
            <div class="card">
                <div class="card-body text-center">No categoreis available!</div>
            </div>
            </div>
            @endif
		</div>
	</div>
</div>

<!-- Features Cities / End -->
@endsection
@include('layout.page_js')
<script>
	function login_alert()
	{

		swal({
  title: "Your have to login to see blog post",

  icon: "error",


})
	}
</script>
