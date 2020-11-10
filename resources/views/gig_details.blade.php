@include('layout.app')

<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="images/handi.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image"><a href="single-company-profile.html"><img src="../Gig Image/{{$gig->image}}" alt=""></a></div>
						<div class="header-details">
							<h3>{{$gig->title}}</h3>
							<h5>{{$gig->name}}</h5>
							<ul>
								
								<li><div class="star-rating" data-rating="{{$overall_rating}}"></div></li>
								
							</ul>
						</div>
					</div>
					<div class="right-side">
						<div class="salary-box">
							<div class="salary-type">Base Price</div>
							<div class="salary-amount">{{$gig->min_price}} tk - {{$gig->max_price}} tk</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">
			
			<!-- Description -->
			<div class="single-page-section">
				<h3 class="margin-bottom-25">Project Description</h3>
				<p>{{$gig->description}}</p>

				
			</div>

			<!-- Atachments -->
			<div class="single-page-section">
				<h3>Attachments</h3>
				<div class="col-md-4 col-sm-6">
											<article class="destination-box style-1">

												<div class="destination-box-image">
													<figure>
														<a data-fancybox="gallery" href="../Gig Image/{{$gig->image}}">
															<img src="../Gig Image/{{$gig->image}}" class="img-responsive listing-box-img" alt="" />
															<div class="list-overlay"></div>
														</a>


													</figure>
												</div>

												


											</article>
										</div>

			</div>

			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-thumb-up"></i> Ratings and Review</h3>
				</div>
				<ul class="boxed-list-ul">
				@foreach($reviews as $review)
					<li>
						<div class="boxed-list-item">
							<!-- Content -->
							<div class="item-content">
								<h4>{{$review->name}}</h4>
								<div class="item-details margin-top-10">
									<div class="star-rating" data-rating="{{$review->rating}}"></div>
									<div class="detail-item"><i class="icon-material-outline-date-range"></i> {{$review->created_at}}</div>
								</div>
								<div class="item-description">
									<p>{{$review->review}}</p>
								</div>
							</div>
						</div>
					</li>
			    @endforeach
				
					
				</ul>

				<!-- Pagination -->
				<div class="clearfix"></div>
				
			
				<!-- Pagination / End -->

			</div>

			<!-- Skills -->
			
			<div class="clearfix"></div>
			
			<!-- Freelancers Bidding -->
			

		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">

				<div class="countdown green margin-bottom-35">Min {{$gig->minimum_duration}} days need</div>

				<div class="sidebar-widget">
					<div class="bidding-widget">
						<div class="bidding-headline"><h3>Confirm this gig!</h3></div>
						<div class="bidding-inner">

							<!-- Headline -->
							<span class="bidding-detail">Set your <strong>minimal rate</strong></span>

							<!-- Price Slider -->
							<div class="bidding-value">BDT<span id="biddingVal"></span></div>
							<input class="bidding-slider" id ="rate" type="text" value="" data-slider-handle="custom" data-slider-currency="$" data-slider-min='{{$gig->min_price}}' data-slider-max='{{$gig->max_price}}' data-slider-value="auto" data-slider-step="50" data-slider-tooltip="hide" />
							
							<!-- Headline -->
							<span class="bidding-detail margin-top-30">Set your <strong>wanted delivery time</strong></span>

							<!-- Fields -->
							<div class="bidding-fields">
								<div class="bidding-field">
									<!-- Quantity Buttons -->
									<div class="qtyButtons">
										<div class="qtyDec"></div>
										<input id="duration" type="text" name="qtyInput" value="1">
										<div class="qtyInc"></div>
									</div>
								</div>
								<div class="bidding-field">
									<select class="selectpicker default">
										<option selected>Days</option>
										
									</select>
								</div>
							</div>

							<!-- Button -->
							<br>
							<br>
							
							
							@if($gig->previously_bid == 0)
                              
							<a href="#small-dialog" class="apply-now-button popup-with-zoom-anim margin-bottom-50">Confirm <i class="icon-material-outline-arrow-right-alt"></i></a>
							

                            @elseif($gig->previously_bid == 1)
							<button type="button" disabled  class="btn btn-danger"> You already apply for this gig</button>

							@else
							<button type="button" disabled  class="btn btn-danger"> You need to login for hiring an Entrepreneur</button>
                         @endif
						</div>
						
					</div>
				</div>

				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<h3>Bookmark</h3>

					<!-- Bookmark Button -->
					<button class="bookmark-button margin-bottom-25">
						<span class="bookmark-icon"></span>
						<span class="bookmark-text">Bookmark</span>
						<span class="bookmarked-text">Bookmarked</span>
					</button>

					<!-- Copy URL -->
					<div class="copy-url">
						<input id="copy-url" type="text" value="" class="with-border">
						<button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" title="Copy to Clipboard" data-tippy-placement="top"><i class="icon-material-outline-file-copy"></i></button>
					</div>

					<!-- Share Buttons -->
					<div class="share-buttons margin-top-25">
						<div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
						<div class="share-buttons-content">
							<span>Interesting? <strong>Share It!</strong></span>
							<ul class="share-buttons-icons">
								<li><a href="#" data-button-color="#3b5998" title="Share on Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
								<li><a href="#" data-button-color="#1da1f2" title="Share on Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
								<li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus" data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
								<li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<div id="footer">
	
	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">
						
						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="images/logo2.png" alt="">
								</div>
							</div>
						</div>
						
						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
							
							<!-- Language Switcher -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
										<option selected>English</option>
										<option>Français</option>
										<option>Español</option>
										<option>Deutsch</option>
									</select>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Candidates</h3>
						<ul>
							<li><a href="#"><span>Browse gigs</span></a></li>
							<li><a href="#"><span>Add Resume</span></a></li>
							<li><a href="#"><span>gig Alerts</span></a></li>
							<li><a href="#"><span>My Bookmarks</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Employers</h3>
						<ul>
							<li><a href="#"><span>Browse Candidates</span></a></li>
							<li><a href="#"><span>Post a gig</span></a></li>
							<li><a href="#"><span>Post a Task</span></a></li>
							<li><a href="#"><span>Plans & Pricing</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Helpful Links</h3>
						<ul>
							<li><a href="#"><span>Contact</span></a></li>
							<li><a href="#"><span>Privacy Policy</span></a></li>
							<li><a href="#"><span>Terms of Use</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Account</h3>
						<ul>
							<li><a href="#"><span>Log In</span></a></li>
							<li><a href="#"><span>My Account</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
					<p>Weekly breaking news, analysis and cutting edge advices on gig searching.</p>
					<form action="#" method="get" class="newsletter">
						<input type="text" name="fname" placeholder="Enter your email address">
						<button type="submit"><i class="icon-feather-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
				
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Sign In Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Make a Bid</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Discuss your project</h3>
				</div>
					
				<!-- Form -->
				

					

					<textarea name="textarea" id="bid_message" cols="10" placeholder="Message" class="with-border"></textarea>

					
				
				
				<!-- Button -->
				<button onclick="apply_gig()" class="button margin-top-35 full-width button-sliding-icon ripple-effect" type="button">Confirm <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>
			<!-- Login -->
			

		</div>
	</div>
