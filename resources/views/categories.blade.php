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
            @foreach ($categories as $item)
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="{{url('blog/'.$item->id)}}" class="photo-box small" data-background-image="{{asset('assets')}}/images/parenting.jpg">
					<div class="photo-box-content">
						<h3>{{$item->name}}</h3>
						{{-- <span>125 post</span> --}}
					</div>
				</a>
			</div>
            @endforeach

		</div>
	</div>
</div>
<!-- Features Cities / End -->
@endsection
