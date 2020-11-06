@extends('layout.bootstrap')

@section('body')
   <!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Log In</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Log In</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">


			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="{{ url('/registration') }}">Sign Up!</a></span>
				</div>

				<!-- Form -->
				<form method="post" id="login-form">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
					</div>
					<a href="#" class="forgot-password">Forgot Password?</a>
				</form>

				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>

				<!-- Social Login -->
				<div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via Facebook</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via Google+</button>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection

@section('page-js')
<script>
// $(function() {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     console.log("Jquery running!");
//     readPost(0,2);
// })
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