</div>
<!-- Sign In Popup / End -->


<!-- Scripts
================================================== -->
@include('layout.page_js')


<script type="text/javascript">
	function apply_gig()
	{
		var bid_rate = $("#rate").val();
		var bid_duration = $("#duration").val();
        var bid_message = $("#bid_message").val();
        var formData= new FormData();
    formData.append('proposed_rate',bid_rate);
    formData.append("proposed_duration",bid_duration);
    formData.append("bid_message",bid_message);
    formData.append("hire_to",{{$gig->user_id}});
   formData.append("gig_id",{{$gig->id}});
 
    formData.append("apply_gig","apply_gig");
      
     
    $.ajax({
      processData: false,
      contentType: false,
      type:"post",
	  url:"{{route('hire_entrepreneur')}}",
      data:formData,
      success:function(data,status){
	 
		

         swal({
  title: "Your request has been successfully placed",
 
  icon: "success",
  
 
})
.then((isConfrim) => {
  if (isConfrim) {
     location.reload();
  } 
});
        

      },

    });



	}

</script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
$(function(){
	$.ajaxSetup({

headers: {
	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
});
})
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 

// Snackbar for "place a bid" button
$('#snackbar-place-bid').click(function() { 
	Snackbar.show({
		text: 'Your bid has been placed!',
	}); 
}); 


// Snackbar for copy to clipboard button
$('.copy-url-button').click(function() { 
	Snackbar.show({
		text: 'Copied to clipboard!',
	}); 
}); 
</script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/single-task-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2019 13:32:35 GMT -->
</html>