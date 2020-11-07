@extends('layout.bootstrap')

@section('body')
<style>
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>

<!-- Page Content
================================================== -->
<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Register</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Register</li>
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
					<h3 style="font-size: 26px;">Let's create your account!</h3>
					<span>Already have an account? <a href="{{ url('/login') }}">Log In!</a></span>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="nav">
                            @foreach ($errors->all() as $error)
                                <li class="nav-item">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form -->
            <form method="post" action="{{ route('registration') }}" id="register-account-form">
                @csrf

				<!-- Account Type -->
				<div class="account-type">
					<div>
						<input type="radio" name="role" value="user" id="freelancer-radio" class="account-type-radio" checked/>
						<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> User</label>
					</div>

					<div>
						<input type="radio" name="role" value="entrepreneur" id="employer-radio" class="account-type-radio"/>
						<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Entrepreneur</label>
					</div>
				</div>


					<div class="input-with-icon-left">
						<i class="icon-feather-user"></i>
						<input type="text" class="input-text with-border" name="name" id="name-register" placeholder="Full name" required/>
                    </div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="email" class="input-text with-border" name="email" id="emailaddress-register" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-credit-card"></i>
						<input type="number" class="input-text with-border" name="mobile" id="mobile-register" placeholder="Phone number" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-credit-card"></i>
						<input type="number" class="input-text with-border" name="nid" id="nid-register" placeholder="NID" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-credit-card"></i>
						<input type="text" class="input-text with-border" name="address" id="address-register" placeholder="Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-credit-card"></i>
						<input type="text" class="input-text with-border" name="district" id="district-register" placeholder="District" required/>
					</div>

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password-register" placeholder="Password" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password_confirmation" id="password-repeat-register" placeholder="Repeat Password" required/>
					</div>


				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
            </form>
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
