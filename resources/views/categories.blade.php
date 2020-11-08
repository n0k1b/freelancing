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

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="{{url('blog/1')}}" class="photo-box small" data-background-image="{{asset('assets')}}/images/health.jpg">
					<div class="photo-box-content">
						<h3>Health</h3>
						<span>612 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="main_page_job.php?location=all&category=home made food" class="photo-box small" data-background-image="{{asset('assets')}}/images/jewellary.jpg">
					<div class="photo-box-content">
						<h3>Fashion and Beauty</h3>
						<span>113 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="main_page_job.php?location=all&category=antique jewellary" class="photo-box small" data-background-image="{{asset('assets')}}/images/travel.jpg">
					<div class="photo-box-content">
						<h3>Travel</h3>
						<span>186 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="main_page_job.php?location=all&category=paper craft" class="photo-box small" data-background-image="{{asset('assets')}}/images/paper_craft.jpg">
					<div class="photo-box-content">
						<h3>Craft</h3>
						<span>298 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="main_page_job.php?location=all&category=custom potrait" class="photo-box small" data-background-image="{{asset('assets')}}/images/education.jpg">
					<div class="photo-box-content">
						<h3>Career & Education</h3>
						<span>549 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="main_page_job.php?location=all&category=scrapbook" class="photo-box small" data-background-image="{{asset('assets')}}/images/food.jpeg">
					<div class="photo-box-content">
						<h3>Cooking and Recipes</h3>
						<span>873 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="main_page_job.php?location=all&category=embroider" class="photo-box small" data-background-image="{{asset('assets')}}/images/parenting.jpg">
					<div class="photo-box-content">
						<h3>Parenting and Babycare</h3>
						<span>125 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="main_page_job.php?location=all&category=scented candle" class="photo-box small" data-background-image="{{asset('assets')}}/images/abuse.jpeg">
					<div class="photo-box-content">
						<h3>Abuse</h3>
						<span>445 post</span>
					</div>
				</a>
			</div>

		</div>
	</div>
</div>
<!-- Features Cities / End -->
@endsection
