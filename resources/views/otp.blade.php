@extends('layout.bootstrap')

@section('body')
<!-- Page Content
================================================== -->
<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Otp</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Otp</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container mb-5">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">

			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3 style="font-size: 26px;">Last step to create account!</h3>
                <span id="resend_otp_function" style="display: none">Did'nt get an otp? <a href="{{ url('/resend_otp/'.Request::route('id')) }}">Resend!</a></span>
                </div>

                @if (session('message'))
                <div class="alert alert-info">
                    {{ session('message') }}
                </div>
                @endif

                <!-- Form -->
            <form method="post" action="{{ route('sending-otp') }}" id="register-account-form">
                @csrf
            <input type="hidden" name="user" value="{{ Request::route('id') }}">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="number" class="input-text with-border" name="otp" id="otp" placeholder="Otp" required/>
					</div>
				</form>

				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="register-account-form">Register <i class="icon-material-outline-arrow-right-alt"></i></button>

				<!-- Social Login -->
				{{-- <div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
				</div> --}}
			</div>

		</div>
	</div>
</div>
@endsection

@section('page-js')
<script>
$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    console.log("Jquery running!");
    setTimeout(() => {
        $("#resend_otp_function").show();
    }, 5000);
})
// var scroll = 0;
// var total = 0
// $(window).scroll(function() {
//     if($(window).scrollTop() == $(document).height() - $(window).height()) {
//         total = 2+scroll+total;
//         readPost(total,2);
//     }
// });


// function readPost(total,take) {
//     $.ajax({
//         processData:false,
//         contentType:false,
//         url:'read-blog-post/'+total+"/"+take,
//         type:'get',
//         success: function (response) {
//             $("#posts").append(response)
//         },
//     });
// }

// $("#creatingPost").submit(function (event) {
//     event.preventDefault();
//     data = new FormData();
//     data.append('text',$("#text").val());
//     data.append('upload',$("#upload")[0].files[0]);
//     $.ajax({
//         processData:false,
//         contentType:false,
//         url:$("#creatingPost").attr('action'),
//         type:$("#creatingPost").attr('method'),
//         data:data,
//         success: function (response) {
//             alert('Success fully created your post');
//             $("#text").val('')
//             $("#upload").val('')
//             $(".uploadButton-file-name").text('')
//         },
//     });
// });
</script>
@endsection
